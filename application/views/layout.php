<html>
 <head>
 <link rel="stylesheet" type="text/css" href="media/css/frontpage.css">
  <title><?php echo $title?></title>
 </head>
 <body id="frontbody">	
	 <div class="titlebar">
	  <?php echo '<p>title</p>'; ?> 
	 </div><div class="loginbar">
	  <?php echo '<p>login</p>'; ?> 
	 </div>
	 <div class="salesbar">
	  <?php echo $contentStuff; ?>
	 </div>
	 <div class="footerbar">
	  <?php echo '<p>footer</p>'; ?> 
	 </div>
 </body>
</html>