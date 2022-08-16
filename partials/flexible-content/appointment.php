<!-- Section Appointment
				============================================= -->
<div id="section-appointment" class="section page-section bg-transparent topmargin-lg">
    <div class="container mw-md">
        <div class="row align-items-stretch">
            <div class="col-md-6 min-vh-50 d-flex flex-column">
                <?php while (have_rows('appointment_repeater')):
                    the_row()
                    ?>
                    <div class="h-50 rounded mt-2 px-5"
                         style="background: url('<?php the_sub_field('image_url'); ?>') no-repeat center center / cover;">
                        <div class="vertical-middle over">
                            <div class="overflow-hidden">
                                <div data-animate="fadeInUpSmall fast"
                                     class="text-black-50"><?php the_sub_field('title'); ?></div>
                            </div>
                            <div class="overflow-hidden">
                                <h3 data-animate="fadeInUpSmall fast" data-delay="100"
                                    class="h3 mb-0 mt-1"><?php the_sub_field('sub_title'); ?></h3>
                            </div>
                            <div class="overflow-hidden">
                                <a href="<?php the_sub_field('link'); ?>" data-animate="fadeInUpSmall fast"
                                   data-delay="200"
                                   class="button button-dark bg-color mt-3"><?php the_sub_field('link_title'); ?></a>
                            </div>
                        </div>
                    </div>
                <?php endwhile ?>

            </div>
            <div class="col-md-6 mt-5 mt-md-0">
                <div class="dark">
                    <div class="d-flex align-items-center bottommargin-sm">
                        <i class="spa-leaves  icon-stacked text-center border border-light color rounded-circle icon-2x mr-3 mb-0"></i>
                        <div>
                            <div class="overflow-hidden">
                                <div class="text-white-50" data-animate="fadeInUpSmall"
                                     data-delay="10"><?php the_sub_field('title'); ?>
                                </div>
                            </div>
                            <div class="overflow-hidden">
                                <h3 class="h3 mb-0 mt-1" data-animate="fadeInUpSmall"
                                    data-delay="100"><?php the_sub_field('sub_title'); ?></h3>
                            </div>
                        </div>
                    </div>
                    <div class="form-widget">
                        <div class="form-result"></div>
                        <?= do_shortcode('[contact-form-7 id="' . get_field('contact_form', 'option') . '"]') ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</section><!-- #content end -->
