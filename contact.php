<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Motorcycle Page</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="description" content="" />
<meta name="author" content="" />

<!-- styles -->
<link rel="stylesheet" href="assets/css/fancybox/jquery.fancybox.css">
<link href="assets/css/bootstrap.css" rel="stylesheet" />
<link href="assets/css/bootstrap-theme.css" rel="stylesheet" />
<link rel="stylesheet" href="assets/css/slippry.css">
<link href="assets/css/style.css" rel="stylesheet" />
<link rel="stylesheet" href="assets/color/default.css">
<!-- =======================================================
    Theme Name: Groovin
    Theme URL: https://bootstrapmade.com/groovin-free-bootstrap-theme/
    Author: BootstrapMade
    Author URL: https://bootstrapmade.com
======================================================= -->

<script src="assets/js/modernizr.custom.js"></script>
</head>
<body>
<header>

<div id="navigation" class="navbar navbar-inverse navbar-fixed-top default" role="navigation">
  <div class="container">
<!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
     <h1><b>Motorcycle</h1></b><br>
	  
    </div>

	
     <ul class="nav navbar-nav navbar-right">
        <li class="current"><a href="main2.php">Home</a></li>
		<li><a href="history.php">About</a></li>
		<li><a href="main3.php">Works</a></li>
		<li><a href="contact.php">Contact</a></li>
		<li><a href="login.php">Login</a></li>
      </ul></nav>
   

  </div>
</div>
<!-- section works -->
<!-- section contact -->
<section id="contact" class="section">
<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="heading">
				<h3><span>Get in touch</span></h3>
			</div>
			<div class="sub-heading">
				
			</div>
		</div>
	</div>
</div>

<div class="container">
	<div class="row">
		<div class="col-md-6">
			<h4><i class="icon-envelope"></i><strong>Contact form</strong></h4>
			<p>
				Want to work with us or just want to say hello? Don't hesitate to get in touch!
			</p>
			<!-- start contact form -->
            <div class="cform" id="contact-form">
						
                        
                <div id="sendmessage">Your message has been sent. Thank you!</div>
                <div id="errormessage"></div>
                <form action="" method="post" role="form" class="contactForm">
                    <div class="form-group">
                        <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                        <div class="validation"></div>
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                        <div class="validation"></div>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                        <div class="validation"></div>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                        <div class="validation"></div>
                    </div>
                    
                    <div class="text-center"><button type="submit" class="btn btn-lg btn-theme">Send Message</button></div>
                </form>
    		</div>
            <!-- END contact form -->
        </div>
		<div class="col-md-6">
						<h4>Find our location</h4>
						<p>View from google map</p>
						<!-- map -->
						<div id="section-map" class="clearfix">
							<div id="google-map" data-latitude="40.713732" data-longitude="-74.0092704"></div>
						</div>	
		</div>
	</div>
</div>
</section>