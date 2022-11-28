<!-- SPECIAL OFFER -->

<div class="offer-component container-fluid d-flex align-items-center justify-content-center overflow-hidden">  
  <div class="container content-container d-flex align-items-center justify-content-center">
    <div class="row d-flex flex-column align-items-end justify-content-start">
      <div class="offer-content-container col-lg-8 col-sm-12 col-12 d-flex flex-column flex-wrap align-items-center justify-content-center">
        <h2><?php echo $attributes["title"]?></h2>
        <p>
            <?php echo $attributes["description"]?>
        </p>
        <a href="<?php echo $attributes["button-link"]?>"><button type="button" class="btn btn-primary btn-lg 2 col-lg-2 col-md-12 col-sm-12 col-12">SIGN UP NOW</button></a>
      </div>
    </div>
  </div>
  <div class="bg-image-container d-none d-xl-flex align-item-center justify-self-center">
    <img src="<?php echo $attributes["background-image"]?>" alt="">
  </div>
</div>