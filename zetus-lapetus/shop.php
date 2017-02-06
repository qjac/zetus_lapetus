<?php
$page = "Shop";
require_once('inc/header.php'); ?>
		<section class="shop-hero">
			<div class="row container hero-text">
				<h1 class="col s12 m12 l12">Beyond Reality.</h1>
			</div><!-- .container -->
		</section>
	</header><!-- .header -->
	<main class="main" id="shop">
		<section>
			<div class="row container">
				<div class="col s12 m12 l12">
					<img src="img/set.png" alt="zetus lapetus headset">
					<h3>Virtual Reality Headset</h3>
					<p>VR games are mostly controlled in-app and are therefore no controller is required.</p>
					<form id="form-buyheadset">
						<label>Quantity</label>
						<input type="number" id="qty" placeholder="Qty"/>
						<p>$200</p>
						<input type="button" id="submit" class="button" value="Add to Bag"/>
					</form>
				</div>
			</div> <!-- end .row .container-->
		</section>
		<section class="accessories">
			<div class="row container">
				<div class="col s12 m12 l12">
					<h2>Accesories made just for Zetus Lapetus</h2>
					<h3>Earphones</h3>
					<p>Experience even more immersive audio with Zetus Lapetus Earphones. These in-ear headphones are specially designed for your Zetus Lapetus headset to reduce sound distractions while you’re in virtual experiences. Requires the headset.</p>
					<form id="form-buyearphones">
						<label>Quantity</label>
						<input type="number" id="qty" placeholder="Qty"/>
						<p>$80</p>
						<input type="button" id="submit" class="button" value="Add to Bag"/>
					</form>
					<img src="img/lady_shop2.png" alt="zetus lapetus headset with earphones">
				</div>
			</div> <!-- end .row .container .accessories-->
		</section>
		<section>
			<div class="row container">
				<div class="col s12 m12 l12">
					<img src="img/controllers.png" alt="zetus lapetus touch controllers">
					<h3>Touch Controllers
					</h3>
					<p>Before you even pick up a pair of Touch controllers, you know how to use them. Intuitive actions in VR feel as natural as using your real hands.</p>
					<form id="form-buycontroller">
						<label>Quantity</label>
						<input type="number" id="qty" placeholder="Qty"/>
						<p>$100</p>
						<input type="button" id="submit" class="button" value="Add to Bag"/>
					</form>
				</div> <!-- end .col-->
			</div> <!-- end .row .container-->

		</section>
		<section id="email-form">
			<div class="row container">

			</div>
		</section>
	</main>
<?php require_once('inc/footer.php'); ?>