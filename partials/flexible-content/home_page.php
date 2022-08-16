<!-- Hero
		============================================= -->
<section id="slider" class="slider-element min-vh-60 min-vh-md-100 include-header border-bottom border-light dark"
         style="background: url('<?php the_sub_field('image_url'); ?>') no-repeat top right; background-size: auto 100%;">
    <div class="slider-inner">

        <div class="container">
            <div class="row align-items-center h-100 mt-2 mt-lg-6">
                <div class="col-md-6">
                    <?php while (have_rows('header_repeater')):
                        the_row()
                        ?>
                        <div class="overflow-hidden">
                            <h2 class="display-3 font-weight-normal mb-0"
                                data-animate="fadeInUpSmall faster"><?php the_sub_field('title'); ?></h2>
                        </div>
                    <?php endwhile; ?>
                    <div class="overflow-hidden mb-5">
                        <p class="lead mb-0" data-animate="fadeInUpSmall faster"
                           data-delay="200"><?php the_sub_field('description'); ?></p>
                    </div>
                    <div class="overflow-hidden mb-4">
                        <a href="<?php the_sub_field('link'); ?>" data-animate="fadeInUpSmall faster" data-delay="300"
                           data-scrollto="#section-appointment" data-easing="easeInOutExpo" data-speed="1250"
                           data-offset="140" class="btn rounded-0 btn-border color size-lg"><i
                                    class="icon-calendar21"></i><span><?php the_sub_field('title'); ?></span></a>
                    </div>
                </div>
            </div>
        </div>
        <?php
        $social = get_field('social', 'option');
        ?>
        <div class="position-absolute d-flex" style="top: auto; bottom: 20px; right: 20px;">
            <a href="<?= $social['facebook_url'] ?>"
               class="social-icon mx-1 si-border si-small border-light si-facebook"
               data-animate="bounceInRight">
                <i class="icon-facebook"></i>
                <i class="icon-facebook"></i>
            </a>

            <a href="<?= $social['instagram_url'] ?>"
               class="social-icon mx-1 si-border si-small border-light si-instagram"
               data-animate="bounceInRight" data-delay="100">
                <i class="icon-instagram"></i>
                <i class="icon-instagram"></i>
            </a>

            <a href="<?= $social['twitter_url'] ?>" class="social-icon mx-1 si-border si-small border-light si-twitter"
               data-animate="bounceInRight"
               data-delay="200">
                <i class="icon-twitter"></i>
                <i class="icon-twitter"></i>
            </a>
        </div>

    </div>
</section><!-- #content end -->
