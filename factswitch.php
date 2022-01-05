<!DOCTYPE html>
<html>
<title>"Factorial using switchloop"</title>
<body>

<?php
$number = 5;
switch ($number) 
{
	case '$number<=1':
    	echo "1";
        break;
  	default:
    	$a = 1;
    	for ($x=$number; $x>=1; $x--)   
		{  
  			$a = $a * $x;  
		}  
}
echo "Factorial of $number is $a";
?>
</body>
</html>
