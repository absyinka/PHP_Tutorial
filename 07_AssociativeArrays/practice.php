<?php
	
	// Constants
	
	
	// Custom Variables

	
	// Moustache Associative Array

?>

<!DOCTYPE html>
<html>
	<head>
		<title>PHP <!-- PAGE TITLE --></title>
		<link href="../assets/styles.css" rel="stylesheet">
	</head>
	<body>
		<div class="wrapper">
			<a href="dynamic" title="Back to directory" id="logo">
				<img src="../assets/img/logo.png" alt="PHP">
			</a>
			
			<h1>Tutorial <!-- LESSON NUMBER -->: <small><!-- PAGE TITLE --></small></h1>
			<hr>
			
			<h2>Your Example</h2>
			
			<div class="sandbox">
			
				<h2>My name is <!-- NAME --></h2>
				<p>I am young gentleman, my favorite color is <strong><!-- FAV_COLOR --></strong> and I am <strong><!-- AGE --> years</strong> of age.</strong></p>
				
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
