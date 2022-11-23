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
                <div class="header-row row d-none d-xl-flex">
                    <div class="desktop-menu-container d-none d-xl-flex justify-content-between">

                        <div class="left-menu-container d-flex col-6 align-items-center justify-content-start" >
                            <div class="logo-container col-5">
                                <a href="/">
                                    <div class="image-container d-flex justify-content-start align-items-center">
                                        <img src="<?php echo get_stylesheet_directory_uri() . "/images/Blåvandshuk golf logo.png" ?>" alt="">
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="right-menu-container col-6 d-flex align-items-center justify-content-end g-2">
                            <div class="navigation d-flex g-2">
                                <p>HOME</p>
                                <p>ABOUT</p>
                                <p>GOLF</p>
                                <p>MEMBERSHIP</p>
                                <p>MORE</p>
                                <p>CONTACT</p>
                            </div>
                        </div> 

                    </div> 
                </div>
            </div>
        </div>
    </header>