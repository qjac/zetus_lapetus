<?php
$page = "Home";
require_once('inc/header.php'); ?>
<svg width="20px" height="180%" viewBox="0 0 185% 15"
     xmlns="http://www.w3.org/2000/svg">
    <!-- 9-pixel dash, 5-pixel gap -->
    <line x1="20" y1="10" x2="20" y2="1500"
          style="stroke-dasharray: 30, 20;
       stroke: #d9cb70; stroke-width: 3;"/>
    </svg>
	<div class="container">
        <div class="content col s12 m12 l10 offset-l2">
        <h1>a virtual reality headset that pairs with IOS + Android platforms</h1>
            <img class="headset off-mobile" src="img/headsetempty.png" width="600" alt="">
        </div><!-- content col s12 m7 l7 -->
	</div><!-- .container -->
</header><!-- .header -->
<main class="main">
	<section id="core-features"  class="section scroll">
		<div class="container">
			<div class="content col s12 m12 l6 offset-l6">
				<h2>Zetus Lapetus</h2>
                <h4>Redefining digital entertainment</h4>
                <p class="text-center"><a class="button-big button-big-tertiary" href="learn.php">Learn More</a></p>
			</div><!-- .content -->
		</div><!-- .container -->
	</section><!-- #section0 .section -->
	<section id="applications" class="scroll section">
		<div class="container">
            <div class="row">
                <div class="col s12 m12 l7">
                    <h2>DOWNLOAD THE APP</h2>
                    <h4>Play games or go inside your favorite movies. Travel anywhere, learn, shop or hang out with friends in VR</h4>
                    <p class="text-center"><a class="button-big button-big-tertiary" href="applications.php">Explore Experiences</a></p>
                </div>
            </div>
		</div><!-- .container -->
	</section><!-- #section1 .section -->
	<section id="video-section" class="off-mobile section">
        <video id="video" controls>
            <source src="img/videogame.mp4" type="video/mp4">
            <source src="img/videogame.ogg" type="video/ogg">
            Your browser does not support the video tag.
        </video>
    </section><!-- #section2 .section -->
	<section id="devices" class="scroll section">
		<div class="container">
            <div class="row">
                <div class="col s12">
                    <h2 class="text-center">built for Apple IOS + Android</h2>
                    <h3 class="text-center"> shop for the accessories you’ll need to get started at Zetus Lapetus retail shop</h3>
                </div>
                <div class="device-container col s12 m6 l6">
                    <p class="text-center"><i class="fa fa-apple device-icon" aria-hidden="true"></i></p>
                    <p class="text-center"><a class="button-big button-big-tertiary" href="shop.php">Check the shop</a></p>
                </div>
                <div class="device-container col s12 m6 l6">
                    <p class="text-center"><i class="fa fa-android device-icon" aria-hidden="true"></i></p>
                    <p class="text-center"><a class="button-big button-big-tertiary" href="applications.php">Application</a></p>
                </div>
            </div>
		</div><!-- .container -->
	</section><!-- #section3 .section .page4 -->
    <section class="section" id="where-to-buy">
        <div class="container">
            <div class="col s12 m6 l3">
                <h3 class='text-center'>Available at</h3>
            </div><!-- .quarter -->
            <div class="col s12 m6 l4">
                <p class="text-center">
                    <a href="https://www.amazon.com">
                        <img class="fade-to" src="img/amazon-gray.png">
                    </a>
                </p>
            </div><!-- .quarter -->
            <div class="col s12 m6 l2">
                <p class="text-center">
                    <a href="shop.php">
                        <img class="fade-to" src="img/zl-mark-2.png">
                    </a>
                </p>
            </div><!-- .quarter -->
            <div class="col s12 m6 l3">
                <p class="text-center">
                    <a href="https://www.bestbuy.com">
                        <img class="fade-to" src="img/bestbuy-gray.png">
                    </a>
                </p>
            </div><!-- .quarter -->
        </div>
    </section>
</main>
<?php require_once('inc/footer.php'); ?>
<script type="text/javascript">
    if ( $( window ).width() > 480 ) {
        var movementStrength = 100;
        var height = movementStrength / $(window).height();
        var width = movementStrength / $(window).width();
        $("#Home").mousemove(function (e) {
            var pageX = e.pageX - ($(window).width() / 2);
            var pageY = e.pageY - ($(window).height() / 2);
            var newvalueX = width * pageX * -1 - 25;
            var newvalueY = height * pageY * -1 - 100;
            $('.header').css("background-position", newvalueX - 50 + "px " + newvalueY + "px");
        });
    }
    var video = document.getElementById('video');
    video.addEventListener('click',function(){
        video.play();
    },false);
</script>
<!-- <script type="text/javascript" src="js/jquery.scrollify.min.js"></script> -->