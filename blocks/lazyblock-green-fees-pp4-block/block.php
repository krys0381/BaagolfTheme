<!-- GREEN FEES - PAY AND PLAY 9-HOLE PAR 4 -->

<div class="payandplay9par4-component container-fluid">
  
    <div class="payandplay9par4-row g-0 container">
      <div class="row d-flex justify-content-between align-items-start">
        <div class="col-lg-12 col-sm-12 col-12 d-flex flex-column align-items-center">
          <div class="payandplay9par4-container d-flex flex-column justify-content-between">
            <div class="payandplay9par4-header-text-container d-flex flex-column">
              <h2><?php echo $attributes["title"]?></h2>
              <p><?php echo $attributes["subtitle"]?></p>
            </div>
            <div class="payandplay9par4-text-container d-flex flex-column align-items-center">
              <p>
                <?php echo $attributes["description"]?>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>  

    <div class="cards-row g-0 container">
        <div class="row d-flex justify-content-between align-items-start">
            <div class="col-lg-12 col-sm-12 col-12 d-flex flex-column align-items-center" style="border-bottom: 1px solid #09131D; padding-bottom: 80px;">  
                <div class="row row-cols-1 row-cols-md-3 g-4 d-flex justify-content-center" style="width: 80%;">

                    <?php foreach($attributes["tickets"] as $ticket): ?>
                        <div class="col-lg-3 col-sm-12 col-12">
                          <div class="card">
                            <h3 class="card-title">
                            <?php echo $ticket["ticket-price"]?>
                              <p><?php echo $ticket["ticket-title"]?></p>
                            </h3>
                            <ul class="list-group list-group-flush">
                              <li class="list-group-item">Ticket Description:</li>
                              <li class="list-group-item"><?php echo $ticket["ticket-field-1"]?></li>
                              <li class="list-group-item"><?php echo $ticket["ticket-field-2"]?></li>
                              <li class="list-group-item"><?php echo $ticket["ticket-field-3"]?></li>
                              <li class="list-group-item">
                                <a href="<?php echo $ticket["ticket-button-link"]?>"><button type="button" class=" btn btn-primary btn-lg col-lg-12 col-sm-12 col-12">BOOK NOW</button></a>
                              </li>
                            </ul>
                          </div>
                        </div>
                    <?php endforeach ?>

                </div>    
            </div>
        </div>
    </div>

</div>