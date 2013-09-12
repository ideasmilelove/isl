<html>
	<head>
		<!-- STYLES -->
	 	<link rel="stylesheet" type="text/css" href="media/css/normalize.css">
		<link rel="stylesheet" type="text/css" href="media/css/layout.css">
	 	<link rel="stylesheet" type="text/css" href="media/css/logoandquote.css">
		<link rel="stylesheet" type="text/css" href="media/css/login.css">

		<!-- SCRIPTS -->

	  	<title><?php echo $title?></title>
 	</head>

 	<body>	

 		<div id="topbar">
	 		<div id="">dsadsa</div>

	 		<!-- login.php -->
	 		<div id="login"><?php echo $loginandprofileform; ?></div>
 		</div><br>

 		<!--.........................................HEAD -->
 		<div id="headerwrap">
			<a>put interesting stuff here</a>
	 	</div>

		<!--.........................................CONTENT -->
		<div id="contentwrap">
	 		<div id="content"><?php echo $contentStuff; ?></div>
		</div>

	 	<!--.........................................FOOT -->
	 	<div id="footer"><?php echo $copyright; ?></div>

 	</body>
</html>