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
                            <div class="header-navigation d-flex g-2">
                                <?php wp_nav_menu(array("theme_location" => "heared-nav-menu-location")) ?>
                                <a href="#"><button type="button" class=" btn btn-primary btn-lg col-lg-12 col-sm-12 col-12">BECOME A MEMBER</button></a>
                            </div>
                        </div> 

                    </div> 
                </div>
            </div>
        </div>
    </header>