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

 		<!--.........................................HEAD -->
 		<div id="bodyheader">
 			<div id="headerwrapper">
				<div id="title">
					<?php echo Form::image(NULL, NULL, array('src' => $logo,
															 'id' => 'logo')); ?>
				</div>

				<!-- login.php -->
				<div id="login"><?php echo $loginandprofileform; ?></div>
			</div>
	 	</div>

		<!--.........................................CONTENT -->
		<div id="contentwrapper">
	 		<div id="content"><?php echo $contentStuff; ?></div>
		</div>

	 	<!--.........................................FOOT -->
	 	<div id="footer"><?php echo $copyright; ?></div>

 	</body>
</html>