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
				<p><?php //PRINT YOUR TEXT HERE ?></p>
			</div><!-- end sandbox -->

			<a href="index.php" class="button">Back to initial example</a>

		</div><!-- end wrapper -->

		<div class="copyright-info">
			<?php include('../assets/includes/copyright.php'); ?>
		</div><!-- end copyright-info -->
	</body>
</html>
