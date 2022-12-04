<!-- HOMEPAGE - OUR GOLF COURSES -->

<div class="golfcourses-component container-fluid">
  
  <div class="golfcourses-row g-0 container">
    <div class="row d-flex justify-content-between align-items-start">
      <div class="col-lg-12 col-sm-12 col-12 d-flex flex-column align-items-center">
        <div class="golfcourses-container d-flex flex-column justify-content-between">
          <div class="golfcourses-text-container">
            <h2><?php echo $attributes["title"]?></h2>
          </div>
          <div class="golfcourses-text-container d-flex flex-column align-items-start">
            <p>
                <?php echo $attributes["description"]?>
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="card-group">
    <?php foreach($attributes["course-cards"] as $courseCard): ?>
        <div class="col-lg-4 col-sm-12 col-12 d-flex justify-content-center">
            
            <div class="card">
                <img src="<?php echo $courseCard["image"]?>" class="card-img-top" alt="...">
                <div class="card-body">   
                  <h3 class="card-title"><?php echo $courseCard["card-title"]?></h3>
                  <div class="card-text-container d-flex">
                    <img src="<?php echo $courseCard["par-icon"]?>" width="26" height="26" alt="">
                    <p class="card-text"><?php echo $courseCard["par"]?></p>
                  </div>
                  <div class="card-text-container d-flex">
                    <img src="<?php echo $courseCard["holes-icon"]?>" width="26" height="26" alt="">
                    <p class="card-text"><?php echo $courseCard["holes"]?></p>
                  </div>
                  <div class="card-text-container d-flex">
                    <img src="<?php echo $courseCard["lenght-icon"]?>" width="26" height="26" alt="">
                    <p class="card-text"><?php echo $courseCard["lenght"]?></p>
                  </div>
                  <div class="card-text-container d-flex ">
                    <img src="<?php echo $courseCard["status-icon"]?>" width="26" height="26" alt="">
                    <p class="card-text"><?php echo $courseCard["status"]?></p>
                  </div>
                  <a href="<?php echo $courseCard["button-link"]?>"><button type="button" class="btn btn-primary btn-lg col-lg-6 col-sm-12 col-12"><?php echo $courseCard["button-text"]?></button></a>
                </div>
            </div>
            
        </div>
    <?php endforeach ?>
  </div>
</div>