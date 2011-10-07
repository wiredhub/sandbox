<?php
//Variables go here
$age = 32;
$question = "How many? $age";
?>


<?php
	function third($son) 
	{echo ($son);} 
?>


<html>
	<body bgcolor="#999999">
	<head>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	
	<div>
		<h1><?php third("Vincent Holland")?></h1>
	</div>
		
	<div>
		<h2><?php echo $question; ?></h2>
	</div>
	

	</body>
</html>