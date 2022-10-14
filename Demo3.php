<html>
	<head>
		<title>Demo 3</title>
	</head>
	<body align=center>
	<h1>
	<?php
	//This is a single comment
	/*Multiline comment*/
	
	//Equality and Inequality
	$a = 2;
	$b = 3;
	$month = "December";
	
	if($a===$b) echo "a is equal to b <br>";
	if($month=="December") echo "It is Christmas time!<br>";

	//Comparison
	if($a>$b) echo "a is greater than b <br>";
	if($a<$b) echo "a is less than b <br>";
	if($a<=$b) echo "a is greater than or equal to b <br>";
	if($a>=$b) echo "a is less than or equal to b <br>";
	
	//Logical
	$c = 1;
	$d = 0;
	echo $c AND $d;
	echo "<br>";
	if($c or $d)
	{
		echo "One of the operands or both operands are TRUE";
		echo "<br>";
	}
	echo $c OR $d;
	echo "<br>";
	echo $c XOR $d;
	echo "<br><br>";
	
	//if
	$bank_balance = 120;
	$savings = 100;
	if($bank_balance<100)
	{
		$money = 1000;
		$bank_balance+=$money;
	}
	
	//else
	else
	{
		$savings+=50;
		$bank_balance-=50;
	}
	echo "The savings is: ".$savings."<br>";
	echo "The bank balance is: ".$bank_balance."<br><br>";
	
	//switch
	$page = "Home";
	switch($page)
	{
		case "Home":
		{
			echo "You choose Home";
			break;
		}
		case "Login":
		{
			echo "You choose Login";
			break;
		}
		case "Links":
		{
			echo "You choose Links";
			break;
		}
		default:
		{
			echo "None of the choices is correct";
		}
	}
	
	//?
	$fuel = 10;
	echo "<br>";
	echo $fuel<=1? "Fill tank now": "There's enough fuel";
	?>
	<h1>
	</body>
</html>