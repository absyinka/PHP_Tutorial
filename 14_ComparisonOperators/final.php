<?php
	
	// Constants
	define("TITLE", "Comparison Operators");
	
	// Custom Variables
	$myName	= "Abbas Yinka";
	$lessonNum	= 14;
	
	$yearsOnEarth		= 20.32;
	$favouriteStringNum	= "7";
	$birthCountry		= "Wakanda";
	
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
			
			<h2>Your Example</h2>
			
			<div class="sandbox">
				
				<h3>Equal <code>==</code></h3>
				<?php
					if ($yearsOnEarth == 20.32) {
						echo "<p>Your age is equal to $yearsOnEarth</p>";
					}
				?>
				
				<h3>Identical <code>===</code></h3>
				<?php
					if ($favouriteStringNum === 7) {
						
						echo "<p>Your favourite number is an integer.</p>";
						
					} elseif ($favouriteStringNum === "7") {
						
						echo "<p>Your favourite number is a string called 7!</p>";
						
					} else {
						
						echo "<p>You must have a different favourite number than 7 the integer, or string.</p>";
						
					}
				?>
				
				<h3>Not Equal <code>!=</code></h3>
				<?php
					if ($birthCountry != "Mexico") {
						
						echo "<p>Excuse me, se&ntilde;or. You must not be from around here.</p>";
						
					}
				?>
				
				<h3>Not Identical <code>!==</code></h3>
				<?php
					if ($yearsOnEarth !== "20.32") {
						
						echo "<p>You are not exactly the string \"$yearsOnEarth\"</p>";
						
					} else {
						
						echo "<p>You are exactly the string '$yearsOnEarth'</p>";
						
					}
				?>
				
				<h3>Less Than <code>&lt;</code></h3>
				<?php
					if ($lessonNum < 15) {
						
						echo "<p>You haven't quite made it to lesson 15, yet.</p>";
						
					}
				?>
				
				<h3>Greater Than <code>&gt;</code></h3>
				<?php
					if ($lessonNum > 10) {
						
						echo "<p>You've made it past lesson 10!</p>";
						
					}
				?>
				
				<h3>Less Than or Equal To <code>&lt;=</code></h3>
				<?php
					if ($lessonNum <= 14) {
						
						echo "<p>$lessonNum is less than or equal to 14.</p>";
						
					}
				?>
				
				<h3>Greater Than or Equal To <code>&gt;=</code></h3>
				<?php
					if ($lessonNum >= 4) {
						
						echo "<p>$lessonNum is greater than or equal to 4.</p>";
						
					}
				?>
				
			</div><!-- end sandbox -->
			
			<a href="index.php" class="button">Back to the lecture</a>
			
			<hr>
			
			<small>&copy;<?php echo date('Y'); ?> - <?php echo $myName; ?></small>
		</div><!-- end wrapper -->
		
		<div class="copyright-info">
			<?php include('../assets/includes/copyright.php'); ?>
		</div><!-- end copyright-info -->
	</body>
</html>
