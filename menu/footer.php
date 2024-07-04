<footer class="footerbottombg">
    <section>
        <div class="container">
            <div class="footerbox">
                <div class="row">
                    <div class="col-lg-4">
                         <img src="images/logo-light.svg" class="f-logo darkthemeicon">      
                         <img src="images/logo.svg" class="f-logo lightthemeicon">                  
                        <div class="qrbg d-flex align-items-center">
                            <div><span class="qrborderbox"><img src="images/qrcode.png" alt="icon" class="qrimg"></span></div>
                            <div class="h5">Scan now to Download <br>IOS and Android</div>
                        </div>
                    </div>
                    <div class="col-lg-2">       
                     <h3 class="h3">Company</h3>                
                        <ul class="foot-list">
                            <li><a href="aboutus.php">About Us</a></li>
                            <li><a href="terms.php">Term & Conditions</a></li>
                            <li><a href="privacy.php">Privacy Policy</a></li>
                            <li><a href="index.php#howitworks">How it works</a></li>
                        </ul>
                    </div>                  
                    <div class="col-lg-2">
                        <h3 class="h3">Support</h3>
                        <ul class="foot-list">
                            <li><a href="contactus.php">Contact Us</a></li>
                            <li><a href="#">24/7 Support</a></li>
                            <li><a href="faq.php">FAQ's</a></li>
                            <li><a href="index.php#features">Features</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-2">
                        <h3 class="h3">Quick Links</h3>
                        <ul class="foot-list">
                            <li><a href="#">Market</a></li>
                            <li><a href="ieooverview.php">IEO Launchpad</a></li>
                            <li><a href="ieolisting.php">Apply for listing</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-2">
                        <h3 class="h3">Service</h3>
                        <ul class="foot-list">
                            <li><a href="#">Download APP</a></li>
                            <li><a href="index.php#merchanttools">Merchant Tools</a></li>
                            <li><a href="index.php#supportedcurrency">Supported Cryptocurrency</a></li>                          
                        </ul>
                    </div>                  
                </div>
            </div>
           <p class="ftext text-center mb-0">Copyright © 2024 Pmvblock. All rights reserved.</p>                
        </div>
    </section>
</footer>

<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/datepicker.min.js"></script>
<script src="js/simplebar.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/intlTelInput.js"></script>
<script src="js/aos.js"></script>
<script src="js/jquery.countdown.min.js"></script>
<script>
$(function() {
    AOS.init();
});
</script>
<script>
$(document).ready(function() {
    function e() {
        $(window).width() < 768 ? $(".table-responsive-stack").each(function(e) {
            $(this).find(".table-responsive-stack-thead").show(), $(this).find("thead").hide()
        }) : $(".table-responsive-stack").each(function(e) {
            $(this).find(".table-responsive-stack-thead").hide(), $(this).find("thead").show()
        })
    }
    $(".table-responsive-stack").each(function(e) {
        var t = $(this).attr("id");
        $(this).find("th").each(function(e) {
            $("#" + t + " td:nth-child(" + (e + 1) + ")").prepend(
                '<span class="table-responsive-stack-thead">' + $(this).text() +
                "  </span> "), $(".table-responsive-stack-thead").hide()
        })
    }), $(".table-responsive-stack").each(function() {
        var e = $(this).find("th").length,
            t = 100 / e + "%";
        $(this).find("th, td").css("flex-basis", t)
    }), e(), window.onresize = function(t) {
        e()
    }
});
</script>
<script>
/*scrolling banner*/
$(document).ready(function() {
    $('.partnerscroll').owlCarousel({
        items: 1,
        nav: false,
        loop: true,
        autoplay: true,
        margin: 10,
        mouseDrag: true,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1
            },
            400: {
                items: 1
            },
            600: {
                items: 3
            },

            767: {
                items: 5
            },
            992: {
                items: 5
            },
            1400: {
                items: 6
            }
        }
    });

});
</script>
<script>
$(window).scroll(function() {
    var scroll = $(window).scrollTop();
    if (scroll >= 100) {
        $(".headbg").addClass("darkHeader");
    } else {
        $(".headbg").removeClass("darkHeader");
    }
});
</script>
<script>
$(".nightmodeicon").click(function() {
    $("body").addClass("nightmode");
    $(".nightmodeicon").addClass("activemode");
    $(".daymodeicon").removeClass("activemode");
});

$(".daymodeicon").click(function() {
    $("body").removeClass("nightmode");
    $('.daymodeicon').addClass("activemode");
    $(".nightmodeicon").removeClass("activemode");
});
</script>


<script>
$(window).on('load', function() {
    setTimeout(function() {
        $('.loader').fadeOut('slow');
    }, 1000);
});
</script>
<script>
var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
var tooltipList = tooltipTriggerList.map(function(tooltipTriggerEl) {
    return new bootstrap.Tooltip(tooltipTriggerEl)
})
</script>
</body>

</html>