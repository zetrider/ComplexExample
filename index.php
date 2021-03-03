<?php
include('vendor/autoload.php');

use Complex\Values\Re;
use Complex\Values\Im;
use Complex\Values\Z;
use Complex\Calculator;

$re1 = new Re('1');
$im1 = new Im('2');
$z1 = new Z($re1, $im1);

$re2 = new Re('2');
$im2 = new Im('3');
$z2 = new Z($re2, $im2);

$calculator = new Calculator($z1, $z2);
echo $calculator->addition();
echo '<hr>';
echo $calculator->subtraction();
echo '<hr>';
echo $calculator->multiplication();
echo '<hr>';
echo $calculator->division();