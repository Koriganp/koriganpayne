<?php
/*grab current directory*/
$CURRENT_DIR = __DIR__;
/*set page title here*/
$PAGE_TITLE = "Korigan Payne | Web Developer";
/*load the HTML head tag: head-utils.php*/
require_once("php/partials/head-utils.php");
?>

	<!-- Navigation Bar -->

	<?php require_once("php/partials/header.php");?>


	<!-- Parallax -->

	<section class="parallax-content">
		<div class="parallax">
			<h2 class="content animated zoomIn">Artistic</h2>
		</div>
	</section>

	<!-- Main box -->

	<div class="jumbotron jumbotron-fluid bg-light m-0">
		<h1 class="display-3 text-center">Korigan Payne</h1>
		<p class="lead text-center">Web Developer</p>
	</div>

	<!-- About content -->

	<section class="p-5 mt-0 darkness text-light">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-lg-3">
					<img class="mw-100" src="images/profile.jpg" itemprop="image" alt="Image of Korigan Payne"/>
				</div>
				<div class="col-md-6 col-lg-9">
					<h2>Are you looking for a web developer?</h2>
					<p itemscope itemtype="http://schema.org/Person">Hello! My name is <span itemprop="name">Korigan Payne</span>. I am an Albuquerque-based freelance <span itemprop="jobTitle">web developer</span> and I create attractive and functional websites for businesses and entrepreneurs. If I am not freelancing at some of Albuquerque's finest digital agencies, I am working remotely on projects for clients all over the world. I have a diverse set of skills, ranging from design, to HTML5 + CSS3 + Javascript, all the way to PHP.</p>
					<p itemscope itemtype="http://schema.org/Person">I primarily use Angular 5 and Bootstrap 4, but picking up a new framework or language isn't a problem. I am comfortable with developing on the frontend or backend, as well as setting up or managing infrastructure. Each of my designs begin with a blank canvas, which allows your content to guide the layout. If you are a business seeking a web presence or an employer looking to hire, you can get in touch with me <a itemprop="url" href="contact/index.php">here</a>.</p>
				</div>
			</div>
		</div>
	</section>

		<!-- Parallax 2 -->

	<section class="parallax-content parallax-content-2">
		<div class="parallax">
			<h2 id="web" class="content animated">Web</h2>
		</div>
	</section>

	<!-- Middle content -->

	<div class="jumbotron jumbotron-fluid bg-light m-0">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-lg-9">
					<h2>What is responsiveness?</h2>
					<p>I create every website with responsiveness in mind. What that means is that your website will look and function as if it was made for whatever device it is being viewed on, because it is!</p>
					<p>Wide screen? No problem! Smart phone? No problem!</p>
					<p>If you want to understand better, take a look at my <a href="portfolio/index.php">portfolio</a> of websites, and try changing the window size. You will see that every image and paragraph adjusts itself to fit nicely on whatever the size of window may be. If you are interested in working with me, feel free to <a href="">contact</a> me.</p>
				</div>
				<div class="col-md-6 col-lg-3">
					<img class="mw-100" src="images/responsive.png" alt="Image of different screens"/>
				</div>
			</div>
		</div>
	</div>

	<!-- Parallax 3 -->

	<section class="parallax-content parallax-content-3">
		<div class="parallax">
			<h2 id="design" class="content animated">Design</h2>
		</div>
	</section>

	<!-- End content -->

	<section class="p-5 mt-0 darkness text-light">
		<div class="container-fluid">
			<div class="row">
				<div class="col-12">
					<h2 class="text-center">Let me work for you!</h2>
					<p>If you need custom images for your website showcasing features, people, or a beautiful shot of your physical location, not only am I a web developer, but I am also a photographer. I do things differently than other photographers might. Beyond simply taking a nice picture, I take a step back to observe and capture all the emotion and unique details that will make the images on <em>your</em> site</p>
					<p id="stand" class="display-4 text-center animated">STAND OUT</p>
					<p class="text-center">from other sites in a similar market.</p>
					<p itemscope itemtype="http://schema.org/PostalAddress">I have over five years experience working with Adobe Photoshop, Lightroom, and Illustrator which will ensure the quality of your custom image and the ability to transform an ordinary image into an extraordinary piece of art. I only use professional equipment and this benefit is included with the design of your website if you live in <span itemprop="addressLocality">Albuquerque</span> when you <a href="contact/index.php">hire me!</a></p>
				</div>
			</div>
		</div>

					<!-- Carousel for images -->

		<div id="carouselIndicators" class="carousel slide" data-ride="carousel" data-interval="3000">
			<ol class="carousel-indicators">
				<li data-target="#carouselIndicators" data-slide-to="0" class="active"></li>
				<li data-target="#carouselIndicators" data-slide-to="1"></li>
				<li data-target="#carouselIndicators" data-slide-to="2"></li>
				<li data-target="#carouselIndicators" data-slide-to="3"></li>
			</ol>
			<div class="carousel-inner" role="listbox">
				<div class="carousel-item">
					<img class="d-block w-50 ma" src="images/aspen.jpg" alt="Image of Aspen Trees"/>
				</div>
				<div class="carousel-item active">
					<img class="d-block w-50 ma" src="images/snake.jpg" alt="Image of Rattlesnake"/>
				</div>
				<div class="carousel-item">
					<img class="d-block w-50 ma" src="images/cactus.jpg" alt="Image of Cactus"/>
				</div>
				<div class="carousel-item">
					<img class="d-block w-50 ma" src="images/bastian.jpg" alt="Image of my son and father-in-law"/>
				</div>
				<a class="carousel-control-prev" href="#carouselIndicators" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href="#carouselIndicators" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
		</div>

	</section>

	<!-- Footer -->

	<?php require_once("php/partials/footer.php");?>
