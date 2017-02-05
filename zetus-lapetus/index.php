<?php
$page = "Home";
require_once('inc/header.php'); ?>
	<div class="container">
        <div class="content col s12 m7 l12">
        <h1>a virtual reality headset that pairs with IOS + Android platforms</h1>
            <img class="headset off-mobile" src="img/headsetempty.png" width="600" alt="">
        </div><!-- content col s12 m7 l7 -->
	</div><!-- .container -->
</header><!-- .header -->
<main class="main">
	<section id="core-features"  class="section scroll">
		<div class="container">
			<div class="content col s12 m7 l6 offset-l6">
				<h2>Zetus Lapetus</h2>
                <h4>Redefining digital entertainment</h4>
                <p class="text-center"><a class="button-big button-big-tertiary" href="#">Learn More</a></p>
			</div><!-- .content -->
		</div><!-- .container -->
	</section><!-- #section0 .section -->
	<section id="applications" class="scroll section">
		<div class="container">
            <div class="row">
                <div class="col s12 m6 l6">
                    <h2>DOWNLOAD THE APP</h2>
                    <h4>Play games or go inside your favorite movies. Travel anywhere, learn, shop or hang out with friends in VR</h4>
                    <p class="text-center"><a class="button-big button-big-tertiary" href="#">Explore Experiences</a></p>
                </div>
            </div>
		</div><!-- .container -->
	</section><!-- #section1 .section -->
	<section id="vrgoggles" class="scroll section">
        <div id="player"></div>
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
                    <p class="text-center"><a class="button-big button-big-tertiary" href="#">Apple VR Package</a></p>
                </div>
                <div class="device-container col s12 m6 l6">
                    <p class="text-center"><i class="fa fa-android device-icon" aria-hidden="true"></i></p>
                    <p class="text-center"><a class="button-big button-big-tertiary" href="#">Android VR Package</a></p>
                </div>
            </div>
		</div><!-- .container -->
	</section><!-- #section3 .section .page4 -->
</main>
<script>
//    // 2. This code loads the IFrame Player API code asynchronously.
//    var tag = document.createElement('script');
//
//    tag.src = "https://www.youtube.com/iframe_api";
//    var firstScriptTag = document.getElementsByTagName('script')[0];
//    firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
//
//    // 3. This function creates an <iframe> (and YouTube player)
//    //    after the API code downloads.
//    var player;
//    function onYouTubeIframeAPIReady() {
//        player = new YT.Player('player', {
//            height: '100%',
//            width: '100%',
//            videoId: 'M7lc1UVf-VE',
//            events: {
//                'onReady': onPlayerReady,
//                'onStateChange': onPlayerStateChange
//            }
//        });
//    }
//
//    // 4. The API will call this function when the video player is ready.
//    function onPlayerReady(event) {
//        event.target.playVideo();
//    }
//
//    // 5. The API calls this function when the player's state changes.
//    //    The function indicates that when playing a video (state=1),
//    //    the player should play for six seconds and then stop.
//    var done = false;
//    function onPlayerStateChange(event) {
//        if (event.data == YT.PlayerState.PLAYING && !done) {
//            setTimeout(stopVideo, 6000);
//            done = true;
//        }
//    }
//    function stopVideo() {
//        player.stopVideo();
//    }
</script>
<?php require_once('inc/footer.php'); ?>
<!-- <script type="text/javascript" src="js/jquery.scrollify.min.js"></script> -->