<div class="footer container-fluid">
    <div class="container">
        <div class="footer-row row g-0 d-none d-xl-flex col-lg-12 align-items-center">
            
            <div class="footer-menu-row col-12 d-flex align-items-top justify-content-center">
                    <div class="logo-container col-3 p-0 d-flex align-items-top justify-content-start">
                        <div class="image-container">
                            <?php the_custom_logo() ?>
                        </div>
                    </div>
                    <div class="col-3 p-0 d-flex align-items-top justify-content-start">
                        <div class="footer-text-container">
                            <h4>Working Hours</h4>
                            <p>Weekday 7:00 AM - 5:00 PM</p>
                            <p>Weekend 10:00 AM - 8:00 PM</p>
                        </div>
                    </div>
                    <div class="col-3 p-0 d-flex align-items-top justify-content-start">
                        <div class="footer-text-container">
                                <h4>Contact Details</h4>
                                <div class="contact-details-container d-flex">
                                    <img src="<?php echo get_stylesheet_directory_uri() . "/images/pin.png" ?>" width="26" height="26" alt="">
                                    <p>Søndertoften 29, Blåvand, Denmark</p>
                                </div>
                                <div class="contact-details-container d-flex">
                                    <img src="<?php echo get_stylesheet_directory_uri() . "/images/phone-call.png" ?>" width="26" height="26" alt="">
                                    <p>+45 75278811</p>
                                </div>
                                <div class="contact-details-container d-flex">
                                    <img src="<?php echo get_stylesheet_directory_uri() . "/images/email.png" ?>" width="26" height="26" alt="">
                                    <p>
                                        sekretariat@blaagolf.dk
                                        info@blaagolf.dk
                                    </p>
                                </div>
                            </div>
                        </div>
                    <div class="col-3 p-0 d-flex align-items-center justify-content-center">
                        <div class="footer-navigation">
                            <?php wp_nav_menu(array("theme_location" => "footer-nav-menu-location")) ?>
                        </div>
                    </div>
            </div>                            
            <div class="footer-end-container col-12 d-flex p-3 align-items-center justify-content-center">
                <div class="rights-container col-6 d-flex p-0 align-items-center justify-content-between">
                    <p>© 2022 Blåvandshuk Golf Club</p>
                    <p>Privacy Policy</p>
                    <p>Terms and Conditions</p>
                </div>
                <div class="soc-links-container col-6 d-flex p-0 align-items-center justify-content-end">
                    <div class="soc-links col-2 d-flex p-0 justify-content-between">
                        <img src="<?php echo get_stylesheet_directory_uri() . "/images/facebook-app-symbol.png" ?>" width="26" height="26" alt="">
                        <img src="<?php echo get_stylesheet_directory_uri() . "/images/instagram.png" ?>" width="26" height="26" alt="">
                        <img src="<?php echo get_stylesheet_directory_uri() . "/images/linkedin.png" ?>" width="26" height="26" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php wp_footer() ?>

</body>

</html>