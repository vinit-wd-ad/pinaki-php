<?php include "setting.php" ?> 

<!doctype html>
<html class="no-js" lang>

<?php include  ABS_PATH . "component/head.php" ?>


<!-- Header Sectioon -->
<!-- =============================== -->
<?php include  ABS_PATH . "component/header.php" ?>
<!-- ================================ -->

<div style="background: url(assets/images/about-banner-2.jpg) no-repeat center center / cover;" class="breadcumb-area">
    <div class="container">
        <div class="row">
            <div class="col-12 d-flex justify-content-center">
                <h3 class="title pt--10 text-light">Contact Us</h3>
            </div>
        </div>
    </div>
</div>

<!-- Service Section Start -->
<div class="service-area">
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="section-title">
                    <p class="sub-title">Our Clients</p>
                    <h2 class="title">Our Clients</h2>
                    <p>We assist clients with quality and regulatory needs in multiple life science industries.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
       <div class="row our-client">
            <div class="col-12 hlp-col">
                <?php include ABS_PATH . 'component/clients-grid.php'; ?>
            </div>
       </div>
    </div>
    <!-- <img src="<?php echo BASE_URL; ?>assets/images/shape2.png" alt="shape2" class="shape2"> -->
</div>
<!-- Service Section End -->

<!-- ============================ -->
<!-- Join Section -->
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