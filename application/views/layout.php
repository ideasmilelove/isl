<html>
 <head>
 <link rel="stylesheet" type="text/css" href="media/css/layout.css">
  <title><?php echo $title?></title>
 </head>
 <body id="frontbody">	
 	<div id="bodyheader">
		 <div class="title">
		  <?php echo '<p>title</p>'; ?> 
		 </div><div class="login">
		  <?php echo '<p>login</p>'; ?> 
		 </div>
	 </div>
	 <div id="contentwrapper">
	 	<div id="content">
	  		<?php echo $contentStuff; ?>
	  	</div>
	 </div>
	 <div class="footer">
	  <?php echo $copyright; ?> 
	 </div>
 </body>
</html>