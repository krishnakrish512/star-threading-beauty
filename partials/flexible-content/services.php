<div class="clear"></div>

<!-- Section Services
============================================= -->
<div id="section-services" class="section page-section dark bg-transparent m-0 pb-0">
    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col-12">
                <div class="overflow-hidden">
                    <div class="text-white-50 mb-2 text-uppercase ls3" data-animate="fadeInUpSmall" data-delay="10">What
                        We Do
                    </div>
                    <h3 class="display-4 color mb-0" data-animate="fadeInUpSmall fast"><i
                                class="spa-ointment2 color"></i> Our Services</h3>
                </div>
            </div>
        </div>
    </div>

    <div class="row dark align-content-stretch grid-border topmargin">
        <?php while (have_rows('service_repeater')):
            the_row()
            ?>
            <div class="col-lg-4 col-md-6 col-padding">
                <div class="feature-box flex-column fbox-plain">
                    <div class="fbox-icon mb-3 overflow-hidden">
                        <i data-animate="fadeInUpSmall fast" class="<?php the_sub_field('icons'); ?>"></i>
                    </div>
                    <div class="fbox-content">
                        <div class="overflow-hidden mb-3">
                            <h2 class="h3 text-white mb-0" data-animate="fadeInUpSmall fast"
                                data-delay="100"><?php the_sub_field('title'); ?></h2>
                        </div>
                        <div class="overflow-hidden">
                            <p class="mb-0" data-animate="fadeInUpSmall fast"
                               data-delay="200"><?php the_sub_field('description'); ?></p>
                        </div>
                    </div>
                </div>
            </div>
        <?php endwhile; ?>
    </div>
</div>
