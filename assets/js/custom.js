$(document).ready(function() {
    $('#subscribe-form').submit(function(event) {
        event.preventDefault(); // Prevent default form submission
        
        $.ajax({
            url : $(this).attr('action'), // The action URL of the form
            type : $(this).attr('method'), // The method (POST/GET)
            data :  $(this).serialize(), // Serialize form data
            success: function(response) {
                $('#mail-msg').html(response); // Display the response in a div
                console.log(response);
            },
            error: function(jqXHR, textStatus, errorThrown) {
                $('#mail-msg').html('Error: ' + errorThrown);
                console.log('Error: ' + errorThrown);
            }
        });
    });
});

$(document).ready(function() {
    $('#contactForm').on('submit', function(event) {
        event.preventDefault(); // Stop form submission

        // Get value of the first input with type 'email'
        
        const emailValue = $(this).find('input[name="email"]').val().trim();

        console.log('Email:', emailValue);
    });
});