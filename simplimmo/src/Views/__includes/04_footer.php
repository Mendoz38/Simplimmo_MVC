<!-- Footer area-->
<div class="footer-area">

    <div class="footer-copy text-center">
        <div class="container">
            <div class="row">
                <div class="pull-left">
                    <span> (C) <a href="#">SimplonTeam</a> , All rights reserved 2024 </span>
                </div>
                <div class="bottom-menu pull-right">
                    <ul>
                        <li><a class="wow fadeInUp animated" href="Contact" data-wow-delay="0.2s">Contact</a></li>
                        <li><a class="wow fadeInUp animated" href="Register" data-wow-delay="0.4s">Register</a></li>
                        <li><a class="wow fadeInUp animated" href="Login" data-wow-delay="0.6s">Login</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

</div>



<script src="<?= BASE_ASSETS; ?>assets/js/jquery-1.10.2.min.js"></script>
<script src="<?= BASE_ASSETS; ?>assets/js/bootstrap.min.js"></script>
<script src="<?= BASE_ASSETS; ?>assets/js/bootstrap-select.min.js"></script>
<script src="<?= BASE_ASSETS; ?>assets/js/bootstrap-hover-dropdown.js"></script>
<script src="<?= BASE_ASSETS; ?>assets/js/owl.carousel.min.js"></script>
<script src="<?= BASE_ASSETS; ?>assets/js/wow.js"></script>
<script src="<?= BASE_ASSETS; ?>assets/js/icheck.min.js"></script>
<script src="<?= BASE_ASSETS; ?>assets/js/price-range.js"></script>
<script src="<?= BASE_ASSETS; ?>assets/js/lightslider.min.js" type="text/javascript"></script>
<script src="<?= BASE_ASSETS; ?>assets/js/main.js"></script>

<script src="<?= BASE_ASSETS; ?>assets/js/jquery.tablesorter.js"></script>
<script src="<?= BASE_ASSETS; ?>assets/js/jquery.tablesorter.widgets.js"></script>
<script src="<?= BASE_ASSETS; ?>assets/js/jquery.tablesorter.config.js"></script>

<script>
    $(document).ready(function() {

        $('#image-gallery').lightSlider({
            gallery: true,
            item: 1,
            thumbItem: 9,
            slideMargin: 0,
            speed: 500,
            auto: true,
            loop: true,
            onSliderLoad: function() {
                $('#image-gallery').removeClass('cS-hidden');
            }
        });
    });
</script>


</body>

</html>