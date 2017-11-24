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

				<div class="row blank">
					<div class="col-md-9">
						<a href=""><img src="" alt=""></a>
					</div>
					<p class="justify-content-center col-md-3 text-light">This is a sample website for a Restaurant</p>
				</div>
			</div>
		</section>

			<!-- Parallax 2 -->

			<section class="parallax-content parallax-content-2">
				<div class="parallax">

					<!-- This is the second demo website -->

					<div class="row blank">
						<div class="col-md-9">
							<a href=""><img src="" alt=""></a>
						</div>
						<p class="justify-content-center col-md-3 text-light">This is a sample website for a Law Office</p>
					</div>
				</div>
			</section>



			<!-- Parallax 3 -->

			<section class="parallax-content parallax-content-3">
				<div class="parallax">

					<!-- This is the third demo website -->

					<div class="row blank">
						<div class="col-md-9">
							<a href=""><img src="" alt=""></a>
						</div>
						<p class="justify-content-center col-md-3 text-light">This is a sample website for a Landscaper</p>
					</div>
				</div>
			</section>

	<!-- Footer -->

<?php require_once("../php/partials/footer.php");?>