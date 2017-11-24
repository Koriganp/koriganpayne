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

				<!-- This is the first demo website -->

				<div class="row blank mt-5">
					<div  id="law" class="col-md-8 my-5 pl-5 animated">
						<a href="sample-sites/law-site/index.html" target="_blank"><img src="<?php echo $PREFIX;?>images/law-firm.jpg" alt="Law Firm Site"/></a>
					</div>
					<p id="lawText" class="col-md-4 text-dark my-5 animated">This is a sample website for law firm. You can view it <a href="sample-sites/law-site/index.html" target="_blank">here</a>, or you can just click on the image. If you like what you see, please <a href="<?php echo $PREFIX;?>contact/index.php">contact me</a> for a quote.</p>
				</div>
			</div>
		</section>

		<!-- Parallax 2 -->

		<section class="parallax-content parallax-content-2">
			<div class="parallax">

				<!-- This is the second demo website -->

				<div class="row blank mt-5">
					<p id="landscapeText" class="col-md-4 text-dark my-5 animated">This is a sample website for a landscaping company. It is just a demo and not an actual site. You can view it <a href="sample-sites/" target="_blank">here</a>, or you can just click on the image. If you like what you see, please fill out the form on my <a href="<?php echo $PREFIX;?>contact/index.php">contact page</a>and I will get back to you with more info.</p>
				</div>
					<div  id="landscape" class="col-md-8 my-5 pl-5 animated">
						<a href="sample-sites/" target="_blank"><img src="<?php echo $PREFIX;?>images/" alt="Landscaping Site"/></a>
					</div>
				</div>
		</section>



		<!-- Parallax 3 -->

		<section class="parallax-content parallax-content-3">
			<div class="parallax">

				<!-- This is the third demo website -->

				<div class="row blank mt-5">
					<div  id="restaurant" class="col-md-8 my-5 pl-5 animated">
						<a href="sample-sites/" target="_blank"><img src="<?php echo $PREFIX;?>images/" alt="Restaurant Site"/></a>
					</div>
					<p id="restaurantText" class="col-md-4 text-dark my-5 animated">This is a sample website for a restaurant. It is also not a real site, just a template to show you what your potential site could look like. You can view it <a href="sample-sites/" target="_blank">here</a>, or you can just click on the image. If you like what you see, please <a href="<?php echo $PREFIX;?>contact/index.php">contact me</a>.</p>
				</div>
			</div>
		</section>

	<!-- Footer -->

<?php require_once("../php/partials/footer.php");?>