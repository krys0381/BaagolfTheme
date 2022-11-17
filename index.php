<?php get_header() ?>

<body>
    <div class="introduction-component container-fluid">
        <div class="introduction-row g-0 container">
            <div class="row d-flex justify-content-between align-items-start">
                <div class="col-lg-6 col-sm-12 col-12 mb-5" data-aos="fade-right">                    
                </div>

                <div class=" col-lg-5 col-sm-12 col-12">
                    <div class="introduction-container d-flex flex-column justify-content-between">
                        <div class="introduction-text-container">
                            <div id="line"></div>
                            <h4>WHO WE ARE</h4>
                        </div>
                        <div class="introduction-text-container d-flex flex-column align-items-start mb-5">
                            <h2>OUR STORY</h2>
                            <p>
                                Phasellus finibus enim nulla, quis ornare odio facilisis eu. Suspendisse ornare ante sit amet arcu semper, vel eleifend tortor egestas. Aenean luctus, lorem in hendrerit interdum, leo orci egestas diam, ac euismod massa est et turpis. Etiam auctor lectus vel neque convallis pharetra. Ut turpis eros, aliquet non ante id, 
                                <br><br>
                                Phasellus finibus enim nulla, quis ornare odio facilisis eu. Suspendisse ornare ante sit amet arcu semper, vel eleifend tortor egestas. Aenean luctus, lorem in hendrerit interdum, leo orci egestas diam, ac euismod massa est et turpis. Etiam auctor lectus vel neque convallis pharetra. Ut turpis eros, aliquet non ante id, 
                            </p>
                        </div>
                        <div class="introduction-text-container col-lg-6 col-sm-12 col-12">
                            <button type="button" class="btn btn-primary btn-lg col-lg-12 col-sm-12 col-12" @click="$router.push('about')">READ MORE</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
    
<?php get_footer() ?>