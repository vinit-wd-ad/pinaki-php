(function ($) {
    "use strict";
    $(function () {
        $("#contactForm").validate({
            rules: {
                name: {
                    required: true,
                },
                phone: {
                    required: true,
                },
                email: {
                    required: true,
                    email: true,
                },
                company: {
                    required: true,
                },
                services: {
                    required: true,
                },
            },
            messages: {
                name: {
                    required: 'Name can not be empty',
                },
                phone: {
                    required: 'Phone can not be empty',
                },
                email: {
                    required: 'E-mail can not be empty',
                    email: 'Please enter a valid email address'
                },
                company: {
                    required: 'Company can not be empty',
                },
                services: {
                    required: 'Services can not be empty',
                },
            },
            submitHandler: function (form) {
                tosetrMessage('success', 'successfuly question add')
            }
        });
    });
    $(function () {
        $("#subscribe-form").validate({
            rules: {
                email: {
                    required: true,
                    email: true,
                },
            },
            messages: {
                email: {
                    required: 'E-mail can not be empty',
                    email: 'Please enter a valid email address'
                },
            },
            submitHandler: function (form) {
                tosetrMessage('success', 'successfuly question add')
            }
        });
    });

    function tosetrMessage(type, message) {
        $('.tostfyMessage').css({ "top": "5px", "visibility": "visible", "opacity": 1 });
        $('.tostfyMessage').find('.messageValue').text(message);
        if (type == 'success') {
            $('.tostfyMessage').addClass('bg-success')
        } else if (type == 'warning') {
            $('.tostfyMessage').addClass('bg-warning')
        } else if (type == 'error') {
            $('.tostfyMessage').addClass('bg-danger')
        }
        setTimeout(function () {
            $('.tostfyMessage').css({ "top": "-100%", "visibility": "hidden", "opacity": 0 })
        }, 3000);
        $('.tostfyClose').on('click', function () {
            $('.tostfyMessage').css({ "top": "-100%", "visibility": "hidden", "opacity": 0 })
        })
    }
})(jQuery);
