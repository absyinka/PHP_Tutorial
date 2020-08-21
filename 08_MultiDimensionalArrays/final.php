<?php
	
	// Constants
	define("TITLE", "Multi-Dimensional Arrays");
	
	// Custom Variables
	$my_name	= "Abbas Yinka";
	$lesson_num	= 8;
	
	// Profiles Multi-Dimensional Array
	$profiles = array (

					array (
					
						"name"				=> "Ade",
						"fav_color"			=> "Blue",
						"age"				=> 20
					
					),
					
					array (
					
						"name"				=> "Smith",
						"fav_color"			=> "Red",
						"age"				=> 18
					
					),
					
					array (
					
						"name"				=> "Bisi",
						"fav_color"			=> "Pink",
						"age"				=> 19
					
					)

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
				<h2>This is <?php echo $profiles[0]["name"]; ?></h2>
				<p>His favourite color is: <strong><?php echo $profiles[0]["fav_color"]; ?></strong> and he is <strong><?php echo $profiles[0]["age"]; ?> years</strong> of age.</p>
				
				<h2>This is <?php echo $profiles[1]["name"]; ?></h2>
				<p>His favourite color is: <strong><?php echo $profiles[1]["fav_color"]; ?></strong> and he is <strong><?php echo $profiles[1]["age"]; ?> years</strong> of age.</p>
				
				<h2>This is <?php echo $profiles[2]["name"]; ?></h2>
				<p>Her favourite color is: <strong><?php echo $profiles[2]["fav_color"]; ?></strong> and she is <strong><?php echo $profiles[2]["age"]; ?> years</strong> of age.</p>
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
