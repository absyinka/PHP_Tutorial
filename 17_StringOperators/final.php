<?php
	
	// Constants
	define("TITLE", "String Operators");
	
	// Custom Variables
	$myName	= "Abbas Yinka";
	$lessonNum	= 17;

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
				
				<h3>Concatenation Operator <code>.</code></h3>
				<?php
					$a = "Hello ";
					$b = "My Friend!";
					$c = $a . $b;
					
					echo $c;
				?>
				
				<h3>Concatenating Assignment Operator <code>.=</code></h3>
				<?php
					$a = "Hello ";
					$a .= "My Friend!";
					
					echo $a;
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
