<?php require_once('inc/header.php'); ?>
	<div class="">
		<h1>Contact Us</h1>
	</div><!-- .container -->
	</header><!-- .header -->
	<main class="main" id="contact">
		<section>
			<div class="row">
				<div class="contact-intro col s12 m6 l6">
					<h2>Contact</h2>
					<h4>Feel free to contact us with questions or concerns. We are happy to help you.</h4>
				</div>
				<div class="deets col s12 m6 l6">
					<a href="tel:612-252-9007"><i class="fa fa-phone fa-2x" aria-hidden="true"></i><p>&nbsp; 612.252.9007</p></a>
					<a href="https://www.google.com/maps/place/4534+Colfax+Ave+S,+Minneapolis,+MN+55419/@44.9202487,-93.2943225,17z/data=!3m1!4b1!4m5!3m4!1s0x87f627ae99067121:0xf4c956db4ed43366!8m2!3d44.9202487!4d-93.2921285">
						<i class="fa fa-map-marker fa-2x" aria-hidden="true"></i>
						<p>&nbsp; 4534 Colfax Ave S <br> Minneapolis MN 55551</p>
					</a>
					<a href="mailto:zl@zetuslapetus.com"><i class="fa fa-envelope fa-2x" aria-hidden="true"></i><p>&nbsp; zl@zetuslapetus.com</p></a>
				</div>
			</div>
		</section>
		<section id="email-form">
			<div class="row">
				<form id="form">
					<p id="returnmessage"></p>
					<label>Name</label>
					<input type="text" id="name" placeholder="Name"/>
					<label>Email</label>
					<input type="text" id="email" placeholder="Email"/>
					<label>Subject</label>
					<input type="text" id="contact" placeholder="Subject"/>
					<label>Message</label>
					<textarea id="message" placeholder="Message"></textarea>
					<input type="button" id="submit" class="button-secondary" value="Send Message"/>
				</form>
			</div>
		</section>
	</main>
<//?php require_once('inc/footer.php'); ?>