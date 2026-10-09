<?php include "setting.php" ?> 

<!doctype html>
<html class="no-js" lang>

<?php include  ABS_PATH . "component/head.php" ?>

<!-- Header Sectioon -->
<!-- =============================== -->
<?php include  ABS_PATH . "component/header.php" ?>
<!-- ================================ -->

<div style="background: url(assets/images/service/service-banner-1.png) no-repeat center center / cover fixed;" class="breadcumb-area">
    <div class="container">
        <div class="row">
            <div class="col-12 d-flex justify-content-center text-center">
                <h3 class="service-title pt--10">Quality Assurance</h3>
            </div>
        </div>
    </div>
</div>


<!-- Why Us Section -->
<div class="help-center-area why-area service">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mx-4 mx-md-0" style=" background: url(assets/images/service/service-7.png) no-repeat center center / cover ;">
                <div class="hlp-center-thumb aos-init aos-animate" data-aos="fade-in" data-aos-offset="100">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="hlp-center-content px-lg-0">
                <p class="sub-title mb-2">QA : Quality Assurance</p>
                <h4 class="title mb-4">Quality Assurance</h4>
                <p>Quality Assurance (QA) ensures the production of high-quality pharmaceutical products, supported by Pharmaceutical Quality Systems (PQS) and Good Manufacturing Practices (GMP). Together, these frameworks maintain compliance with Government of India standards.</p><br>
                <p>At Pinaki Pharma Advisory, we assist clients in:</p>
                <p><b>GMP Audit Services:</b> Preparing for GMP audits to meet regulatory standards.</p>
                <p><b>GAP Analysis:</b> Identifying and addressing areas for improvement to strengthen operations.</p>
                <p>Our expertise helps clients achieve excellence in pharmaceutical quality.	 </p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Why Us Section -->

<!-- Image Section Start -->
<div class="service-area">
    <div class="container">
        <div class="row justify-content-around">
            <div class="col-12 d-flex justify-content-center">
                <img src="<?php echo BASE_URL; ?>assets/images/service/quality.jpeg" alt="" class="w-50">
            </div>
        </div>
    </div>
    <!-- <img src="<?php echo BASE_URL; ?>assets/images/shape2.png" alt="shape2" class="shape2"> -->
</div>
<!-- Image Section Ends -->

<!-- Testimonial Section Start -->
<div class="testimonial-area" style="padding-bottom:100px !important;">
    <div class="review-overlay"
        style="background-image: url('assets/images/review-back.png');"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="single-feature" data-aos="fade-up"
                    data-aos-anchor=".feature-area"
                    data-aos-delay="140">
                    <div class="icon">
                        <img src="<?php echo BASE_URL; ?>assets/images/icon/heand-check.png" alt="ftr-icon1">
                    </div>
                    <div class="content">
                        <h4><a href="#">GMP Audit Service</a></h4>
                        <p>We assist regularly to our clients in providing for the preparation of GMP (Good Manufacturing Practice) audit to strengthen their organization for meeting the GMP standards as designed by the Government of India. </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="single-feature" data-aos="fade-up"
                    data-aos-anchor=".feature-area"
                    data-aos-delay="175">
                    <div class="icon">
                        <img src="<?php echo BASE_URL; ?>assets/images/icon/group-man.png" alt="ftr-icon1">
                    </div>
                    <div class="content">
                        <h4><a href="#">GAP Analysis</a></h4>
                        <p>A gap analysis is a process that compares current and desired states to identify areas for improvement in a pharmaceutical company.<br><br></p>
                    </div>
                </div>
            </div>  
        </div>
    </div>
</div>
<!-- Testimonial Section End -->


<!-- ==================================== -->
<!-- Join / Appoinment Section -->
<?php include  ABS_PATH . 'component/join-section.php' ?>


<!-- Contact Start -->
<?php include  ABS_PATH . "component/home-contact.php" ?>
<!-- Contact End -->


<!-- Footer Section -->
<!-- ================================= -->
<?php include  ABS_PATH . "component/footer.php" ?>
<!-- ================================== -->

<div class="overlay"></div>

<!-- Footer links -->
<?php include  ABS_PATH . "component/footer-links.php" ?>

</body>

</html>