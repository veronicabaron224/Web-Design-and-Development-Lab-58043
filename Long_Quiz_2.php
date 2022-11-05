<html>
	<head>
		<title>Long Quiz 2 - Baron, Veronica Frances S.</title>
	</head>
	<body>
	<?php
	//Problem 1
	$salary_rate = 600;
	$salary = $salary_rate*15;
	$taxable_amount = 0.3*$salary;
	$net_pay = $salary - $taxable_amount;
	
	echo "PROBLEM 1<br>";
	echo "Salary Rate: 600/day<br>";
	echo "Salary: ".$salary."<br>";
	echo "Taxable Amount: ".$taxable_amount."<br>";
	echo "Net Pay: ".$net_pay."<br><br>";
	
	//Problem 2
	$finalsum = 0;
	
	for($sum=1;$sum<=50;++$sum)
	{
		$finalsum += $sum;
	}
	
	echo "PROBLEM 2<br>";
	echo "The sum of all positive integers from 1-50 is ".$finalsum.".";
	?>
	</body>
</html>