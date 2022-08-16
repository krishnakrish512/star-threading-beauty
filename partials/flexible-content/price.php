<div class="clear"></div>

<!-- Section Price
============================================= -->
<div id="section-price" class="section page-section dark mt-0 pb-0 overflow-visible"
     style="background: linear-gradient(rgba(0,0,0,.3), transparent), url('<?php the_sub_field('image_url'); ?>') no-repeat center center / cover;">
    <div class="container">
        <div class="row justify-content-end mx-auto mw-md " style="transform: translateY(70px);">
            <div class="col-lg-5 col-md-7">
                <p class="border border-light p-2 d-inline text-smaller "><?php the_sub_field('discount'); ?></p>
                <h3 class="display-4 mt-2 text-white"><i class="spa-cost pr-2"></i>Pricing</h3>
                <div class="card bg-color border-light shadow-lg">
                    <div class="card-body p-4">
                        <?php while (have_rows('beauty_type_repeater')) :
                            the_row()
                            ?>
                            <div class="overflow-hidden">
                                <div class="row align-items-center" data-animate="fadeInUpSmall faster">
                                    <div class="col-3">
                                        <img src="<?php the_sub_field('image_url'); ?>" alt="Image" class="rounded">
                                    </div>
                                    <div class="col-9">
                                        <h4 class="mb-2"><?php the_sub_field('title'); ?></h4>
                                        <div class="d-flex align-middle text-smaller">
                                            <?php while (have_rows('price_repeater')):
                                                the_row()
                                                ?>
                                                <div><span class="op-04"><?php the_sub_field('timing'); ?></span><span
                                                            class="font-primary ml-2"><?php the_sub_field('price'); ?></span>
                                                </div>
                                                <small><i class="icon-circle text-smaller op-02 mx-3"></i></small>
                                            <?php endwhile; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="line my-4"></div>
                        <?php endwhile; ?>

                        <a href="<?php the_sub_field('link'); ?>"
                           class="btn rounded-0 btn-border color btn-block size-sm mt-4" target="_blank"><span
                                    class="flex-grow-1 font-body"><?php the_sub_field('title'); ?></span><i
                                    class="icon-line-arrow-right border-left border-light border-right-0"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
