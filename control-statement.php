<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Control Statements</title>
</head>

<body>
<?php
$a = 15;
$b = 10;
if ($a > $b){
	echo "A is Bigger than B";
	}
	else{
		echo "A is not Bigger than B";
		}
		echo "<br/><br/>";
		// if else if
		$x = 20;
		$y = 25;
		$z = 15;
		if ($x < $y){
			echo "Y is Bigger than X";
			}
			elseif ($y == $z){
				echo "Y is equal to Z";
				
				}
				else{
					echo "Y is Bigger than Z";
					}
					echo "<br/><br/>";
					
	// While Loop
	 	$i = 1;
		while($i <= 10){
			echo $i++;
			}			
?>
</body>
</html>