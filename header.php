<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo("name") ?></title>
    <?php wp_head() ?>
</head>

<body>

    <header>
        <div class="header container-fluid">
            <div class="container">
                <div class="header-row row d-flex">
                    <div class="desktop-menu-container d-flex justify-content-between">

                        <div class="left-menu-container d-flex col-4 align-items-center justify-content-start" >
                            <div class="logo-container col-8">
                                <div class="image-container d-flex justify-content-start align-items-center">
                                    <?php the_custom_logo() ?>
                                </div>
                            </div>
                        </div>

                        <div class="right-menu-container col-8 d-flex align-items-center justify-content-end g-2">
                            <div class="header-navigation d-none d-xl-flex g-2">
                                <?php wp_nav_menu(array("theme_location" => "heared-nav-menu-location")) ?>
                                <a href="#"><button type="button" class=" btn btn-primary btn-lg col-lg-12 col-sm-12 col-12">BECOME A MEMBER</button></a>
                            </div>

                            <div class="mobile-navigation d-flex d-xl-none g-2">
                                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                                    <div class="hamburger">
                                        <div class="bars1"></div>
                                        <div class="bars2"></div>
                                        <div class="bars3"></div>
                                    </div>
                                </button>
                                <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                                    <div class="offcanvas-header" style="background-color: #F4F4F5;">
                                      <h4 class="offcanvas-title" id="offcanvasNavbarLabel">Menu</h4>
                                      <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                    </div>
                                    <div class="offcanvas-body" style="background-color: #F4F4F5;">
                                        <?php wp_nav_menu(array("theme_location" => "mobile-nav-menu-location")) ?>
                                        <a href="#"><button type="button" class=" btn btn-primary btn-lg col-lg-12 col-sm-12 col-12">BECOME A MEMBER</button></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div> 
                </div>
            </div>
        </div>
    </header>