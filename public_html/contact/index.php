<?php
/*grab current directory*/
$CURRENT_DIR = __DIR__;

/*set page title here*/
$PAGE_TITLE = "Korigan Payne - Contact";

/*load the HTML head tag: head-utils.php*/
require_once("../php/partials/head-utils.php");
?>

<!-- Navigation Bar -->

<?php require_once("../php/partials/header.php");?>

	<!-- Add Background !!All Content goes here!!-->

	<div class="bg">
		<div class="p-5">
		</div>

		<!-- Structure for Form -->

		<main class="container p-t-nav">
			<div class="row row-flex content-wrap">
				<div class="col-2">
				</div>
				<div class="col-8 content-panel">
					<div>

						<!-- Form -->

						<form id="korigans-contact-form" action="<?php echo $PREFIX;?>php/mailer.php" method="post">
							<div class="form-group">
								<label for="name">Name <span class="text-danger">*</span></label>
								<div class="input-group">
									<div class="input-group-addon">
										<i class="fa fa-user" aria-hidden="true"></i>
									</div>
									<input type="text" class="form-control" id="name" name="name" placeholder="Name">
								</div>
							</div>
							<div class="form-group">
								<label for="email">Email <span class="text-danger">*</span></label>
								<div class="input-group">
									<div class="input-group-addon">
										<i class="fa fa-envelope" aria-hidden="true"></i>
									</div>
									<input type="email" class="form-control" id="email" name="email" placeholder="Email">
								</div>
							</div>
							<div class="form-group">
								<label for="subject">Subject</label>
								<div class="input-group">
									<div class="input-group-addon">
										<i class="fa fa-pencil" aria-hidden="true"></i>
									</div>
									<input type="text" class="form-control" id="subject" name="subject" placeholder="Subject">
								</div>
							</div>
							<div class="form-group">
								<label for="message">Message <span class="text-danger">*</span></label>
								<div class="input-group">
									<div class="input-group-addon">
										<i class="fa fa-comment" aria-hidden="true"></i>
									</div>
									<textarea class="form-control" rows="5" id="message" name="message" placeholder="Message (2000 characters max)"></textarea>
								</div>
							</div>

							<!-- reCAPTCHA -->

							<div class="d-flex justify-content-center mt-5">
								<div class="g-recaptcha" data-sitekey="6LfjBzoUAAAAAI4lBx2PIQwRUeZfeTS9gur6t1Ft"></div>
							</div>

							<div class="d-flex justify-content-center mt-3">
								<button class="btn btn-info mr-1" type="submit"><i class="fa fa-paper-plane"></i> Send</button>
								<button class="btn btn-default ml-1" type="reset"><i class="fa fa-ban"></i> Reset</button>
							</div>
						</form>

						<!-- Space for output -->

						<div class="row">
							<div class="col-xs-12">
								<div id="output-area"></div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-2">
				</div>
			</div>
		</main>

		<div class="bigger">
		</div>
	</div>

	<!-- Footer -->

	<?php require_once("../php/partials/footer.php");?>