<?php
	define("TITLE", "String Operators");
	$myName	= "Abbas Yinka";
	$lessonNum	= 17;
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
			
			<h1>Tutorial <?php echo $lessonNum; ?>: <small><?php echo TITLE; ?></small></h1>
			<hr>

			<div class="sandbox">
				
				<p>This one's nice and simple: there are only <strong>two</strong> string operators. The first one is called the <em>concatenation operator</em> "<code>.</code>", which combines the value of the right argument with the left argument. Let's look at it like this:</p>

<pre class="brush: php">
$a = "Hello ";
$b = $a . "My Friend!";

echo $b; // This prints "Hello My Friend!"
</pre>

				<p>The second operator is the <em>concatenating assignment operator</em> "<code>.=</code>", which appends the value in the right with the value in the left, like this:</p>

<pre class="brush: php">
$a = "Hello ";
$a .= "My Friend!";

echo $a; // This prints "Hello My Friend!"
</pre>
				
				<p>The concatenating assignment operator is considered an "Assignment Operator" which we will be learning more about in the next lecture.</p>
				
				<p>Feel free to experiment with the above string operators with some PHP using the <a href="practice.php">practice.php</a> page provided in this folder.</p>
			</div><!-- end sandbox -->
			
			<a href="final.php" class="button">Check out the final example</a>
			
			<div class="navs cf">
				<a href="../16_ArithmeticOperators" class="button prev">Previous Lecture</a>
				<a href="../18_AssignmentOperators" class="button next">Next Lecture</a>
			</div><!-- end navs -->
			
			<hr>
			
			<small>&copy;<?php echo date('Y'); ?> <a href="#"><?php echo $myName; ?></a></small>
		</div><!-- end wrapper -->
		
		<div class="copyright-info">
			<?php include('../assets/includes/copyright.php'); ?>
		</div><!-- end copyright-info -->
	</body>
</html>
