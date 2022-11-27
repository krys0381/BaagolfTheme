<?php get_header() ?>

<!-- GREEN FEES - HERO -->

<div class="green-hero-component container-fluid d-flex align-items-center justify-content-center overflow-hidden">  
  <div class="container content-container d-flex align-items-center justify-content-center">
    <div class="row d-flex flex-column align-items-center justify-content-start">
      <div class="green-hero-content-container col-lg-10 col-sm-12 col-12 d-flex flex-column flex-wrap align-items-center justify-content-center">
        <h1>Green Fees</h1>
        <p class="col-lg-8 my-3">
          We offer different packages for guests who are not DGU card holders and those who are DGU card holders. The prices listed below are applicable to non-members of Blåvandshuk Golf Club.
        </p>
      </div>
    </div>
  </div>
  <div class="bg-image-container d-none d-xl-flex align-item-center justify-self-center">
    <img src="<?php echo get_stylesheet_directory_uri() . "/images/pexels-kindel-media-6572957.jpeg" ?>" alt="">
  </div>
</div>

<!-- GREEN FEES - PAY AND PLAY 9-HOLE PAR 3 -->

<div class="payandplay9par3-component container-fluid">
  
  <div class="payandplay9par3-row g-0 container">
    <div class="row d-flex justify-content-between align-items-start">
      <div class="col-lg-12 col-sm-12 col-12 d-flex flex-column align-items-center">
        <div class="payandplay9par3-container d-flex flex-column justify-content-between">
          <div class="payandplay9par3-header-text-container d-flex flex-column">
            <h2>Pay and Play 9-hole Par 3 Course</h2>
            <p>Available to All Guests</p>
          </div>
          <div class="payandplay9par3-text-container d-flex flex-column align-items-center">
            <p>
              The 9-hole Pay & Play par 3 course located on the meadow area with Ho Bugt. Naturally, everyone can also play here.
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
        
        <?php $courseLoop = new WP_Query(array(
          'post_type' => 'ticket',
          'tax_query' => array(
            array(
              'taxonomy' => 'course',
              'field'    => 'slug',
              'terms' => 'pp3-course'
            ),
          ),
          )); 
        ?>
          <?php while ($courseLoop->have_posts()): $courseLoop->the_post() ?>
            <div class="col-lg-3 col-sm-12 col-12">
              <div class="card">
                <h3 class="card-title">
                  <?php the_field("ticket_price") ?> DKK
                  <p><?php the_field("ticket_name") ?></p>
                </h3>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item">Ticket Description:</li>
                  <li class="list-group-item"><?php the_field("time_of_day") ?></li>
                  <li class="list-group-item"><?php the_field("age_restriction") ?></li>
                  <li class="list-group-item"><?php the_field("type_of_course") ?></li>
                  <li class="list-group-item"><?php the_field("dgu_card_requirement") ?></li>
                  <li class="list-group-item">
                    <a href="<?php the_field("product_link") ?>"><button type="button" class=" btn btn-primary btn-lg col-lg-12 col-sm-12 col-12">BOOK NOW</button></a>
                  </li>
                </ul>
              </div>
            </div>
          <?php endwhile ?>
        <?php wp_reset_postdata() ?>
        <!-- <div class="col-lg-3 col-sm-12 col-12">
          <div class="card">
            <h3 class="card-title">
              50 DKK
              <p>Junior PP3</p>
            </h3>
            <ul class="list-group list-group-flush">
              <li class="list-group-item">Ticket Description: </li>
              <li class="list-group-item">15 yrs old and below</li>
              <li class="list-group-item">9-hole par 3 course</li>
            </ul>
          </div>
        </div>
        <div class="col-lg-3 col-sm-12 col-12">
          <div class="card">
            <h3 class="card-title">
              2 500 DKK
              <p>Group Beginner Package</p>
            </h3>
            <ul class="list-group list-group-flush">
              <li class="list-group-item">Ticket Description:</li>
              <li class="list-group-item">Group of 15 people</li>
              <li class="list-group-item">9-hole par 3 course</li>
              <li class="list-group-item">Training</li>
              <li class="list-group-item">Golf equipment</li>
              <li class="list-group-item">Tee balls</li>
            </ul>
          </div>
        </div> -->
      </div>

      </div>
    </div>
  </div>

