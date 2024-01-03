<!doctype html>
<html lang="en">

<head>
	<title>Fill the form and get in touch with SETUP I.T.</title>
  <meta name="description" content="Are interested to get information for technology related and other services so connect with SETUP I.T. and get best deals in our services.">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<?php include('inc/header.php'); ?>
	<main>
		<div class="inner-banner-second">
			<div class="inner-banner-second-data">
				<h2>Contact Us</h2>
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="index.php"><i class="fa fa-home" aria-hidden="true"></i></a>
					</li>
					<li class="breadcrumb-item active">Contact Us</li>
				</ol>
			</div>
		</div>
		<section class="contact-us section-padding">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-lg-8 col-md-12">
						<div class="contact-us-form">
							<h2 class="mb-sm-5">Please Fill Out the Form!</h2>
							<form name="contactus" id="contactus" method="post" action="contactus-mail.php">
								<div class="row">
									<div class="col-md-6 col-sm-12">
										<div class="form-group">
											<label for="name">Name :</label>
											<input type="text" class="form-control" name="name" id="name"
												placeholder="Enter Your Name" onkeypress="return isNAME(event)">
										</div>
									</div>
									<div class="col-md-6 col-sm-12">
										<div class="form-group">
											<label for="emailid">Email :</label>
											<input type="text" class="form-control" name="emailid" id="emailid"
												placeholder="Enter Your Email">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6 col-sm-12">
										<div class="form-group">
											<label for="exampleFormControlInput1">City & Country :</label>
											<input type="text" class="form-control" name="citycountry" id="citycountry"
												placeholder="Write Your City & Country">
										</div>
									</div>
									<div class="col-md-6 col-sm-12">
										<div class="form-group">
											<label for="phoneno">Phone :</label>
											<input type="text" class="form-control" name="phoneno" id="phoneno"
												placeholder="Enter Your Contact No."
												onkeypress="return isNumber(event)">
										</div>
									</div>
								</div>
								<div class="form-group">
									<label for="message">Message :</label>
									<textarea class="form-control" name="message" id="message" rows="3"
										placeholder="Write Your Message"></textarea>
								</div>

								<p class="bot-text form-group"> (Are you human, or spanbot?)</p>
      <div class="form-group plus-captcha">
        <p class=" plus-text"><span class="">8</span>+<span class="">5</span>=</p>
        <input type="text" class="form-control" name="captcha" id="captcha" placeholder="Please enter Total" required>
        <input type="hidden" class="form-control" name="captchatotal" id="captchatotal" value="<?php echo $total;?>" >
      </div>

								<input type="submit" name="submit" id="submit" value="Send" class="btn btn-primary"
									onclick="return contactusvalidation();">
							</form>
						</div>
					</div>
					<div class="col-lg-4 col-md-12">
						<div class="contact-us-data">
							<h3>Visit Us</h3>
							<p><i class="fa fa-location-arrow"></i><strong>Book Appointment</strong><br>
								Monday - Friday : 10:00 - 18:00<br>
								Saturday : 10:30 - 12:30<br>
								Sunday Only on call </p>
                            <p><i class="fa fa-map-marker" aria-hidden="true"></i>Setup I.T.  New Delhi 110066</p>
							<!-- <p><i class="fa fa-phone" aria-hidden="true"></i> <a href="tel:+91 9999503399">+91 9999503399</a></p> -->
							<p><i class="fa fa-envelope" aria-hidden="true"></i> <a href="#">
									info@domainname.com</a></p>
							
							<p><i class="fa fa-phone" aria-hidden="true"></i> <a href="tel:#">+91-xxxxxxxxxx</a></p>
							<p><i class="fa fa-phone" aria-hidden="true"></i><a href="#">+91-xxxxxxxxxx</a> </p>
									
						</div>
					</div>
				</div>
			</div>
		</section>
		<div class="contact-band">
			<P>Follow us on Google Map</P>
		</div>
		<div class="contact-map">
			<iframe
				src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14016.13636347992!2d77.3d28.568739!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x2ee6cc98fb510a76!2sSetup+IT+Infrastructure!5e0!3m2!1sen!2sin!4v1478783560738"
				width="100%" height="400px" frameborder="0" style="border:0;display: block;" allowfullscreen=""
				aria-hidden="false" tabindex="0"></iframe>
		</div>
	</main>
	<?php include('inc/footer.php'); ?>
	<script type="text/javascript">
		function contactusvalidation() {
			if (document.contactus.name.value == '') {
				alert('Please enter your Name')
				document.contactus.name.focus();
				return false;
			}
			if (document.contactus.emailid.value == '') {
				alert('Please enter your Email ID')
				document.contactus.emailid.focus();
				return false;
			}
			if (!document.contactus.emailid.value.match(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/)) {
				alert("Please enter a valid Email ID.");
				document.contactus.emailid.focus();
				return false;
			}
			if (document.contactus.citycountry.value == "") {
				alert('Please enter city and country.');
				document.contactus.citycountry.focus();
				return false;
			}
			if (document.contactus.phoneno.value == "") {
				alert('Please enter phone no.');
				document.contactus.phoneno.focus();
				return false;
			}
			if (document.contactus.message.value == "") {
				alert('Please enter message.');
				document.contactus.message.focus();
				return false;
			}
		}
	</script>