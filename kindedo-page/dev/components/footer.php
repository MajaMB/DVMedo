<?php
require_once __DIR__ . '/../config.php';
$config = loadConfig();
?>
<!-- footer area start -->
<footer>
    <div class="bd-footer-area pt-200">
        <!-- footer area bg here  -->
        <div class="bd-gradient-bg"></div>
        <div class="bd-footer pt-90 pb-25">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="bd-footer-widget bd-footer-widget-1 mb-50">
                            <div class="bd-footer-logo mb-35">
                                <a href="index.html"> <img
                                            src="<?php echo $config['BASE_URL']; ?>assets/img/logo/logo.svg"
                                            alt="img not found!"></a>
                            </div>
                            <div class="bd-footer-widget-content mb-40">
                                <p>In our Adult Participation programs, for most students, it is their first program in
                                    Kindedo. </p>
                            </div>
                            <div class="bd-footer-bottom-social pb-20">
                                <ul>
                                    <li><a target="_blank" href="https://www.instagram.com/dvmedo"><i
                                                    class="fa-brands fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="bd-footer-widget bd-footer-widget-2 mb-50">
                            <div class="bd-footer-widget-content">
                                <h4 class="bd-footer-widget-title mb-30">O nama</h4>
                                <div class="bd-footer-list">
                                    <ul>
                                        <li><a href="<?php echo $config['BASE_URL'];?>about.php">O nama</a></li>
                                        <li><a href="<?php echo $config['BASE_URL'];?>director-notes.php">Riječ ravnateljice</a></li>
                                        <li><a href="<?php echo $config['BASE_URL'];?>programs.php">Programi</a></li>
                                        <li><a href="<?php echo $config['BASE_URL'];?>#">Impressum</a></li>
                                        <li><a href="<?php echo $config['BASE_URL'];?>galerija.php">Galerija</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="bd-footer-widget bd-footer-widget-3 mb-50">
                            <div class="bd-footer-widget-content">
                                <h4 class="bd-footer-widget-title mb-30">Korisno</h4>
                                <div class="bd-footer-list">
                                    <ul>
                                        <li><a href="<?php echo $config['BASE_URL'];?>upisi.php">Upisi</a></li>
                                        <li><a href="<?php echo $config['BASE_URL'];?>jelovnik.php">Jelovnik</a></li>
                                        <li><a href="<?php echo $config['BASE_URL'];?>application.php">Natječaji</a></li>
                                        <li><a href="<?php echo $config['BASE_URL'];?>obavijesti.php">Novosti</a></li>
                                        <li><a href="<?php echo $config['BASE_URL'];?>faq.php">Česta pitanja</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="bd-footer-widget bd-footer-widget-4">
                            <div class="bd-footer-widget-content">
                                <h4 class="bd-footer-widget-title mb-30">Kontakt</h4>
                                <div class="bd-footer-contact">
                                    <ul>
                                        <li><i class="fa-light fa-location-dot"></i><a href="#">Varaždinska ulica 12, Otok Virje</a></li>
                                        <li><i class="fa-light fa-phone"></i><a href="tel:042208000">042/ 208 – 000</a>
                                        </li>
                                        <li><i class="fa-light fa-phone"></i><a href="tel:+385 92 4456 554">+385 92 4456 554</a></li>
                                        <li><i class="fa-light fa-envelope"></i><a href="mailto:info@vrtic-medo.hr">info@vrtic-medo.hr</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- footer area end -->

<!-- JS here -->
<script src="<?php echo $config['BASE_URL']; ?>assets/js/vendor/jquery.js"></script>
<script src="<?php echo $config['BASE_URL']; ?>assets/js/vendor/waypoints.js"></script>
<script src="<?php echo $config['BASE_URL']; ?>assets/js/bootstrap-bundle.js"></script>
<script src="<?php echo $config['BASE_URL']; ?>assets/js/meanmenu.js"></script>
<script src="<?php echo $config['BASE_URL']; ?>assets/js/swiper-bundle.js"></script>
<script src="<?php echo $config['BASE_URL']; ?>assets/js/slick.js"></script>
<script src="<?php echo $config['BASE_URL']; ?>assets/js/nouislider.js"></script>
<script src="<?php echo $config['BASE_URL']; ?>assets/js/magnific-popup.js"></script>
<script src="<?php echo $config['BASE_URL']; ?>assets/js/parallax.js"></script>
<script src="<?php echo $config['BASE_URL']; ?>assets/js/backtotop.js"></script>
<script src="<?php echo $config['BASE_URL']; ?>assets/js/nice-select.js"></script>
<script src="<?php echo $config['BASE_URL']; ?>assets/js/wow.min.js"></script>
<script src="<?php echo $config['BASE_URL']; ?>assets/js/isotope-pkgd.js"></script>
<script src="<?php echo $config['BASE_URL']; ?>assets/js/imagesloaded-pkgd.js"></script>
<script src="<?php echo $config['BASE_URL']; ?>assets/js/ajax-form.js"></script>
<script src="<?php echo $config['BASE_URL']; ?>assets/js/jquery.appear.js"></script>
<script src="<?php echo $config['BASE_URL']; ?>assets/js/jquery.odometer.min.js"></script>
<script src="<?php echo $config['BASE_URL']; ?>assets/js/main.js"></script>
</body>

</html>