<?php
	
	// Constants
	
	
	// Custom Variables

	
	// Moustache Multi-Dimensional Array


?>

<!DOCTYPE html>
<html>
	<head>
		<title>PHP <!-- PAGE TITLE --></title>
		<link href="../assets/styles.css" rel="stylesheet">
	</head>
	<body>
		<div class="wrapper">
			<a href="/" title="Back to directory" id="logo">
				<img src="../assets/img/logo.png" alt="PHP">
			</a>
			
			<h1>Tutorial <!-- LESSON NUMBER -->: <small><!-- PAGE TITLE --></small></h1>
			<hr>
			
			<h2>Your Example</h2>
			
			<div class="sandbox">
				<h2>This is <!-- PROFILE NAME --></h2>
				<p>His favorite color is: <strong><!-- FAV_COLOR --></strong> and he is <strong><!-- AGES --> years</strong> of age.</p>

				<h2>This is <!-- PROFILE NAME --></h2>
				<p>His favorite color is: <strong><!-- FAV_COLOR --></strong> and he is <strong><!-- AGES --> years</strong> of age.</p>

				<h2>This is <!-- PROFILE NAME --></h2>
				<p>Her favorite color is: <strong><!-- FAV_COLOR --></strong> and she is <strong><!-- AGES --> years</strong> of age.</p>
				
				<!-- REPEAT ABOVE 2X -->
				
			</div><!-- end sandbox -->
			
			<a href="index.php" class="button">Back to the lecture</a>
			
			<hr>
			
			<small>&copy;<!-- YEAR --> - <!-- YOUR NAME --></small>
		</div><!-- end wrapper -->
		
		<div class="copyright-info">
			<?php include('../assets/includes/copyright.php'); ?>
		</div><!-- end copyright-info -->
	</body>
</html>
