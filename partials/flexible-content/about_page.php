<!-- Content
		============================================= -->
<section id="content">
    <div class="content-wrap">
        <!-- Section About
        ============================================= -->
        <div id="section-about" class="section page-section dark bg-transparent">
            <div class="container clearfix">

                <div class="row justify-content-center">
                    <div class="col-lg-6 mb-5 mb-lg-0">
                        <div class="overflow-hidden mb-4">
                            <h3 class="display-4 color mb-0" data-animate="fadeInUpSmall fast"><i
                                        class="spa-flowers pr-2 text-white-50"></i> About Us</h3>
                        </div>
                        <blockquote
                                class="border-light border-width-2 font-primary"><?php the_sub_field('description'); ?>
                        </blockquote>

                        <div class="clear"></div>

                        <div class="row mt-4">
                            <div class="col-auto">
                                <ul class="list-unstyled iconlist ml-4">
                                    <li><h5 class="mb-3 h5"><?php the_sub_field('working_days'); ?></h5></li>
                                    <li><h5 class="mb-3 h5"><?php the_sub_field('office_time'); ?></h5></li>
                                    <li><h5 class="mb-3 h5 text-white-50"><?php the_sub_field('holidays'); ?></h5></li>
                                </ul>
                            </div>
                            <div class="col d-none">
                                <p class="text-white-50"><?php the_sub_field('paragraph'); ?></p>
                            </div>
                        </div>

                        <div class="row counter-wrap align-items-center mt-4 d-none">
                            <div class="col-4 col-lg-4">
                                <div class="counter color"><span data-from="1" data-to="10" data-speed="1000"></span>+
                                </div>
                                <h5 class="mb-0 font-body text-white-50">Years</h5>
                            </div>

                            <div class="col-4 col-lg-4">
                                <div class="counter color"><span data-from="3" data-to="32" data-speed="1500"></span>
                                </div>
                                <h5 class="mb-0 font-body text-white-50">Branches</h5>
                            </div>

                            <div class="col-4 col-lg-4">
                                <div class="counter color"><span data-from="11" data-to="154" data-refresh-interval="50"
                                                                 data-speed="1500"></span>+
                                </div>
                                <h5 class="mb-0 font-body text-white-50">Employees</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5 box-img p-2 d-none d-lg-block">
                        <div class="h-100 rounded"
                             style="background: url('<?php the_sub_field('image_url'); ?>') no-repeat center center / cover;"></div>
                    </div>
                </div>
            </div>
        </div>
