<!DOCTYPE html>
<html>
<title>"Factorial using While loop"</title>
<body>

<?php
$number=5;
$a = 1;
$x = $number;
while($x>=1)
{
	$a = $a * $x;
    $x--;
}
echo "Factorial of $number is $a";  
?>
</body>
</html>