</div>

<!-- GREEN FEES - PAY AND PLAY 9-HOLE PAR 4 -->

<div class="payandplay9par4-component container-fluid">
  
  <div class="payandplay9par4-row g-0 container">
    <div class="row d-flex justify-content-between align-items-start">
      <div class="col-lg-12 col-sm-12 col-12 d-flex flex-column align-items-center">
        <div class="payandplay9par4-container d-flex flex-column justify-content-between">
          <div class="payandplay9par4-header-text-container d-flex flex-column">
            <h2>Pay and Play 9-Hole Par 4 Course (DGU Rated)</h2>
            <p>Available to All Guests</p>
          </div>
          <div class="payandplay9par4-text-container d-flex flex-column align-items-center">
            <p>
              The unique 9-hole Pay & Play par 4 course, also DGU approved, is also located in Klitplantagen with lakes and irrigation canals. Here, both experienced, beginners and green fee guests can challenge their golfing talent. Blåvandshuk Golf - Skovklubben is based here.
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

        <?php $courseLoop = new WP_Query(array(
          'post_type' => 'ticket',
          'tax_query' => array(
            array(
              'taxonomy' => 'course',
              'field'    => 'slug',
              'terms' => 'pp4-course'
            ),
          ),
          )); 
        ?>
          <?php while ($courseLoop->have_posts()): $courseLoop->the_post() ?>
            <div class="col-lg-3 col-sm-12 col-12">
              <div class="card">
                <h3 class="card-title">
                  <?php the_field("ticket_price") ?> DKK
                  <p><?php the_field("ticket_name") ?></p>
                </h3>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item">Ticket Description:</li>
                  <li class="list-group-item"><?php the_field("time_of_day") ?></li>
                  <li class="list-group-item"><?php the_field("age_restriction") ?></li>
                  <li class="list-group-item"><?php the_field("type_of_course") ?></li>
                  <li class="list-group-item"><?php the_field("dgu_card_requirement") ?></li>
                  <li class="list-group-item">
                    <a href="<?php the_field("product_link") ?>"><button type="button" class=" btn btn-primary btn-lg col-lg-12 col-sm-12 col-12">BOOK NOW</button></a>
                  </li>
                </ul>
              </div>
            </div>
          <?php endwhile ?>
        <?php wp_reset_postdata() ?>
        <!-- <div class="col-lg-3 col-sm-12 col-12">
          <div class="card">
            <h3 class="card-title">
              100 DKK
              <p>Junior PP4</p>
            </h3>
            <ul class="list-group list-group-flush">
              <li class="list-group-item">Ticket Description: </li>
              <li class="list-group-item">15 yrs old and below</li>
              <li class="list-group-item">
                9-hole par 4 course
                <br>
                (DGU rated)
              </li>
            </ul>
          </div>
        </div>
        <div class="col-lg-3 col-sm-12 col-12">
          <div class="card">
            <h3 class="card-title">
              3 300 DKK
              <p>Group PP4</p>
            </h3>
            <ul class="list-group list-group-flush">
              <li class="list-group-item">Ticket Description:</li>
              <li class="list-group-item">Group of 15 people</li>
              <li class="list-group-item">
                9-hole par 4 course
                <br>
                (DGU rated)
              </li>
              <li class="list-group-item">Training</li>
              <li class="list-group-item">Golf equipment</li>
              <li class="list-group-item">Tee balls</li>
            </ul>
          </div>
        </div> -->
      </div>

      </div>
    </div>
  </div>

</div>

<!-- GREEN FEES - 18-HOLE COURSE -->

