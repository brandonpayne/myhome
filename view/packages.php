<!DOCTYPE html>
<?php
require('../model/database.php');
$query = 'SELECT *
          FROM sandbp8_mail
          ORDER BY name';
$name = $db->query($query);
?>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Brandon Payne</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--[if lte IE 8]><script src="js/html5shiv.js"></script><![endif]-->
		<script src="js/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-xlarge.css" />
		</noscript>
	</head>
	<body>

		<!-- Header -->
			<header id="header">
				<h1><a href="index.php">Payne</a></h1>
				<nav id="nav">
					<ul>
						<li><a href="index.php">Home</a></li>
						<li><a href="contact.php">Contact</a></li>
						<li><a href="PayneResume.pdf" target="_blank">Resume</a></li>
                                                <li><a href="packages.php">Package Plans</a></li>
					</ul>
				</nav>
			</header>

		<!-- Banner -->
			

		<!-- One -->
			<section id="one" class="wrapper style1 special">
				<div class="container">
					<header class="major">
						<h2>Want a website of your own?</h2>
						<p>I have several affordable plans that best fits you</p>
					</header>
					<div class="row 150%">
							<div class="4u 12u$(medium)">
							<section class="box">
								<h1 style="font-size: 1.85em;">Basic Plan</h1>
                                                                <p>This package comes with the following:</p>
                                                                <ul>
                                                                    <li>10 Page Maximum</li>
                                                                    <li>Template Design</li>
                                                                    <li>Big cheese</li>     
                                                                </ul>
                                                                <p>This plan is best for people in need of a simple, static Website.</p>
							</section>
						</div>
                        <div class="4u 12u$(medium)">
							<section class="box">
								<h1 style="font-size: 1.85em;">Basic Plus</h1>
								<p>This package comes with the following:</p>
                                                                <ul>
                                                                    <li>15 Page Maximum</li>
                                                                    <li>Template Design</li>
                                                                    <li>Big cheese</li>     
                                                                </ul>
                                                                <p>This plan is best for people in need of a simple, static Website.</p>
							</section>
						</div>
						<div class="4u$ 12u$(medium)">
							<section class="box">
								<h1 style="font-size: 1.85em;">Premium Plan</h1>
								<p>This package comes with the following:</p>
                                                                <ul>
                                                                    <li>Unlimited Pages</li>
                                                                    <li>Unique Design</li>
                                                                    <li>Database Features</li>
                                                                    <li>Forums 
                                                                </ul>
                                                                <p>This plan is best for people in need of a simple, static Website.</p>
							</section>
						</div>
					</div>
                                    
				</div>
			</section>

		

		
	</body>
</html> 