<?php
/*grab current directory*/
$CURRENT_DIR = __DIR__;
/*set page title here*/
$PAGE_TITLE = "Korigan Payne - Portfolio";
/*load the HTML head tag: head-utils.php*/
require_once("../php/partials/head-utils.php");
?>

	<!-- Navigation Bar -->

<?php require_once("../php/partials/header.php");?>

		<!-- Parallax -->

		<section class="parallax-content">
			<div class="parallax">
				<h1 class="pt-5 port animated zoomIn">My Portfolio</h1>
				<div class="port-content">
					<p>This a sample of the different sites that I can build for you.</p>
					<p>This first is an example multi-page site.</p>
				</div>
			</div>
		</section>

				<!-- This is the first demo website -->

				<div class="container bg-white">
					<div class="row bg-white">
						<div  id="law" class="col-s-12 col-md-6 col-lg-8 my-5 animated">
							<a href="sample-sites/law-site/index.html" target="_blank"><img src="<?php echo $PREFIX;?>images/law-firm-site.jpg" class="fit" alt="Law Firm Site"/></a>
						</div>
						<p id="lawText" class="col-md-4 text-dark my-5 pl-5 animated">This is a sample multi-page website for a law firm. You can view it <a href="sample-sites/law-site/index.html" target="_blank">here</a>, or you can just click on the image. If you like what you see, please <a href="<?php echo $PREFIX;?>contact/index.php">contact me</a> for a quote.</p>
					</div>
				</div>

		<!-- Parallax 2 -->

		<section class="parallax-content parallax-content-2">
			<div class="parallax">
				<h1 id="static" class="port animated pt-5">Another Example</h1>
				<div class="port-content">
					<p>This second example is of a single static page.</p>
				</div>
			</div>
		</section>

				<!-- This is the second demo website -->

				<div class="container bg-white">
					<div class="row bg-white">
						<p id="landscapeText" class="col-s-12 col-md-6 col-lg-4 text-dark my-5 pr-1 animated">This is a sample static website for a landscaping company. It is just a demo and not an actual site. You can view it <a href="sample-sites/landscape-site/index.html" target="_blank">here</a>, or you can just click on the image. If you like what you see, please fill out the form on my <a href="<?php echo $PREFIX;?>contact/index.php">contact page</a> and I will get back to you with more info.</p>
						<div  id="landscape" class="col-md-8 my-5 animated">
							<a href="sample-sites/landscape-site/index.html" target="_blank"><img src="<?php echo $PREFIX;?>images/landscape-site.jpg" class="fit" alt="Landscaping Site"/></a>
						</div>
					</div>
				</div>

		<!-- Parallax 3 -->

		<section class="parallax-content parallax-content-3">
			<div class="parallax">
				<h1 id="para" class="port animated pt-5">Final Example</h1>
				<div class="port-content">
					<p>This third example is of a single static page, with a parallax effect.</p>
					<p>The images are layered differently than content.</p>
				</div>
			</div>
		</section>

				<!-- This is the third demo website -->

				<div class="container bg-white">
					<div class="row bg-white">
						<div  id="restaurant" class="col-s-12 col-md-6 col-lg-8 my-5 animated">
							<a href="sample-sites/restaurant-site/index.html" target="_blank"><img src="<?php echo $PREFIX;?>images/restaurant-site.jpg" class="fit" alt="Restaurant Site"/></a>
						</div>
						<p id="restaurantText" class="col-s-12 col-md-6 col-lg-4 text-dark my-5 pl-5 animated">This is a sample website for a restaurant. It is also not a real site, just a template to show you what your potential site could look like. You can view it <a href="sample-sites/restaurant-site/index.html" target="_blank">here</a>, or you can just click on the image. If you like what you see, please <a href="<?php echo $PREFIX;?>contact/index.php">contact me</a>.</p>
					</div>
				</div>

	<!-- Footer -->

<?php require_once("../php/partials/footer.php");?>