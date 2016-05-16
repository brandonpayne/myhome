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
				<h1><a href="../index.php">Payne</a></h1>

			</header>

		<!-- Banner -->
			<section id="banner2">
				<h2 style='font-size: 40px; color: white;'>Salt Lake Community College</h2>
				<p>This is all the work I've done at the SLCC</p>
			</section>
                <!--classes-->
                <div id='container'>
                    <div id='slccrow'>
                        <div id='english'>
                            <h2>English 1010</h2>
                            <p>This basic Academic Writing class gave me a better understanding</p>
                            <p> on creative writing.</p>
                            <h4>Click below to go to a full page for this class</h4>
                            <form action="english.php" method="POST" id="aligned">
                                            <input type="hidden" name="action" /> <label>&nbsp;</label>
                                            <input type="submit" value="English" />
                                            <br />
                                        </form>
                        </div>
                        <div id='humanities'>
                            <h2>Humanities 1010</h2>
                            <p>This was a discussion based class that taught</p>
                            <p>you how to think for yourself</p>
                            <h4>Click below to go to a full page for this class</h4>
                            <form action="humanities.php" method="POST" id="aligned">
                                            <input type="hidden" name="action" /> <label>&nbsp;</label>
                                            <input type="submit" value="Humanities" />
                                            <br />
                                        </form>
                        </div>
                    </div>    
                </div>
	</body>
</html>