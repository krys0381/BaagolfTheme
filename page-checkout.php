<?php get_header() ?>

<div class="checkout-component container-fluid">
    <div class="checkout-row g-0 container">
        <div class="row d-flex justify-content-between align-items-start">
            <div class="col-lg-12 col-sm-12 col-12 d-flex flex-column align-items-center">
                <div class="checkout-container d-flex flex-column justify-content-between">
                    <?php if(have_posts()): ?>
                        <?php while(have_posts()): the_post() ?>
                            <h2><?php the_title() ?></h2>
                            <?php the_content() ?>
                        <?php endwhile; ?>
                    <?php else: ?>
                        <p>Sorry, there has been an error.</p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer() ?>