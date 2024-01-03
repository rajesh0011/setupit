<!doctype html>
<html lang="en">

<head>
    <title>Register yourself and connect with the SETUP I.T.</title>
  <meta name="description" content="If you want to be a part of SETUP I.T. so register our Careers form and connect with us and get information in technology and our server support.">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php include('inc/header.php'); ?>
    <style>
        /* .contact-us-form:before {
            width: 100% !important;
        } */
    </style>
    <main>
        <div class="inner-banner-second">
            <div class="inner-banner-second-data">
                <h2>Careers</h2>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php"><i class="fa fa-home" aria-hidden="true"></i></a>
                    </li>
                    <li class="breadcrumb-item active">Careers</li>
                </ol>
            </div>
        </div>
        <section class="contact-us section-padding">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-8 col-md-12">
                        <div class="contact-us-form">
                            <h2 class="career-h">Careers with Setup It !</h2>
                            <form name="contactus" id="contactus" method="post" action="#">
                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label for="name">Name :</label>
                                            <input type="text" class="form-control" name="name" id="name"
                                                onkeypress="return isNAME(event)" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label for="emailid">Email :</label>
                                            <input type="text" class="form-control" name="emailid" id="emailid"
                                                required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label for="phoneno">Phone :</label>
                                            <input type="text" class="form-control" name="phoneno" id="phoneno"
                                                onkeypress="return isNumber(event)" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label for="company">Company :</label>
                                            <input type="text" class="form-control" name="company" id="company"
                                                onkeypress="return isNumber(event)" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label for="experience">Work Experience :</label>
                                            <input type="text" class="form-control" name="experience" id="experience"
                                                required>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label for="resume">Upload your Resume :</label>
                                            <input type="file" name="resume" id="resume"
                                                onkeypress="return isNumber(event)" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label for="job_title">Current Job Title :</label>
                                            <input type="text" class="form-control" name="job_title" id="job_title">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label for="ctc">Current CTC :</label>
                                            <input type="text" name="ctc" id="ctc" class="form-control"
                                                onkeypress="return isNumber(event)" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="message">Why We Hire You :</label>
                                    <textarea class="form-control" name="message" id="message" rows="3"
                                        required></textarea>
                                </div>

                                <p class="bot-text form-group">(Are you human, or spanbot?)</p>
      <div class="form-group plus-captcha">
        <p class=" plus-text"><span class="">8</span>+<span class="">5</span>=</p>
        <input type="text" class="form-control" name="captcha" id="captcha" placeholder="Please enter Total" required>
        <input type="hidden" class="form-control" name="captchatotal" id="captchatotal" value="<?php echo $total;?>" >
      </div>

                                <input type="submit" name="submit" id="submit" value="Send" class="btn btn-primary ml-4"
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
                            <p><i class="fa fa-map-marker" aria-hidden="true"></i>Setup IT Infrastructure <br>
                                <br> New Delhi, Delhi
                                110066</p>
                            
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
                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14016.13636347992!2d77.8.568739!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x2ee6cc98fb510a76!2sSetup+IT+Infrastructure!5e0!3m2!1sen!2sin!4v1478783560738"
                width="100%" height="400px" frameborder="0" style="border:0;display: block;" allowfullscreen=""
                aria-hidden="false" tabindex="0"></iframe>
        </div>
    </main>
    <?php include('inc/footer.php'); ?>
    <script>
        function contactusvalidation() {
            if (document.getElementById('name').value == "") {
                alert('please fill your name !');
                document.getElementById('name').focus();
                return false;
            }
            if (document.getElementById('emailid').value == "") {
                alert('please fill your emailid !');
                document.getElementById('emailid').focus();
                return false;
            }
            if (!document.getElementById('emailid').value.match(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/)) {
                alert('please fill your vaild emailid !');
                document.getElementById('emailid').focus();
                return false;
            }
            if (document.getElementById('phoneno').value == "") {
                alert('please fill your phoneno !');
                document.getElementById('phoneno').focus();
                return false;
            }
            if (document.getElementById('company').value == "") {
                alert('please fill your company !');
                document.getElementById('company').focus();
                return false;
            }
            if (document.getElementById('experience').value == "") {
                alert('please fill your experience !');
                document.getElementById('experience').focus();
                return false;
            }
            if (document.getElementById('resume').value == "") {
                alert('please fill your resume !');
                document.getElementById('resume').focus();
                return false;
            }
            if (document.getElementById('job_title').value == "") {
                alert('please fill your job_title !');
                document.getElementById('job_title').focus();
                return false;
            }
            if (document.getElementById('ctc').value == "") {
                alert('please fill your ctc !');
                document.getElementById('ctc').focus();
                return false;
            }
            if (document.getElementById('message').value == "") {
                alert('please fill your message !');
                document.getElementById('message').focus();
                return false;
            }
        }
    </script>