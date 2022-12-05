<!-- HOMEPAGE - INTRODUCTION -->

<div class="introduction-component container-fluid">
  
  <div class="introduction-row g-0 container">
    <div class="row d-flex justify-content-between align-items-start">
      <div class="col-lg-12 col-sm-12 col-12 d-flex flex-column align-items-center">
        <div class="introduction-container d-flex flex-column justify-content-between">
          <div class="introduction-text-container">
            <h2><?php echo $attributes["introduction-title"]?></h2>
          </div>
          <div class="introduction-text-container d-flex flex-column align-items-center">
            <p>
                <?php echo $attributes["introduction-description"]?>
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- HOMEPAGE - SERVICES -->

  <div class="ourservices-row container  g-0">
    <div class="row d-flex justify-content-center">
      <div class="col-lg-12 col-sm-12 col-12 mb-5">
        <div class="ourservices-container">
          <div class="services-content-container d-flex justify-content-between flex-wrap">
            <div class="col-lg-12 col-sm-12 col-12 d-flex flex-wrap">

              <div class="ourservices-services d-flex align-items-center flex-column col-lg-6 col-sm-12 col-12 pb-5 px-2">
                <img src="<?php echo $attributes["services-icon-1"]?>" width="72" height="72" alt="Golf icon">
                <h4><?php echo $attributes["services-title-1"]?></h4>
                <p><?php echo $attributes["services-description-1"]?></p> 
              </div>

              <div class="ourservices-services  d-flex align-items-center flex-column col-lg-6 col-sm-12 col-12 pb-5 px-2">
                <img src="<?php echo $attributes["services-icon-2"]?>" width="72" height="72" alt="Football golf icon">
                <h4><?php echo $attributes["services-title-2"]?></h4>
                <p><?php echo $attributes["services-description-2"]?></p>
            </div>

              <div class="ourservices-services  d-flex align-items-center flex-column col-lg-6 col-sm-12 col-12 pb-5 px-2">
                <img src="<?php echo $attributes["services-icon-3"]?>" width="72" height="72" alt="Accommodation icon">
                <h4><?php echo $attributes["services-title-3"]?></h4>
                <p><?php echo $attributes["services-description-3"]?></p>
            </div>

              <div class="ourservices-services  d-flex align-items-center flex-column col-lg-6 col-sm-12 col-12 pb-5 px-2">
                <img src="<?php echo $attributes["services-icon-4"]?>" width="72" height="72" alt="Restaurant icon">
                <h4><?php echo $attributes["services-title-4"]?></h4>
                <p><?php echo $attributes["services-description-4"]?></p>
            </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</div>