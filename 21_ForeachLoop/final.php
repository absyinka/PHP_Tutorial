<?php
	
	// Constants
	define("TITLE", "Foreach Loop");
	
	// Custom Variables
	$myName	= "Abbas Yinka";
	$lessonNum	= 21;

?>

<!DOCTYPE html>
<html>
	<head>
		<title>PHP <?php echo TITLE; ?></title>
		<link href="../assets/styles.css" rel="stylesheet">
	</head>
	<body>
		<div class="wrapper">
			<a href="/" title="Back to directory" id="logo">
				<img src="../assets/img/logo.png" alt="PHP">
			</a>
			
			<h1>Tutorial <?php echo $lessonNum; ?>: <small><?php echo TITLE; ?></small></h1>
			<hr>
			
			<h2>Final Example</h2>
			<p>Make sure to view the source code in your editor!</p>	
			
			<div class="sandbox">
				
				<?php
				 
					// We need to create an array
					// Let's resurrect our array of moustaches
					$names = array("John", "Wale", "Oyin");
					
					// Loop through the $moustaches array
					foreach ($names as $name) {
						
						// Output each individual value
						echo "I love $name <br>";
						
					}
				 
				?>
				
			</div><!-- end sandbox -->
			
			<a href="practice.php" class="button">Check out your example</a>
			
			<hr>
			
			<small>&copy;<?php echo date('Y'); ?> - <?php echo $myName; ?></small>
		</div><!-- end wrapper -->
		
		<div class="copyright-info">
			<?php include('../assets/includes/copyright.php'); ?>
		</div><!-- end copyright-info -->
	</body>
</html>
