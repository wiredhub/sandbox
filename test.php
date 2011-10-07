
<?php
//Variables go here
$str = "My php learning begins here...";
$age = 32;
$question = "How many? $age";
?>

<?php function first() //This is a function
{echo ("First ever function<hr>");}?>

<?php function second($arg) //This is a function taking an argument
{echo ("$arg");}?>

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
	
	<div>
		<h3><?php echo $str; ?></h3>
		<p><?php echo $str; ?></p>
		<h2><?php first();?></h2>
		<h2><?php second("This is an argument");?></h2>
		<h1><?php third("Gentleman Jack")?></br></h1>
		<h1><?php third("The Bounty Hunter Chronicles")?></br></h1>
		<h1><?php third("Liars, thieves and prostitutes")?></h1>
	</div>

	</body>
</html>