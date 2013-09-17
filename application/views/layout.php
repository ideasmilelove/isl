<!DOCTYPE html>
	<head>
		<!-- STYLES -->
	 	<link rel="stylesheet" type="text/css" href="media/css/normalize.css">
		<link rel="stylesheet" type="text/css" href="media/css/layout.css">
		<link rel="stylesheet" type="text/css" href="media/css/register.css">
		<link rel="stylesheet" type="text/css" href="media/css/form.css">
		<link rel="stylesheet" type="text/css" href="media/css/form_search.css">
		<link rel="stylesheet" type="text/css" href="media/css/form_auth.css">

		<!-- SCRIPTS -->

	  	<title><?php echo $title?></title>
 	</head>

 	<body>	

 		<div id="topbar">
	 		<div id="logo">LOGO-HERE</div>
	 		<div id="search"><?php echo $form_search ?></div><!-- form_search.php -->
	 		<div id="login"><?php echo $form_auth; ?></div><!-- form_auth.php -->
 		</div>


 		<!--.........................................HEAD -->
 		<div id="headerwrap">

			<div id="header">
				put interesting stuff here
				<br>
				<p style="margin-left:100px;">something very interesting................</p>
				<br>
				<p style="margin-left:200px;">something extremely nice and interesting please................</p>
				<br>
				<p style="margin-left:50px;">or just nice pictures................</p>
			</div>
	 	</div>

		<!--.........................................CONTENT -->
		<div id="contentwrap">
	 		<div id="content"><?php echo $contentStuff; ?></div>
		</div>

	 	<!--.........................................FOOT -->
	 	<div id="footer"><?php echo $copyright; ?></div>

	 	<!--.........................................WIDGETS -->
 		<div id="w_register"><?php  echo $register; ?></div><!-- register.php -->
 	</body>
</html>