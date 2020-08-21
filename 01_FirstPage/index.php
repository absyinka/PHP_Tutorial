<?php
	
	$lesson_num = 1;
	
?>
<!DOCTYPE html>
<html>
	<head>
		<title>My First PHP Web Page</title>
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

			<h1>Tutorial <?php echo $lesson_num; ?>: <small>My First PHP Web Page</small></h1>
			
			<hr>

			<div class="sandbox">
				<p>Below is an example of a PHP code:</p>

				<pre class="brush: php">
					&lt;?php 

						print('Hello Student!');

					?&gt;
				</pre>
				<p>The above code gives you the result below:</p>
				<p>
					<em><?php print('Hello Student!'); ?></em>
				</p>
			</div><!-- End Sandbox -->

			<a href="practice.php" class="button">Check out your example</a>

			<div class="navs cf">
				<!-- <a href="../01_FirstPage" class="button prev">Previous Lecture</a> -->
				<a href="../02_Variables" class="button next">Next Lecture</a>
			</div><!-- end navs -->

		</div><!-- end wrapper-->

		<div class="copyright-info">
			<?php include('../assets/includes/copyright.php'); ?>
		</div><!-- end copyright-info -->

	</body>
</html>
