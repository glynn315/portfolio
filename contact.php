<?php
if(isset($_POST["sub"])) {
	$to = "$_POST[mail]";
	$from = "sorianoyvert26@gmail.com";
	$message = "$_POST[name]"." Your Comment and Suggestion are now sending to the ADMIN for more info kindly visit the page or Contact us from one of the Contact Information Stated Thank you! ";
	$headers = "From: $from\n";
	mail($to, '', $message, $headers);
}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>YGGS Contact</title>
</head>
<body>
	<!-- NAV BAR -->
	<nav class="navbar navbar-expand-md sticky-top">
		<!-- Logo -->
		<div class="container-fluid">
  			<a class="navbar-brand" href="#"><img src="img/logo1.png" class="logo"></a>
  			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-Responsive">
  				<span class="navbar-toggler-icon"></span>
  			</button>
  			<!-- Navigation Link -->
  			<div class="collapse navbar-collapse" id="navbarResposnive">
  				<ul class="navbar-nav ml-auto">
  					<li class="nav-item">
  						<a class="nav-link" href="index.html">Home</a>
  					</li>
  					<li class="nav-item">
  						<a class="nav-link" href="about.html">About</a>
  					</li>
  					<li class="nav-item">
  						<a class="nav-link active" href="contact.php">Contact</a>
  					</li>
  				</ul>
  			</div>
		</div>
	</nav>
	<!-- Contact Form -->
	<h1 class="display q2" data-aos="fade-up">Contact Me</h1>
	<div class="container-fluid cc q10" data-aos="fade-up">	
		<div class="media">
			<!-- Contact Information -->
			<table class="q8">
				<tr>
					<td>E-Mail:</td>
					<td>sorianoyvert26@gmail.com</td>
				</tr>
				<tr>
					<td>Contact No. :</td>
					<td>09569435938</td>
				</tr>
				<tr>
					<td>Address :</td>
					<td>Purok Taurus Poblacion Norala South Cotabato</td>
				</tr>
				<td colspan="2" class="q6">
						or
					</td>
				<tr>
					<td colspan="2" class="q9">
						<div class="q4">
							<a href="https://web.facebook.com/CALLmeGLYNN" target="_blank"><img class="q5" src="img/16.png"></a>
						</div>
						<div class="q4">
							<a href="https://web.facebook.com/messages/t/100000892704996" target="_blank"><img class="q5" src="img/17.png"></a>
						</div>
						<div class="q4">
							<a href="https://www.instagram.com/yggs.26/" target="_blank"><img class="q5" src="img/18.png"></a>
						</div>
					</td>
				</tr>
			</table>
			<!-- Input forms -->
		  	<div class="media-body">
			    <form class="q3" method="POST">
				    <div class="form-group">
				    	<label for="name" class="cc1">Name :</label>
				    	<input type="text" class="form-control" id="name" name="name" placeholder="Full Name">
				  	</div>
					<div class="form-group">
				    	<label for="name" class="cc1">E-mail :</label>
				    	<input type="text" class="form-control" id="name" name="mail" placeholder="sampe@gmail.com">
				  	</div>
					<div class="form-group">
				    	<label for="mes" class="cc1">Enter Your Message</label>
				    	<textarea class="form-control" id="mes" rows="3" placeholder="Enter your Message Here!"></textarea>
				    	<button type="submit" class="btn btn-primary" onClick="alertme()" name="sub">Submit</button>
					</div>
			</form>
		  	</div>
		</div>
	</div>
	<!-- footer page -->
	<div class="footer">
		<p>All Rights Reserved @ 2021</p>
	</div>
	<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src="script.js"></script>
</body>
</html>