<div class="hole18-component container-fluid">
  
  <div class="hole18-row g-0 container">
    <div class="row d-flex justify-content-between align-items-start">
      <div class="col-lg-12 col-sm-12 col-12 d-flex flex-column align-items-center">
        <div class="hole18-container d-flex flex-column justify-content-between">
          <div class="hole18-header-text-container d-flex flex-column">
            <h2>18-Hole Course (DGU Rated)</h2>
            <p>Exclusive to DGU Card Holders with Golf Driving License</p>
          </div>
          <div class="hole18-text-container d-flex flex-column align-items-center">
            <p>
              The 18-hole DGU-approved course, where the first 9 holes “Engen” are laid out in an open landscape with wide fairways, lakes, ditches, and canals.
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
          <?php $courseLoop = new WP_Query(array(
            'post_type' => 'ticket',
            'tax_query' => array(
              array(
                'taxonomy' => 'course',
                'field'    => 'slug',
                'terms' => '18-hole-course'
              ),
            ),
            )); 
          ?>
            <?php while ($courseLoop->have_posts()): $courseLoop->the_post() ?>
              <div class="col-lg-3 col-sm-12 col-12">
                <div class="card">
                  <h3 class="card-title">
                    <?php the_field("ticket_price") ?> DKK
                    <p>
                      <?php the_field("ticket_name") ?>
                    </p>
                  </h3>
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item">Ticket Description:</li>
                    <li class="list-group-item"><?php the_field("time_of_day") ?></li>
                    <li class="list-group-item"><?php the_field("age_restriction") ?></li>
                    <li class="list-group-item">
                      <?php the_field("type_of_course") ?>
                    </li>
                    <li class="list-group-item"><?php the_field("dgu_card_requirement") ?></li>
                    <li class="list-group-item">
                      <a href="<?php the_field("product_link") ?>"><button type="button" class=" btn btn-primary btn-lg col-lg-12 col-sm-12 col-12">BOOK NOW</button></a>
                    </li>
                  </ul>
                </div>
              </div>
            <?php endwhile ?>
          <?php wp_reset_postdata() ?>
          <!-- <div class="col-lg-3 col-sm-12 col-12">
            <div class="card">
              <h3 class="card-title">
                300 DKK
                <p>
                  Senior Pro
                  <br>
                  Weekday Afternoon
                </p>
              </h3>
              <ul class="list-group list-group-flush">
                <li class="list-group-item">Ticket Description:</li>
                <li class="list-group-item">Weekday after 12:00</li>
                <li class="list-group-item">Above 15 yrs old</li>
                <li class="list-group-item">
                  18-hole course
                  <br>
                  (DGU rated)
                </li>
                <li class="list-group-item">DGU card required</li>
              </ul>
            </div>
          </div>
          <div class="col-lg-3 col-sm-12 col-12">
            <div class="card">
              <h3 class="card-title">
                350 DKK
                <p>
                  Senior Pro
                  <br>
                  Weekend/Holiday
                </p>
              </h3>
              <ul class="list-group list-group-flush">
                <li class="list-group-item">Ticket Description:</li>
                <li class="list-group-item">Weekend / Holiday</li>
                <li class="list-group-item">Above 15 yrs old</li>
                <li class="list-group-item">
                  18-hole course
                  <br>
                  (DGU rated)
                </li>
                <li class="list-group-item">DGU card required</li>
              </ul>
            </div>
          </div>
          <div class="col-lg-3 col-sm-12 col-12">
            <div class="card">
              <h3 class="card-title">
                250 DKK
                <p>
                  Senior Pro
                  <br>
                  Forni hole 1-9
                </p>
              </h3>
              <ul class="list-group list-group-flush">
                <li class="list-group-item">Ticket Description:</li>
                <li class="list-group-item">Weekday</li>
                <li class="list-group-item">Above 15 yrs old</li>
                <li class="list-group-item">
                  9-hole
                  <br> 
                  (Forni hole 1-9)
                </li>
                <li class="list-group-item">DGU card required</li>
              </ul>
            </div>
          </div>
          <div class="col-lg-3 col-sm-12 col-12">
            <div class="card">
              <h3 class="card-title">
                150 DKK
                <p>
                  Junior PP4
                  <br>
                  Everyday
                </p>
              </h3>
              <ul class="list-group list-group-flush">
                <li class="list-group-item">Ticket Description:</li>
                <li class="list-group-item">Everyday</li>
                <li class="list-group-item">15 yrs old and below</li>
                <li class="list-group-item">
                  18-hole course
                  <br>
                  (DGU rated)
                </li>
                <li class="list-group-item">DGU card required</li>
              </ul>
            </div>
          </div> -->
        </div>

      </div>
    </div>
  </div>

</div>

<?php get_footer() ?>