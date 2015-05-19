<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Greg Daiker | Gracias</title>
        <meta name="description" content="Greg Daiker, Milwaukee Wisconsin, Graphic Design, Web Design, Creative Direction, Front-end Development">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->

		<link href='http://fonts.googleapis.com/css?family=Fira+Sans:400,300,300italic,400italic,500,500italic,700,700italic' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    
    <?php
$name = $_POST['name'];
$email = $_POST['email'];
$dropdown = $POST['dropdown'];
$message = $_POST['message'];
$formcontent="From: $name \n Message: $message";
$recipient = "hello@gregdaiker.com";
$subject = "Web Inquiry";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo 
'<body class="contact">
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
		
        <header class="main-header clearfix">
        
            <a href="index.html"><svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 55 55" enable-background="new 0 0 55 55" xml:space="preserve" title="Home Page" alt="Home Page">
                <g>
                <path  d="M0,0v55h55V0H0z M50.926,50.926H4.074V4.074h46.852V50.926z"/>
                <path d="M22.804,34.233c0.944,0,1.843-0.196,2.659-0.55v4.162c-0.026,1.466-1.25,2.677-2.707,2.61
                c-1.466-0.026-2.637-1.241-2.611-2.706l-4.073-0.074c-0.067,3.711,2.898,6.786,6.611,6.854c0.04,0,0.08,0.001,0.12,0.001
                c3.657,0,6.667-2.942,6.733-6.649V27.5V17.156c0.025-1.45,1.213-2.611,2.658-2.611c0.016,0,0.031,0,0.049,0.001
                c1.465,0.025,2.637,1.24,2.611,2.706l4.072,0.074c0.066-3.713-2.898-6.787-6.611-6.854c-0.041,0-0.082-0.001-0.123-0.001
                c-3.656,0-6.664,2.942-6.73,6.649v4.197c-0.816-0.353-1.715-0.549-2.659-0.549c-3.713,0-6.734,3.02-6.734,6.731
                C16.07,31.213,19.091,34.233,22.804,34.233z M22.804,24.842c1.466,0,2.659,1.193,2.659,2.658c0,1.466-1.192,2.66-2.659,2.66
                s-2.66-1.194-2.66-2.66C20.145,26.035,21.338,24.842,22.804,24.842z"/>
                </g>
            </svg></a>
            
            <nav class="main-nav">
                <ul>
                    <li><a href="projects.html" title="Projects">Projects</a></li>
                    <li><a href="me.html" title="About Me">Me</a></li>
                    <li><a href="contact.html" title="Contact">Contact</a></li>
                </ul>
            </nav>
            
            <nav id="mobile-nav">
                    <a href="projects.html" class="mobile-link" title="Projects"><div>Projects</div></a>
                    <a href="me.html" class="mobile-link" title="About Me"><div>Me</div></a>
                    <a href="contact.html" class="mobile-link" title="Contact"><div>Contact</div></a>
                </nav>
                
                <div id="navicon" class="closed">
                    <svg version="1.1" id="mobileNavbutton" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 65 65" enable-background="new 0 0 65 65" xml:space="preserve" title="Main Navigation" alt="Main Navigation">
                        <path d="M54.742,17.426H10.258c-2.273,0-4.115-1.842-4.115-4.115s1.842-4.115,4.115-4.115h44.484 c2.272,0,4.115,1.842,4.115,4.115S57.015,17.426,54.742,17.426z"/>
                        <path d="M54.742,36.615H10.258c-2.273,0-4.115-1.843-4.115-4.115c0-2.273,1.842-4.115,4.115-4.115h44.484 c2.272,0,4.115,1.842,4.115,4.115C58.857,34.772,57.015,36.615,54.742,36.615z"/>
                        <path d="M54.742,55.804H10.258c-2.273,0-4.115-1.843-4.115-4.115s1.842-4.115,4.115-4.115h44.484 c2.272,0,4.115,1.843,4.115,4.115S57.015,55.804,54.742,55.804z"/>
                    </svg>   
                </div>
                
        </header>
   
<!-- Section 1 -->
        
		<section id="sec1" class="section1 full-section">
        	<div class="page-width">
        		<h1>Gracias</h1>
            	<p>I\'ll get back to you as soon as I can.</p>
                <a href="index.html"><button class="hero-button">Back to the Site</button></a>
            </div>
            
            <div class="zig-zag"></div>
            
        </section>' ?>
        
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='https://www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
        </script>
    </body>
</html>
