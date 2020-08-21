<?php
	define("TITLE", "Multi-Dimensional Arrays");
	$my_name	= "Abbas Yinka";
	$lesson_num	= 8;
	
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
		<script type="text/javascript" src="../assets/syntaxhighlighter/scripts/shCore.js"></script>
		<script type="text/javascript" src="../assets/syntaxhighlighter/scripts/shBrushPhp.js"></script>
		<link type="text/css" rel="stylesheet" href="../assets/syntaxhighlighter/styles/shCoreDefault.css"/>
		<script type="text/javascript">SyntaxHighlighter.all();</script>
	</head>
	<body>
		<div class="wrapper">
			<a href="/" title="Back to directory" id="logo">
				<img src="../assets/img/logo.png" alt="PHP">
			</a>
			
			<h1>Tutorial <?php echo $lesson_num; ?>: <small><?php echo TITLE; ?></small></h1>
			<hr>

			
			<div class="sandbox">	

				<p>This is where we start getting crazy! We can harness the true potential of arrays by using multi-dimensional arrays &mdash; which is simply an array that is comprised of <em>multiple arrays</em>!</p>
			
<pre class="brush: php">
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
</pre>
			
				<p>You're probably wondering how the heck we display this info on the screen! Well, we first have to reference the parent array <code>$profiles</code>, then the numerical value of the child array <em>(Ade is [0], Smith [1], etc)</em>, and finally the custom key of the information we want to display <em>(name, fav_color, etc)</em>. It looks like this:</p>

<pre class="brush: php">
&lt;?php echo $profiles[2]["name"]; ?&gt;
</pre>
			
				<p>The above code will display <strong><?php echo $profiles[2]["name"]; ?>.</strong></p>
			
			</div><!-- end sandbox -->
			
			<a href="final.php" class="button">Check out the final example</a>
			
			<div class="navs cf">
				<a href="../07_AssociativeArrays" class="button prev">Previous Lecture</a>
				<a href="../09_GetYourHandsDirty" class="button next">Next Lecture</a>
			</div><!-- end navs -->
			
			<hr>
			
			<small>&copy;<?php echo date('Y'); ?> <a href="http://bradhussey.ca/"><?php echo $my_name; ?></a></small>
		</div><!-- end wrapper -->
		
		<div class="copyright-info">
			<?php include('../assets/includes/copyright.php'); ?>
		</div><!-- end copyright-info -->
	</body>
</html>
