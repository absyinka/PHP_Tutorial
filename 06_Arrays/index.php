<?php
	define("TITLE", "Arrays");
	$my_name	= "Abbas Yinka";
	$lesson_num	= 6;
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

				<p>Sometimes you'll want to store more than one value within your variables. With an array, you can do just that! Arrays allow you to store <em>multiple</em> values within a variable.</p>
				
				<p>For example, I think names are nice. There are different names out there! Using individual variables, I can store each name in their own, like so:</p>
			
<pre class="brush: php">
$name1 = "John";

$name2 = "Alfred";

$name3 = "Oyin";
</pre>
				
				<p>But, I'd like to keep things neat n' tidy and have all my names in a single variable. So I'll use an array, like so:</p>
				
<pre class="brush: php">
$names = array("John", "Alfred", "Oyin");
</pre>
				
								<p>Each value is automatically assigned a "key" in the array, so we can grab a specific value when we need it. We'll touch on keys later, but by default, each value has a numeric key assigned to it.</p>
			<p>So for example, "John" is 1, "Alfred" is 2, and "Oyin" is 3. Here's the catch though &mdash; the numbers start at 0, not 1. So, "John" is actually 0, etc.</p>
			<p>If we want to grab a value out of an array and display it on our web page, we just reference the array and the key associated with the value we want to display, like so:</p>

<pre class="brush: php">
&lt;?php
echo $names[0]; // this will display "John"

echo $names[1]; // this will display "Alfred"

echo $names[2]; // this will display "Oyin"
?&gt;
</pre>
				<p>Arrays are pretty powerful, and there's a lot more to them. So stay tuned!</p>
	
			</div><!-- end sandbox -->
			
			<a href="final.php" class="button">Check out the final example</a>
			
			<div class="navs cf">
				
				
				<a href="../05_GetYourHandsDirty" class="button prev">Previous Lecture</a>
				
				
				<a href="../07_AssociativeArrays" class="button next">Next Lecture</a>
			</div><!-- end navs -->
			
			<hr>
			
			<small>&copy;<?php echo date('Y'); ?> <a href="#"><?php echo $my_name; ?></a></small>
		</div><!-- end wrapper -->
		
		<div class="copyright-info">
			<?php include('../assets/includes/copyright.php'); ?>
		</div><!-- end copyright-info -->
	</body>
</html>
