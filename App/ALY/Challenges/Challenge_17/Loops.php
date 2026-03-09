<?php

# Sum of Numbers
$x = 0;
$sum = 0;

for ($x = 1; $x <= 100; $x++){
    $sum += $x;
    }
echo "Sum of numbers from 1 to 100 is: $sum";


#*Fibonacci Series:
$num1 = 0;
$num2 = 1;
$terms = 10;

for($i = 2; $i < $terms; $i++){
    $num3 = $num1 + $num2;
    $num1 = $num2;
    $num2 = $num3;
}


