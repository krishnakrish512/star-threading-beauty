<!-- Footer
    ============================================= -->

<?php
$contact = get_field('contact', 'option');
?><?php
$social = get_field('social', 'option');
?>
<footer id="footer" class="bg-transparent border-width-1 border-light dark">

    <div class="container">

        <!-- Footer Widgets
        ============================================= -->
        <div class="footer-widgets-wrap">

            <div class="row justify-content-between col-mb-30">
                <div class="col-lg-4 col-sm-6">
                    <div class="widget clearfix"
                         style="background: url('images/world-map.png') no-repeat center center; background-size: 100% auto;">
                        <div>
                            <h3>About Us:</h3>
                            <address>
                                <p><?= $contact['address'] ?></p>
                            </address>
                            <ul class="list-unstyled">
                                <li class="mb-1"><span class="color op-07">Phone:</span> <span
                                            class="font-primary"><?= $contact['phone_number'] ?></span>
                                </li>
                                <li class="mb-1"><span class="color op-07">Email:</span> <span
                                            class="font-primary"><?= $contact['email'] ?></span>
                                </li>
                                <li><span class="color op-07">WebSite:</span> <a
                                            href="<?= $contact['web_site'] ?>"> <span
                                                class="font-primary"><?= $contact['web_title'] ?></span></a></li>
                            </ul>
                            <a href="<?= $social['facebook_url'] ?>" class="social-icon si-small si-light si-facebook"
                               target="_blank">
                                <i class="icon-facebook"></i>
                                <i class="icon-facebook"></i>
                            </a>

                            <a href="<?= $social['yelp_url'] ?>" class="social-icon si-small si-light si-yelp"
                               target="_blank">
                                <i class="icon-yelp"></i>
                                <i class="icon-yelp"></i>
                            </a>

                            <a href="<?= $social['gplus_url'] ?>" class="social-icon si-small si-light si-gplus"
                               target="_blank">
                                <i class="icon-gplus"></i>
                                <i class="icon-gplus"></i>
                            </a>

                            <a href="<?= $social['pinterest_url'] ?>"
                               class="social-icon si-small si-light si-pinterest" target="_blank">
                                <i class="icon-pinterest"></i>
                                <i class="icon-pinterest"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">

                    <div class="widget widget_links clearfix d-none">

                        <h4>Links</h4>

                        <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="#">About</a></li>
                            <li><a href="#">Testimonials</a></li>
                            <li><a href="#">Price</a></li>
                            <li><a href="#">Gallery</a></li>
                            <li><a href="#">Contact</a></li>
                        </ul>

                    </div>

                </div>
                <div class="col-lg-5 col-md-12">
                    <div class="widget clearfix text-lg-right">
                        <div>
                            <img src="<?= $contact['footer_logo'] ?>" alt="Image" height="35" class="mb-4">
                            <p class="text-white-50 mb-5"><?= $contact['description'] ?></p>
                            <div class="row justify-content-between border border-light">
                                <div class="col-4 py-3 text-center border-right border-light overflow-hidden"><h5
                                            class="mb-0"
                                            data-animate="fadeInUpSmall faster"><?= $contact['working_days'] ?></h5>
                                </div>
                                <div class="col-4 py-3 text-center border-right border-light overflow-hidden"><h5
                                            class="mb-0" data-animate="fadeInUpSmall faster"
                                            data-delay="100"><?= $contact['office_time'] ?></h5></div>
                                <div class="col-4 py-3 text-center overflow-hidden"><h5 class="mb-0 text-white-50"
                                                                                        data-animate="fadeInUpSmall faster"
                                                                                        data-delay="200"><?= $contact['holiday'] ?></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

    <!-- Copyrights
    ============================================= -->
    <div id="copyrights" class="bg-transparent border-top border-light">

        <div class="container clearfix">

            <div class="row justify-content-center">

                <div class="col-md-6 text-center">
                    <p class="mb-0">Copyrights &copy; <?php echo date('Y'); ?> All Rights Reserved by Stars threading &
                        Beauty Inc.</p>
                    <p class="mb-0">
                        Website by:
                        <a href="https://nirvanstudio.com/" target="_blank" class="design-by text-white">Nirvan
                            Studio</a>
                    </p>
                    <div class="overflow-hidden d-none">
                        <div class="copyright-links" data-animate="fadeInUpSmall faster" data-delay="200"><a href="#">Terms
                                of Use</a> / <a href="#">Privacy Policy</a></div>
                    </div>
                </div>

            </div>


        </div>

    </div><!-- #copyrights end -->

</footer><!-- #footer end -->

</div><!-- #wrapper end -->

<!-- Go To Top
============================================= -->
<div id="gotoTop" class="icon-angle-up"></div>
<?php wp_footer(); ?>

<!-- JavaScripts
============================================= -->


<!-- Include Date Range Picker -->
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

<!-- Footer Scripts
============================================= -->


<script>
    (function () {
        $("#template-contactform-date").flatpickr({
            enableTime: true,
            altInput: true,
            altFormat: "F j, Y  - H:i",
            minDate: "today",
            time_24hr: true
        });
        $('a[href^="#"]').click(function (event) {
            var id = $(this).attr("href");
            var target = $(id).offset().top - 100;
            $('html, body').animate({scrollTop: target}, 500);
            event.preventDefault();
        });
        $('.menu-container li:first-child').addClass('current-menu-item');
        $('.menu-container li a').on('click', function () {
            $(this).parent().addClass('current-menu-item');
            $(this).parent().siblings().removeClass('current-menu-item')
        });


    })(jQuery);

</script>

</body>
</html>