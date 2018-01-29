<?php
/*grab current directory*/
$CURRENT_DIR = __DIR__;
/*set page title here*/
$PAGE_TITLE = "Korigan Payne | Portfolio";
/*load the HTML head tag: head-utils.php*/
require_once("../php/partials/head-utils.php");
?>

	<!-- Navigation Bar -->

<?php require_once("../php/partials/header.php");?>

		<!-- Parallax -->

		<section class="parallax-content narrow">
			<div class="parallax">
				<h1 class="port-1">My Portfolio</h1>
				<h2 class="port animated zoomIn move-down">WordPress:</h2>
			</div>
		</section>

				<!-- This is the first portfolio website -->

				<div class="container bg-white">
					<div class="row bg-white">
						<p id="wordPressText" class="col-s-12 col-md-6 col-lg-4 text-dark my-5 pr-5 animated">This is one of the websites for my business. It is a WordPress site. It uses jQuery and a video background for a clean and attractive look and feel. You can view it <a href="https://designbykorigan.com" target="_blank">here</a>, or you can just click on the image. If you like what you see, please <a href="<?php echo $PREFIX;?>contact/index.php">contact me</a>.</p>
						<div  id="wordPress" class="col-s-12 col-md-6 col-lg-8 my-5 animated">
							<a href="https://designbykorigan.com" target="_blank"><img src="<?php echo $PREFIX;?>images/wp.jpg" class="fit" alt="Wordpress Site"/></a>
						</div>
					</div>
				</div>

	<!-- Parallax 2 -->

		<section class="parallax-content parallax-content-2 narrow">
			<div class="parallax">
				<h2 id="multi" class="port animated pt-5 move-down-more">Multi-page:</h2>
			</div>
		</section>

	<!-- This is the second demo site -->

				<div class="container bg-white">
					<div class="row bg-white">
						<div  id="law" class="col-s-12 col-md-6 col-lg-8 my-5 animated">
							<a href="sample-sites/law-site/index.html" target="_blank"><img src="<?php echo $PREFIX;?>images/law-firm-site.jpg" class="fit" alt="Law Firm Site"/></a>
						</div>
						<p id="lawText" class="col-md-4 text-dark my-5 pl-5 animated">This is a sample multi-page website for a law firm. You can view it <a href="sample-sites/law-site/index.html" target="_blank">here</a>, or you can just click on the image. If you like what you see, please <a href="<?php echo $PREFIX;?>contact/index.php">contact me</a> for a quote.</p>
					</div>
				</div>

		<!-- Parallax 3 -->

		<section class="parallax-content parallax-content-3 narrow">
			<div class="parallax">
				<h2 id="static" class="port animated pt-5 move-down-more">Simple Static:</h2>
			</div>
		</section>

				<!-- This is the third demo website -->

				<div class="container bg-white">
					<div class="row bg-white">
						<p id="landscapeText" class="col-s-12 col-md-6 col-lg-4 text-dark my-5 pr-5 animated">This is a sample static website for a landscaping company. It is just a demo and not an actual site. You can view it <a href="sample-sites/landscape-site/index.html" target="_blank">here</a>, or you can just click on the image. If you like what you see, please fill out the form on my <a href="<?php echo $PREFIX;?>contact/index.php">contact page</a> and I will get back to you with more info.</p>
						<div  id="landscape" class="col-md-8 my-5 animated">
							<a href="sample-sites/landscape-site/index.html" target="_blank"><img src="<?php echo $PREFIX;?>images/landscape-site.jpg" class="fit" alt="Landscaping Site"/></a>
						</div>
					</div>
				</div>

		<!-- Parallax 4 -->

		<section class="parallax-content parallax-content-4 narrow">
			<div class="parallax">
				<h2 id="para" class="port animated pt-5 move-down-more">Static Parallax:</h2>
			</div>
		</section>

				<!-- This is the fourth demo website -->

				<div class="container bg-white">
					<div class="row bg-white">
						<div  id="restaurant" class="col-s-12 col-md-6 col-lg-8 my-5 animated">
							<a href="sample-sites/restaurant-site/index.html" target="_blank"><img src="<?php echo $PREFIX;?>images/restaurant-site.jpg" class="fit" alt="Restaurant Site"/></a>
						</div>
						<p id="restaurantText" class="col-s-12 col-md-6 col-lg-4 text-dark my-5 pl-5 animated">This is a sample website for a restaurant. It is also not a real site, just a template to show you what your potential site could look like. It utilizes parallax, where images are layered differently than content, creating a 3-D effect. You can view it <a href="sample-sites/restaurant-site/index.html" target="_blank">here</a>, or you can just click on the image. If you like what you see, please <a href="<?php echo $PREFIX;?>contact/index.php">contact me</a>.</p>
					</div>
				</div>

	<!-- Parallax 5 -->

	<section class="parallax-content parallax-content narrow">
		<div class="parallax">
			<h2 id="seo" class="port animated pt-5 move-down-more">SEO Optimization</h2>
		</div>
	</section>

	<!-- This is the fifth demo website -->

	<div class="container bg-white">
		<div class="row bg-white">
			<p id="csquareText" class="col-s-12 col-md-6 col-lg-4 text-dark my-5 pr-5 animated">This is a website for a cupcake company. Her issue was the site was not showing up on any google or bing searches. I optimized the code and added some lines that search engines use to locate websites so she can have a better online presence. Now when you search for "C square custom cupcakes", she is on the first page of that search. You can view the site <a href="http://http://www.csquarecustomcupcakes.com/" target="_blank">here</a>, or you can just click on the image. If you want to improve your online presence, please <a href="<?php echo $PREFIX;?>contact/index.php">contact me</a>.</p>
			<div  id="csquare" class="col-s-12 col-md-6 col-lg-8 my-5 animated">
				<a href="http://http://www.csquarecustomcupcakes.com/" target="_blank"><img src="<?php echo $PREFIX;?>images/csquare.jpg" class="fit" alt="Cupcake site"/></a>
			</div>
		</div>
	</div>


	<!-- Footer -->

<?php require_once("../php/partials/footer.php");?>