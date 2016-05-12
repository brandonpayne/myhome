<!DOCTYPE html>
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
	<body class="landing">

		<!-- Header -->
			<header id="header">
				<h1><a href="index.php">Payne</a></h1>
                                <nav id="nav">
					<ul>
						<li><a href="index.php">Home</a></li>
						<li><a href="#about">About</a></li>						
                                                <li><a href="#contact">Contact</a></li>
					</ul>
				</nav>
			</header>

		<!-- Banner -->
			<section id="banner">
				<h2>Brandon Payne</h2>
				<p>"Try not to be a man of success, but rather become a man of value"</p><p> - Albert Einstein</p>
				
			</section>
                <!--About Section-->
                <a name="about"><div class="portfolio-background"></a>
                                        <div style="width:40%; height:300px; background-color: white; float:left; margin-left: 5%; margin-top: 7%; border-radius: 5px;">
                                            <h1 style="margin-bottom:15px; text-align: center; color: #3D59AB; font-size: 2.15em; ">#EXPERIENCE/EDUCATION</h1>
                                            <div style='margin: 15px 35px 0px 35px;'>
                                                <div style="float: left;">
                                                    <ul style="text-align: left;">
                                                        <li>Jakecrete Concrete</li>
                                                        <li>Boondocks Fun Center</li>
                                                        <li>West Valley City Life Guard</li><br>
                                                    </ul>
                                                    <p style="margin: -30px 0 -30px 0;">Click below for a full Resume</p>
                                                    <form action="PayneResume.pdf" target="_blank" method="POST" id="aligned" style="margin-left:33px;">
                                                        <input type="hidden" name="action" /> <label>&nbsp;</label>
                                                        <input type="submit" value="Resume" />
                                                        <br />
                                                     </form>
                                                </div>
                                                <div style="float:right;">
                                                    <ul>
                                                        <li>Hunter High, Herriman High</li>
                                                        <li>Granite Technical Institute</li>
                                                        <li>Governor's Honors Academy (SUU)</li>
                                                    </ul>
                                                    <p style="margin: 0px 0 -30px 0;">Click below for SLCC Portfolio</p>
                                                    <form action="../slcc/" target="_blank" method="POST" id="aligned" style="margin-left: 55px;">
                                                        <input type="hidden" name="action" /> <label>&nbsp;</label>
                                                        <input type="submit" value="SLCC" />
                                                        <br />
                                                     </form>
                                                </div>
                                            </div>    
                                        </div>
                                        <div style="width:40%; height:300px; background-color: white; float:right; margin-right: 5%; margin-top: 7%; border-radius: 5px;">
                                            <h1 style="margin-bottom:15px; text-align: center; color: #3D59AB; font-size: 2.15em; ">#ABOUT</h1>
                                            <div style='margin: 0px 20px 0px 20px;'>
                                            <p>I'm a Web Designer living just out of Salt Lake.  I'm finishing my last year of high school then I'm off to college.
                                                I started with a basic Web Design class and I haven't stopped since. (Web design, Adv Business Web Design, Web Development, Adv Web Development)
                                                I work mainly with HTML/CSS, Javascript, PHP, and MYSQL.</p>
                                            <p>My current project is a PHP based website.  It's a concept shoe website with a PHP shopping cart. Click <a href="kixwebsite" style="color:#104E8B">here</a> to see!</p>
                                                <!--Don't forget to link Kix website-->
                                            </div>    
                                        </div>
                                    </div>
                
                <!--Contact Section-->
                <a name="contact"><section id="one" class="wrapper style1 special"></a>
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
	</body>
</html>