<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Php practice</title>
</head>

<body>
<?php
echo date('l, F jS Y.');
echo '<br/> <br/>';

echo 'This is a <strong>test</strong>!';
echo '<br/> <br/>';
// Variable declaration
$var1 = 'PHP';
$var2 = 5;
$var3 =  $var1 .  $var2;
echo $var3;
echo '<br/><br/>';

//Array declaration
$myArray = array('one' , 2, '3');
echo $myArray[0];
echo '<br/><br/>';
$cars[0] = "Volvo";
$cars[1] = "BMW";
$cars[2] = "Toyota";

echo "I like&nbsp;" . $cars[1];
echo "<br/><br/>";
echo count($cars);
echo "<br/><br/>";
//Associative Array
$marks = array("Maths"=>"42", "English"=>"47", "Chemistry"=>"45");
echo 	"I've scored&nbsp;" . $marks['English'] . "&nbsp;in English";

echo "<br/><br/>";
// Multidimentional Array

$shop = array( array("rose", 1.25 , 15),
               array("daisy", 0.75 , 25),
               array("orchid", 1.15 , 7) 
             ); 
echo $shop[0][0]." costs ".$shop[0][1]." and you get ".$shop[0][2]."<br />";
?>
 
</body>
</html>