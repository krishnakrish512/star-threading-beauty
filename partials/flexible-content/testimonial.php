<div class="clear"></div>

<!-- Section Testimonials
============================================= -->
<div id="section-testimonials" class="section page-section bg-transparent mt-0">
    <div class="container">
        <div class="row justify-content-center text-center" data-animate="fadeIn">
            <div class="col-12">
                <div class="overflow-hidden">
                    <div class="text-white-50 mb-2 text-uppercase ls3" data-animate="fadeInUpSmall" data-delay="100">
                        <?php the_sub_field('title'); ?>
                    </div>
                    <h3 class="display-4 color mb-0" data-animate="fadeInUpSmall fast" data-delay="200"><i
                                class="spa-facial pr-2 color"></i> <?php the_sub_field('sub_title'); ?></h3>
                </div>
                <a href="<?php the_sub_field('link'); ?>" data-animate="fadeInUpSmall" data-delay="300"
                   class="btn rounded-0 btn-border color mt-4"><i class="spa-star"></i><span
                            class="px-4"><?php the_sub_field('reviews_total'); ?></span></a>
            </div>
        </div>
    </div>
    <div id="oc-testi" class="owl-carousel carousel-widget dark topmargin border-bottom border-top border-light"
         data-items-xl="3" data-items-lg="3" data-items-md="2" data-items-xs="1" data-pagi="false" data-loop="true"
         data-margin="0"
         style="background: url('<?php the_sub_field('image_url'); ?>') no-repeat center center / 300px;">
        <?php while (have_rows('testimonial_repeater')):
            the_row()
            ?>
            <div class="oc-item p-5 d-flex flex-column text-center">
                <div class="testi-image mx-auto overflow-hidden">
                    <a href="#" class="data-animate"><img src="<?php the_sub_field('image'); ?>"
                                                          alt="Customer Testimonails"></a>
                </div>
                <div class="testi-content">
                    <div class="overflow-hidden">
                        <p class="data-animate"><?php the_sub_field('testimonial'); ?></p>
                    </div>
                    <div class="testi-meta data-animate">
                        <?php the_sub_field('author_name'); ?>
                        <span><?php the_sub_field('author_title'); ?></span>
                    </div>
                </div>
            </div>
        <?php endwhile; ?>
    </div>
</div>

