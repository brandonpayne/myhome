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
		<title>Brandon Payne - Contact</title>
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
                                                <li><a href="about.php">About</a></li>
					</ul>
				</nav>
			</header>

		<!-- Main -->
			<section id="one" class="wrapper style1 special">
				<div class="container">
					<header class="major">
						<h2>Need to contact me?</h2>
						<p>I'm on all social media.</p>
					</header>
					<div class="row 150%">
							<div class="4u 12u$(medium)">
							<section class="box">
								<i class="icon big rounded color9 fa-desktop"></i>
								<h3>My E-Mail</h3>
								<p>My email is paynebrandon4@gmail.com.  This is the best way of contacting in a professional manner.</p>
							</section>
						</div>
                        <div class="4u 12u$(medium)">
							<section class="box">
								<i class="icon big rounded color1 fa-twitter"></i>
								<h3>My Twitter</h3>
								<p>My Twitter is @BrandonPayne12.  This is the fastest way to contact me if you need an immediate response.</p>
							</section>
						</div>
						<div class="4u$ 12u$(medium)">
							<section class="box">
								<i class="icon big rounded color7 fa-instagram"></i>
								<h3>My Instagram</h3>
								<p>My Instagram is bj_payne98.  Follow me there if you wanna see pictures of me and my family.</p>
							</section>
						</div>
					</div>
				
			</section>
                
                
                <section id="one" class="box" style="width: 50%; float: left;">
                    <div style="text-align: center; padding: 117px 0px 120px 0px;">
                        
                        <h2>Have any questions? Leave me a line</h2>
                        <p>Just leave your Name, Email, and all your questions or comments in the form.</p>
                        <p>They will be sent to my personal database and I'll get back to you as soon as possible</p>
                    </div>    
                </section>
                
                
                <section id="one" class="box" style="width: 50%; float: right;">
                    <div id="comment">
                                     <form action="addcontact.php" method="POST" id="aligned">
                                            <input type="hidden" name="action" />

                                            <label>Name:</label>
                                            <input type="input" name="name" required />

                                            <label>Email:</label>
                                            <input type="input" name="email" required />

                                            <label>Comment:</label>
                                            <textarea name="comment"  id="comment" required></textarea>
                                            <br />

                                            <label>&nbsp;</label>
                                            <input type="submit" value="Submit" />
                                            <br />
                                        </form>
                    </div>    
                </section>
	</div>
        </body>
</html>