<html>
	<head>
		<title>Exercise 3</title>
	</head>
	<body>
	<?php
	$grade = "64";
	switch($grade)
	{
		case ($grade>70):
		{
			echo "PASSED";
			break;
		}
		case ($grade>=60 && $grade<=69):
		{
			echo "REMEDIAL";
			break;
		}
		case ($grade<59):
		{
			echo "FAILED";
			break;
		}
		default:
		{
			echo "Invalid grade";
		}
	}
	
	?>
	</body>
</html>