<?php
	
	// Constants
	define("TITLE", "Associative Arrays");
	
	// Custom Variables
	$my_name	= "Abbas Yinka";
	$lesson_num	= 7;
	
	// Moustache Associative Array
	$profile = array(
					"name" => "John",
					"fav_color" => "Blue",
					"age" => 20
				);
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
			
			<h1>Tutorial <? echo $lesson_num; ?>: <small><?php echo TITLE; ?></small></h1>
			<hr>
			
			<h2>Final Example</h2>
			<p>Make sure to view the source code in your editor!</p>	
			
			<div class="sandbox">
				<h2>My name is <?php echo $profile["name"]; ?></h2>
				<p>I am young gentleman, my favorite color is <strong><?php echo $profile["fav_color"]; ?></strong> and I am <strong><?php echo $profile["age"]; ?> years</strong> of age.</p>
			</div><!-- end sandbox -->
			
			<a href="practice.php" class="button">Check out your example</a>
			
			<hr>
			
			<small>&copy;<?php echo date('Y'); ?> - <?php echo $my_name; ?></small>
		</div><!-- end wrapper -->
		
		<div class="copyright-info">
			<?php include('../assets/includes/copyright.php'); ?>
		</div><!-- end copyright-info -->
	</body>
</html>
