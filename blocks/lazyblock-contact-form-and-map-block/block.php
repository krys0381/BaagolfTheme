<!-- CONTACT - CONTACT FORM & MAP -->

<div class="contact-container container-fluid overflow-hidden">
  <div class="container">
    <div class="row d-flex justify-content-between">
      <div class="contact-form-container d-flex justify-content-center flex-column col-lg-5 col-sm-12 col-12">
        <div class="contact-form-content-container">
            <form action="" class="form col-lg-6 col-sm-12 col-12 align-items-end" ref="form">
                <div class="mb-3 d-flex flex-column align-items-start">
                    <label class="form-label"><?php echo $attributes["form-label-1"]?></label>
                    <input type="text" class="form-control" id="nameInput" placeholder="" required>
                </div>
                <div class="mb-3 d-flex flex-column align-items-start">
                    <label class="form-label"><?php echo $attributes["form-label-2"]?></label>
                    <input type="email" class="form-control" id="emailInput" placeholder="" required>
                </div>
                <div class="mb-3 d-flex flex-column align-items-start">
                    <label class="form-label"><?php echo $attributes["form-label-3"]?></label>
                    <input type="telNumber" class="form-control" id="telNumberInput" placeholder="" required>
                </div>
                <div class="mb-3 d-flex flex-column align-items-start">
                    <label class="form-label"><?php echo $attributes["form-label-4"]?></label>
                    <textarea type="text" class="form-control" id="messageInput" placeholder="" required></textarea>
                </div>
                <a href="<?php echo $attributes["button-link"]?>"><button type="submit" class="btn btn-primary col-12 col-xl-12 btn-lg mt-3" name="send"><?php echo $attributes["button-text"]?></button></a>
            </form>
        </div>
      </div>
      <div class="contact-image col-lg-6 col-sm-12 col-12 d-flex align-items-center">
        <iframe src="<?php echo $attributes["embedded-map"]?>" width="600" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
    </div>
  </div>
</div>