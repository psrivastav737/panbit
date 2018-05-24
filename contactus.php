<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>panBit contact us</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/modern-business.css" rel="stylesheet">

  </head>

  <body>

     <!-- header include -->
      <?php include ('includes/header.php') ?>
        
        <!-- header close -->

    <!-- Page Content -->
    <div class="container">

      <!-- Page Heading/Breadcrumbs -->
      <h1 class="mt-4 mb-3">Contact
        <small>Subheading</small>
      </h1>

      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.php">Home</a>
        </li>
        <li class="breadcrumb-item active">Contact</li>
      </ol>

      <!-- Content Row -->
      <div class="row">
        <!-- Map Column -->
        <div class="col-lg-8 mb-4">
          <!-- Embedded Google Map -->
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3501.9588729304796!2d77.38189831449492!3d28.63099469090262!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cfa9db3af7f17%3A0xbe13ba17f120563e!2sHestaBit+Technologies+Pvt+Ltd!5e0!3m2!1sen!2sin!4v1526973198336" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
        <!-- Contact Details Column -->
        <div class="col-lg-4 mb-4">
          <h3 style="color: brown"><b>Contact Details</b></h3>
          <p>
            D 247/32 sector 63
            <br>Noida INDIA
            <br>
          </p>
          <p>
            <abbr title="Phone"><b>Phone</b></abbr>: (+91) 8924000737
          </p>
          <p>
            <abbr title="Email"><b>Email id</b></abbr>:
            <a href="mailto:name@example.com">psrivastav737@gmail.com
            </a>
          </p>
          <p>
            <abbr title="Hours"><b>Meeting Time</b></abbr>: Monday - Friday: 9:00 AM to 6:00 PM at hestabit's office.
          </p>
        </div>
      </div>
      <!-- /.row -->

      <!-- Contact Form -->
      <!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
      <div class="row">
        <div class="col-lg-8 mb-4">
          <h3><b style="color: brown;">Contact us by Message</b></h3>
          <form name="sentMessage" id="contactForm" novalidate method="post" action="helper/contactinfo.php">
            <div class="control-group form-group">
              <div class="controls">
                <label><b>Full Name:</b></label>
                <input type="text" class="form-control" name="fullName" required data-validation-required-message="Please enter your name.">
                <p class="help-block"></p>
              </div>
            </div>
            <div class="control-group form-group">
              <div class="controls">
                <label><b>Phone Number:</b></label>
                <input type="tel" class="form-control" name="phoneNo" required data-validation-required-message="Please enter your phone number."  maxlength="12">
              </div>
            </div>
            <div class="control-group form-group">
              <div class="controls">
                <label><b>Email Address:</b></label>
                <input type="email" class="form-control" id="email" name="email" required data-validation-required-message="Please enter your email address.">
              </div>
            </div>
            <div class="control-group form-group">
              <div class="controls">
                <label><b>Your Message:</b></label>
                <textarea rows="10" cols="100" class="form-control" id="message" name="message" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"></textarea>
              </div>
            </div>
            <div id="success"></div>
            <!-- For success/fail messages -->
            <button type="submit" class="btn btn-primary" id="sendMessageButton" style="background-color: brown;">Send Message</button>
          </form>
        </div>

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Your Website 2018</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Contact form JavaScript -->
    <!-- Do not edit these files! In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

  </body>

</html>
