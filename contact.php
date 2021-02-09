<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php

require_once "Mail.php"; // PEAR Mail package
require_once ('Mail/mime.php'); // PEAR Mail_Mime packge

 $name = $_POST['name']; // form field
 $email = $_POST['email']; // form field
 $message = $_POST['message']; // form field
 $subject = $_POST['subject']; // form field
 
 if ($_POST['submit']){



 $from = $email; //enter your email address
 $to = "contact@unicorncil.com"; //enter the email address of the contact your sending to
 $subject = "Contact Form"; // subject of your email

$headers = array ('From' => $from,'To' => $to, 'Subject' => $subject);

$text = ''; // text versions of email.
$html = "<html><body>Name: $name <br> Email: $email <br>Subject: $subject <br>Message: $message <br></body></html>"; // html versions of email.

$crlf = "\n";

$mime = new Mail_mime($crlf);
$mime->setTXTBody($text);
$mime->setHTMLBody($html);

//do not ever try to call these lines in reverse order
$body = $mime->get();
$headers = $mime->headers($headers);

 $host = "localhost"; // all scripts must use localhost
 $username = "contact@unicorncil.com"; //  your email address (same as webmail username)
 $password = "Uni2020Corn"; // your password (same as webmail password)

$smtp = Mail::factory('smtp', array ('host' => $host, 'auth' => true,
'username' => $username,'password' => $password));

$mail = $smtp->send($to, $headers, $body);

if (PEAR::isError($mail)) {
echo("<p>" . $mail->getMessage() . "</p>");
}
else {
echo("<p>Message successfully sent!</p>");
?>
<meta http-equiv="refresh" content="5; url=https://unicorncil.com/contact.php">
<?php
// header("Location: http://www.example.com/");
}
  }
 ?>

<!DOCTYPE HTML>
<html lang="zxx">

<head>
	<title>Home | Unicorn capital investments limited</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<meta name="keywords" content="Unicorn capital investments, cryptocurrency trading, get quick soft Loans, get 40%ROI in 20 days, empowerment package, invest and get returns quick, 
procure assets with our asset managment, exportation of cash crops" />
	<script>
		addEventListener("load", function() {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>

	<!-- Bootstrap Core CSS -->
	<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
	<link href="css/style.css" rel='stylesheet' type='text/css' />
	<!-- font-awesome icons -->
	<link href="css/fontawesome-all.min.css" rel="stylesheet">
	<!-- //Custom Theme files -->
	<!-- online fonts -->
	<!-- titles -->
	<link href="//fonts.googleapis.com/css?family=Raleway:300,400,500,600,700,800,900" rel="stylesheet">
	<!-- body -->
	<link href="//fonts.googleapis.com/css?family=Poppins:400,500,600,700,800" rel="stylesheet">
</head>

<body>

	<!-- header -->
	<header>
		<?php
		include('includes/header.php');
		?>
	</header>
	<!-- //header -->
	<!-- banner -->
	<section class="banner-1">
	</section>
	<!-- //banner -->
	<!--/contact-->
	<section class="contact py-5">
		<div class="container py-md-4 mt-md-3">
			<h2 class="heading-agileinfo">Contact Us<span>Speed Up The Loan Process</span></h2>
			<span class="w3-line black"></span>
			<div class="inner-sec-w3layouts-agileinfo mt-md-5 pt-5">
				<div class="contact-map">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3939.887423830316!2d7.46813354970774!3d9.0740195907503!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x104e0ae34dea5315%3A0x3e028b55761b8a86!2s5th%20floor%2C%202%20Aminu%20Kano%20Cres%2C%20Wuse%2C%20Abuja!5e0!3m2!1sen!2sng!4v1598432411233!5m2!1sen!2sng" class="map" style="border:0" allowfullscreen=""></iframe>
				</div>

				<div class="contact_grid_right mt-5">
					<h6>Please fill this form to contact with us.</h6>
					<form action="#" method="post">
						<div class="contact_left_grid">
							<input type="text" name="name" placeholder="Name" required="">
							<input type="email" name="email" placeholder="Email" required="">
							<input type="text" name="subject" placeholder="Subject" required="">
							<textarea name="message" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message...';}" required="">Message...</textarea>
							<input type="submit" name="submit" value="Submit">
							<input type="reset" value="Clear">
							<div class="clearfix"> </div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>
	<!--//contact-->
	<!--footer-->
	<footer>
	<?php
		include('includes/footer.php');
		?>
	</footer>
	<!---->
	<div class="copyright py-3">
		<div class="container">
			<div class="copyrighttop">
				<ul>
					<li>
						<h4>Follow us on:</h4>
					</li>
					<li>
						<a class="facebook" href="#">
							<i class="fab fa-facebook-f"></i>
						</a>
					</li>
					<li>
						<a class="facebook" href="#">
							<i class="fab fa-twitter"></i>
						</a>
					</li>
					<li>
						<a class="facebook" href="#">
							<i class="fab fa-google-plus-g"></i>
						</a>
					</li>
					<li>
						<a class="facebook" href="#">
							<i class="fab fa-pinterest-p"></i>
						</a>
					</li>
				</ul>
			</div>
			<div class="copyrightbottom">
				<p>© 2018 Home Loan. All Rights Reserved | Design by
					<a href="http://w3layouts.com/">W3layouts</a>
				</p>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	<!-- Modal -->
	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title">Home Loan</h4>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="agileits-w3layouts-info">
						<img src="images/g6.jpg" class="img-fluid" alt="" />
						<p>Duis venenatis, turpis eu bibendum porttitor, sapien quam ultricies tellus, ac rhoncus risus odio eget nunc. Pellentesque ac fermentum diam. Integer eu facilisis nunc, a iaculis felis. Pellentesque pellentesque tempor enim, in dapibus turpis porttitor quis. </p>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					<button type="button" class="btn btn-primary">Save changes</button>
				</div>
			</div>
		</div>
	</div>
	<!-- //Modal -->
	<!-- js-->
	<script src="js/jquery-2.2.3.min.js"></script>
	<!-- js-->
	<!-- Bootstrap Core JavaScript -->
	<script src="js/bootstrap.js ">
	</script>
	<!-- //Bootstrap Core JavaScript -->
</body>

</html>