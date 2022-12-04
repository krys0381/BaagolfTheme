<!-- HOMEPAGE - NEWS & UPDATES -->

<div class="newsupdates-component container-fluid">
  
  <div class="newsupdates-row g-0 container">
    <div class="row d-flex justify-content-between align-items-start">
      <div class="col-lg-12 col-sm-12 col-12 d-flex flex-column align-items-center">
        <div class="newsupdates-container d-flex flex-column justify-content-between">
          <div class="newsupdates-text-container">
            <h2><?php echo $attributes["title"]?></h2>
          </div>
          <div class="newsupdates-text-container d-flex flex-column align-items-start">
            <p>
              <?php echo $attributes["description"]?>
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row">
        <?php foreach($attributes["news-cards"] as $newsCard): ?>
            <div class="newsupdates-list-container d-flex flex-column align-items-center">
              <div class="newsupdates-list col-lg-10 col-sm-12 col-12 d-flex flex-wrap">
                <div class="newsupdates-list-img col-lg-7 col-sm-12 col-12">
                  <img src="<?php echo $newsCard["card-image"]?>" alt="">
                </div>
                <div class="newsupdates-list-description-container col-lg-5 col-sm-12 col-12 d-flex flex-column align-items-start justify-content-center p-5">
                  <h3><?php echo $newsCard["card-title"]?></h3>       
                  <div class="newsupdates-list-description mb-4">
                    <p>
                      <?php echo $newsCard["card-description"]?>
                    </p>
                  </div>
                  <div class="newsupdates-list-description d-flex col-lg-12 col-sm-12 col-12 flex-wrap">
                    <div class="newsupdates-card-btn col-lg-5 col-sm-12 col-12">
                      <a href="<?php echo $newsCard["card-button-link"]?>"><button type="button" class=" btn btn-primary btn-lg col-lg-12 col-sm-12 col-12"><?php echo $attributes["card-button-text"]?></button></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        <?php endforeach ?>

    </div>
  </div>

  <div class="newsupdates-row g-0 container">
    <div class="row d-flex justify-content-between align-items-start">
        <div class="col-lg-12 col-sm-12 col-12 d-flex flex-column align-items-center">
            <div class="newsupdates-btn col-lg-2 col-sm-12 col-12 me-3 mb-3">
                <a href="<?php echo $attributes["button-link"]?>"><button type="button" class=" btn btn-primary btn-lg col-lg-12 col-sm-12 col-12"><?php echo $attributes["button-text"]?></button></a>
            </div>
        </div>
    </div>
  </div>
</div>