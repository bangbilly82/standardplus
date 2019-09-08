<footer id="footer">
    <div class="columns is-gapless">
        <div class="column">
            <div class="content">
                <div class="footer-wrapper">
                    <div class="footer-items">
                        <p><i class="fa fa-phone">&nbsp;</i> (021) - 8493 9719</p>
                        <p><strong>info@standardplus.co.id</strong>
                        </p>
                    </div>
                    <div class="footer-items">
                        <p><strong>&copy; 2017 Standardplus</strong>
                        </p>
                        <p><strong>Designed by</strong> <a href="#">It'sbanana</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<script src="<?php echo base_url()?>resources/js/jquery.min.js"></script>
<script src="<?php echo base_url()?>resources/js/jquery.flexslider.js"></script>
<script src="<?php echo base_url()?>resources/js/lightslider.js"></script>
<script src="<?php echo base_url()?>resources/js/lightgallery.js"></script>
<script>
    $(document).ready(function () {
        $('#mobile-menu').hide();
        $('#drmb1,#drmb2').hide();
        initMobileNav();
        initDrmb1();
        initDrmb2();
        $('.flexslider').flexslider({
            animation: "slide"
        });
        $('#responsive-4').lightSlider({
            item: 6,
            loop: false,
            slideMove: 2,
            easing: 'cubic-bezier(0.25, 0, 0.25, 1)',
            speed: 400,
            responsive: [
                {
                    breakpoint: 800,
                    settings: {
                        item: 3,
                        slideMove: 1,
                        slideMargin: 6,
                    }
            },
                {
                    breakpoint: 480,
                    settings: {
                        item: 2,
                        slideMove: 1
                    }
            }
        ]
            ,
            onSliderLoad: function (el) {
                el.lightGallery({
                    selector: '#responsive .lslide',
                    download: false
                });
            }
        });
        $('#responsive,#responsive-2,#responsive-3').lightSlider({
            item: 4,
            loop: false,
            slideMove: 2,
            easing: 'cubic-bezier(0.25, 0, 0.25, 1)',
            speed: 400,
            responsive: [
                {
                    breakpoint: 800,
                    settings: {
                        item: 3,
                        slideMove: 1,
                        slideMargin: 6,
                    }
            },
                {
                    breakpoint: 480,
                    settings: {
                        item: 2,
                        slideMove: 1
                    }
            }
        ]
            ,
            onSliderLoad: function (el) {
                el.lightGallery({
                    selector: '#responsive .lslide',
                    download: false
                });
            }
        });
    });

    function initMobileNav() {
        $('#mobile-menu-trigger').click(function () {
            $('#mobile-menu').toggle();
        });
    }

    function initDrmb1() {
        $('#tdrmb1').click(function () {
            $('#drmb1').slideToggle();
        });
    }

    function initDrmb2() {
        $('#tdrmb2').click(function () {
            $('#drmb2').slideToggle();
        });
    }
</script>