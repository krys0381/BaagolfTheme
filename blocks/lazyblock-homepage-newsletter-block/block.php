<!-- NEWSLETTER -->

<div class="newsletter-component container-fluid d-flex align-items-center justify-content-center overflow-hidden">  
    <div class="container content-container d-flex align-items-center justify-content-center">
        <div class="row d-flex flex-column align-items-center justify-content-start">
            <div class="newsletter-content-container col-lg-10 col-sm-12 col-12 d-flex flex-column flex-wrap align-items-center justify-content-center">
                <h2><?php echo $attributes["title"]?></h2>
                <p class="col-lg-8">
                    <?php echo $attributes["description"]?>
                </p>
                <div class="newsletter-form-container col-lg-12 col-sm-12 col-12 d-flex">
                    <form action="" class="form col-lg-8 col-sm-12 col-12 align-items-end" ref="form">
                        <div class="mb-3 d-flex flex-column align-items-start">
                            <input type="text" class="form-control" id="emailInput" placeholder="Your email address" required>
                        </div>
                    </form>
                    <a href="<?php echo $attributes["subscribe-link"]?>"><button type="submit" class="btn btn-primary">SUBSCRIBE</button></a>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-image-container d-none d-xl-flex d-lg-flex d-md-flex align-item-center justify-self-center">
      <img src="<?php echo $attributes["background-image"]?>" alt="">
    </div>
</div>