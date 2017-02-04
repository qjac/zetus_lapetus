<?php require_once('inc/header.php'); ?>
	<div class="row container">
		<h1>Buy Zetus Lapetus</h1>
	</div><!-- .container -->
	</header><!-- .header -->
	<main class="main" id="shop">
		<section>
			<div class="row container">
				<div class="col s12 m12 l12">
					<div>
						<img src="img/headset.png" alt="zetus lapetus headset">
						<h3>Virtual Reality Headset</h3>
						<p>VR games are mostly controlled in-app and are therefore no controller is required.</p>
						<form id="form-buyheadset">
							<div>
								<label>Quantity</label>
								<input type="number" id="qty" placeholder="Quantity"/>
								<p>$200</p>
								<input type="button" id="submit" class="button" value="Add to Bag"/>
							</div>
						</form>
					</div>
					<div>
						<h2>Accesories made just for Zetus Lapetus</h2>
						<h3>Earphones</h3>
						<p>Experience even more immersive audio with Zetus Lapetus Earphones. These in-ear headphones are specially designed for your Zetus Lapetus headset to reduce sound distractions while you’re in virtual experiences. Requires the headset.</p>
						<form id="form-buyearphones">
							<div>
								<label>Quantity</label>
								<input type="number" id="qty" placeholder="Quantity"/>
								<p>$80</p>
								<input type="button" id="submit" class="button" value="Add to Bag"/>
							</div>
						</form>
						<img src="img/woman-wearing-zl.png" alt="zetus lapetus headset with earphones">
					</div>
					<div>
						<img src="img/controllers.png" alt="zetus lapetus touch controllers">
						<h3>Touch Controllers
						</h3>
						<p>Before you even pick up a pair of Touch controllers, you know how to use them. Intuitive actions in VR feel as natural as using your real hands.</p>
						<form id="form-buycontroller">
							<div>
								<label>Quantity</label>
								<input type="number" id="qty" placeholder="Quantity"/>
								<p>$100</p>
								<input type="button" id="submit" class="button" value="Add to Bag"/>
							</div>
						</form>
					</div> <!-- end .col-->
				</div>
			</div> <!-- end .row .container-->

		</section>
		<section id="email-form">
			<div class="row container">

			</div>
		</section>
	</main>
<?php require_once('inc/footer.php'); ?>