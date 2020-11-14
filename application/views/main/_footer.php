

<footer>
<div class="container">
<div class="row">
     <p class="footer-logo">
                                <img style="width:200px" src="<?php echo get_logo_footer($this->visual_settings); ?>" alt="logo" class="logo">
                            </p>
    <h2>
        সম্পাদক ও প্রকাশকঃ 
    </h2>
<p>
    ঠিকানা : ৬৫, রাসুল ভিউ, ময়মনসিংহ লেন, বাংলামটর,  ঢাকা -১০০০   ।
</p>
</div>
</footer>


<div class="sub-footer">
<div class="container">
<div class="row">
<div class="col-xs-12 col-sm-5 col-md-5">
<div class="copy"><?php echo html_escape($this->settings->copyright); ?></div>
</div>
<div class="col-xs-12 col-sm-7 col-md-7">
<ul class="footer-nav">
<li><a href="archive.html">আর্কাইভ</a></li>
<li><a href="psi.html">পিএসআই</a></li>
<li><a href="feed">RSS</a></li>
<li><a href="http://barta24.com:8080/tools/converter/?platform=pc&amp;host=barta24.com">কনভার্টার</a></li>
</ul>
</div>
</div>
 </div>
</div>


<script src="/assets/inews/js/jquery-ui.min.js"></script>

<script src="/assets/inews/js/bootstrap.min.js"></script>

<script src="/assets/inews/bootsnav/js/bootsnav.js"></script>

<script src="/assets/inews/js/theia-sticky-sidebar.js"></script>

<script src="/assets/inews/js/RYPP.js"></script>

<script src="/assets/inews/owl-carousel/owl.carousel.min.js"></script>

<!--<script src="home/js/archive_calendar.js"></script>-->
<script src="//cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>
<!--<script src="mobile/js/lodash.js"></script>-->
<!--<script async src="../platform.twitter.com/widgets.js" charset="utf-8"></script>-->

<script src="/assets/inews/js/custom.js"></script>
<style type="text/css">
        .bx-controls {
            display: none;
        }
    </style>
<script>
        // set cookie
        function setCookie(cname,cvalue,exdays) {
            var d = new Date();
            d.setTime(d.getTime() + (exdays*60*1000));
            var expires = "expires=" + d.toGMTString();
            document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
        }

        //get cookie
        function getCookie(cname) {
            var name = cname + "=";
            var decodedCookie = decodeURIComponent(document.cookie);
            var ca = decodedCookie.split(';');
            for(var i = 0; i < ca.length; i++) {
                var c = ca[i];
                while (c.charAt(0) == ' ') {
                    c = c.substring(1);
                }
                if (c.indexOf(name) == 0) {
                    return c.substring(name.length, c.length);
                }
            }
            return "";
        }
    </script>
<script>
        $(document).ready(function() {
            function initSlide(id) {
                var slider = $('#' + id + ' .slider').bxSlider({
                    dots: false
                });

                $('#' + id +' .slider-nav .left').click(function() {
                    slider.goToPrevSlide();
                });
                $('#' + id + ' .slider-nav .right').click(function() {
                    slider.goToNextSlide();
                });
            }

            initSlide('default-slider');
            initSlide('binodon-slider');
        });
        jQuery(document).ready(function($) {
    $("#welcome-ad").css('display','block');
    $('#welcome-ad .ad-close').click(function(event) {
        $("#welcome-ad .ad-area").animate({top: '-900px'});
        $("#welcome-ad").fadeOut('slow');
    });
    setTimeout(function(){
        $("#welcome-ad .ad-area").animate({top: '-900px'});
        $("#welcome-ad").fadeOut('slow');
    },8000);
    
    $('ul.nav li.dropdown').hover(function() {
        $(this).find('.dropdown-menu').stop(true, true).delay(100).fadeIn(300);
    }, function() {
        $(this).find('.dropdown-menu').stop(true, true).delay(100).fadeOut(300);
    });



    $(window).scroll(function () {
        if ( $(this).scrollTop() > $('header').height() ) {
            $('.main-navbar').css({
                position: 'fixed',
                top: '0',
            });
        } else {
            $('.main-navbar').css('position', 'static');
        }
    });

});
    </script>
    <script>
        $(document).ready(function(){
            var originalFontSize = $('.entry-content p').css('font-size');
            $(".incFont").click(function(){
                var currentFontSize = $('.entry-content p').css('font-size');
                var currentFontSizeNum = parseFloat(currentFontSize, 10);
                var newFontSize = currentFontSizeNum * 1.2;
                if(newFontSize <= 32)
                $('.entry-content p').css('font-size', newFontSize);
                return false;
            });
            $(".decFont").click(function(){
                var currentFontSize = $('.entry-content p').css('font-size');
                var currentFontSizeNum = parseFloat(currentFontSize, 10);
                var newFontSize = currentFontSizeNum*0.8;
                if(newFontSize >= 14)
                    $('.entry-content p').css('font-size', newFontSize);
                return false;
            });
        });
    </script>
</body>


</html>