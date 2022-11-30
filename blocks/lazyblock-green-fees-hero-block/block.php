<!-- GREEN FEES - HERO  -->

<div class="green-hero-component container-fluid d-flex align-items-center justify-content-center overflow-hidden">  
  <div class="container content-container d-flex align-items-center justify-content-center">
    <div class="row d-flex flex-column align-items-center justify-content-start">
      <div class="green-hero-content-container col-lg-10 col-sm-12 col-12 d-flex flex-column flex-wrap align-items-center justify-content-center">
        <h1><?php echo $attributes["title"]?></h1>
        <p class="col-lg-8 my-3">
            <?php echo $attributes["description"]?>
        </p>
      </div>
    </div>
  </div>
  <div class="bg-image-container d-none d-xl-flex align-item-center justify-self-center">
    <img src="<?php echo $attributes["background-image"]?>" alt="">
  </div>
</div>
