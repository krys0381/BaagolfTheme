<!-- HOMEPAGE - HERO -->

<div class="hero-component container-fluid d-flex align-items-center justify-content-center overflow-hidden">  
  <div class="container content-container d-flex align-items-center justify-content-center">
    <div class="row d-flex flex-column align-items-center justify-content-start">
      <div class="hero-content-container col-lg-10 col-sm-12 col-12 d-flex flex-column flex-wrap align-items-center justify-content-center">
        <h1><?php echo $attributes["title"]?></h1>
        <p class="col-lg-8 my-3">
            <?php echo $attributes["subtitle"]?>
        </p>
        <a href="<?php echo $attributes["button-link"]?>"><button type="button" class="btn btn-primary btn-lg 2 col-lg-2 col-md-12 col-sm-12 col-12"><?php echo $attributes["button-text"]?></button></a>
      </div>
    </div>
  </div>
  <div class="bg-image-container d-none d-xl-flex d-lg-flex align-item-center justify-self-center">
    <video height="900px" autoplay muted loop>
      <source src="<?php echo $attributes["background-video"]?>" type="video/mp4">
      Your browser does not support the video tag.
    </video>    
  </div>
</div>