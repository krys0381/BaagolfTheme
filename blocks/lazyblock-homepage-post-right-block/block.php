<!-- HOMEPAGE - POST RIGHT -->

<div class="homepage-container container-fluid overflow-hidden">
  <div class="container">
    <div class="row d-flex justify-content-between">
      <div class="homepage-image col-lg-6 col-sm-12 col-12 d-flex align-items-center">
        <img src="<?php echo $attributes["image"]?>" alt="">
      </div>
      <div class="homepage-text-container d-flex justify-content-center flex-column col-lg-5 col-sm-12 col-12">
        <div class="homepage-text-content-container">
          <h2 class="my-2">
            <?php echo $attributes["title"]?>
          </h2>
          <p class="homepage-text-p">
            <?php echo $attributes["description"]?>
          </p>
          <div class="homepage-text-content-container col-lg-12 col-sm-12 col-12 d-flex justify-content-start align-item-center">
            <a href="<?php echo $attributes["button-link"]?>"><button type="button" class="btn btn-primary btn-lg col-lg-5 col-sm-12 col-12">BECOME A MEMBER</button></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>