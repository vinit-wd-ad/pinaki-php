<!-- <div id="preloader">
    <img src="assets/images/icon/pinki-logo-190-64.png" alt="loader">
</div> -->

<header id="header">
    <div class="header-top">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-9">
                    <ul class="ht-contacts">
                        <li><a href="#">Have any questions?</a></li>
                        <li><a href="#"><i class="fa fa-phone"></i>+91
                                9999598826</a></li>
                        <li><a href="#"><i
                                    class="fa fa-envelope"></i>regulatory@pinakipharma.com</a></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <ul class="ht-social">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="header-bottom-wrapper" style="height: 0px !important;">
        <div class="header-bottom">
            <div class="container">
                <div class="row align-items-start">
                    <div class="col-sm-1">
                        <div class="logo">
                            <a href="<?php echo BASE_URL; ?>" class="p-0"><img
                                    src="<?php echo BASE_URL; ?>assets/images/icon/pinki-logo-190-64.png"
                                    alt="logo"></a>
                        </div>
                    </div>
                    <div
                        class="col-lg-11 d-none d-lg-flex justify-content-between">
                        <div class="main-menu">
                            <nav>
                                <ul id="nav_mobile_menu">
                                    <li class="<?php if ($page_active == 'home') echo 'active'; ?>"><a href="<?php echo BASE_URL; ?>">Home</a>
                                    </li>
                                    <li class="<?php if ($page_active == 'about') echo 'active'; ?>"><a href="<?php echo BASE_URL; ?>about">About Us</a>
                                    </li>
                                    <li class="<?php if ($page_active == 'services') echo 'active'; ?>"><a href="services">Services</a>
                                        <ul class="submenu mega-menu">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <li class="border-bottom <?php if ($ser_active == 'regulatory-affairs') echo 'active'; ?>"><a href="<?php echo BASE_URL; ?>regulatory-affairs"><b>REGULATORY AFFAIRS</b></a></li>
                                                    <li class="<?php if ($active == 'cdsco-dcgi-license') echo 'active'; ?>"><a href="<?php echo BASE_URL; ?>cdsco-dcgi-license">CDSCO</a></li>
                                                    <li class="<?php if ($active == 'nppa-pricing-overcharging-matters') echo 'active'; ?>"><a href="<?php echo BASE_URL; ?>nppa-pricing-overcharging-matters">NPPA: Pricing & Overcharging Matters</a></li>
                                                    <li class="<?php if ($active == 'fssai-food-license') echo 'active'; ?>"><a href="<?php echo BASE_URL; ?>fssai-food-license">FSSAI: Food License</a></li>
                                                    <li class="<?php if ($active == 'legalization-mea-embassy') echo 'active'; ?>"><a href="<?php echo BASE_URL; ?>legalization-mea-embassy">Legalization: MEA & Embassy</a></li>
                                                    <li class="<?php if ($active == 'state-license') echo 'active'; ?>"><a href="<?php echo BASE_URL; ?>state-license">State License</a></li>
                                                    <li class="<?php if ($active == 'central-bureau-of-narcotics-quota') echo 'active'; ?>"><a href="<?php echo BASE_URL; ?>central-bureau-of-narcotics-quota">Central Bureau of Narcotics Quota</a></li>
                                                    <li class="<?php if ($active == 'dsir') echo 'active'; ?>"><a href="<?php echo BASE_URL; ?>dsir">DSIR</a></li>
                                                </div>
                                                <div class="col-md-6">
                                                    <!-- <li class="border-bottom <?php if ($ser_active == 'legal-services') echo 'active'; ?>"><a href="<?php echo BASE_URL; ?>legal-services"><b>LEGAL SERVICES</b></a></li> -->
                                                    <!--<br><br>-->
                                                    <li class="border-bottom <?php if ($ser_active == 'quality-assurance') echo 'active'; ?>"><a href="<?php echo BASE_URL; ?>quality-assurance"><b>QUALITY ASSURANCE</a></b></li>
                                                </div>
                                            </div>
                                        </ul>
                                    </li>
                                    <li class="<?php if ($page_active == 'our-clients') echo 'active'; ?>"><a href="<?php echo BASE_URL; ?>our-clients">Our Clients</a></li>
                                    <li class="<?php if ($page_active == 'contact') echo 'active'; ?>"><a href="<?php echo BASE_URL; ?>contact">Contact Us</a></li>
                                </ul>
                            </nav>
                        </div>
                        <form class="example" action>
                            <input type="text" placeholder="Search.."
                                name="search">
                            <button type="submit"><i
                                    class="fa fa-search"></i></button>
                        </form>
                    </div>
                    <div class="col-12 d-block d-lg-none">
                        <div id="mobile_menu"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>