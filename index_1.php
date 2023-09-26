<?php
echo "PHP Tutorial";
?>

<?php
$fname = "Rahul";
$sname = "Arora";

echo  $fname. $sname. "Technical". "Error";


$a = 10;
$b = 15;
$c = $a+$b;
$d = 9;

echo "\n add:" .$c;

$c = $a*$b;
echo "\nmult: \t" .$c;

$d++;  // d = 10 + 1
echo "increment" .$d;

$fname = "RAHUL";
$sname = "  ARORA";

echo $fname.$sname;
?>
<html>
<head>PHP </head>
<body>


<h1> Arithmatic Operators </h1>


<?php


$a = 30;
$b = 50; 
$c = $a + $b;
echo "add", $c;

$c = $a - $b;
echo "\nsub", $c;

$c = $a * $b;
echo "mul", $c;

$c = $a / $b;
echo "div" . $c;

$c = $a % $b;
echo "mod" .$c;

$a++;  
echo "increment" .$a;

$b--;  
echo "decrement" .$b;

?>
<body>
</html>

<hr>


<html>
<head>PHP </head>
<body>


<h1> Comparison Operators </h1>

<?php


$a = 30;
$b = 50; 

var_dump($a==$b);

$a = 30;
$b = 50; 

var_dump($a!=$b);

$a = 30;
$b = 50; 

var_dump($a>$b);

$a = 30;
$b = 50; 

var_dump($a<$b);

$a = 30;
$b = 50; 

var_dump($a>=$b);

$a = 30;
$b = 50; 

var_dump($a<=$b);


?>
<body>
</html>

<hr>


<html>
<head>PHP </head>
<body>


<h1> Logical and Conditional Operators </h1>

<?php

$a = 30;
$b = 50; 
var_dump($a&&$b);


$a = 30;
$b = 50; 
var_dump($a||$b);


$x = 15;
$x <= 20? $than = "Yes" : $than = "no";
var_dump($than);


?>
<body>
</html>

<hr>

<html>
<head>PHP</head>
<body>


<h1> Assingnment Operators </h1>

<?php


$a = 30;
$b = 50; 

$c = ($a*$b) ."\nrahul"."arora";

var_dump($c);

$a = 22;
$b = 50;

var_dump($a&&$b);

$id = "Rahul";
$id_ = "Arora";

echo $id.$id_;




?>
<body>
</html>

<hr>