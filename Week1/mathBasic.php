<?php
$number1 = rand(1,10000); //limited for testing
$number2 = rand(1,10000);
$numArr = array($number1,'',$number2,' = ');

//output of eqations
$numberMult = $number1 * $number2;
$numberAdd = $number1 + $number2;
$numberSub = $number1 - $number2;
$numberDiv = $number1 / $number2;

//printing to browser
$numArr[1] = ' × '; echo implode($numArr).$numberMult.'<br>'; //Multiplication
$numArr[1] = ' + '; echo implode($numArr).$numberAdd.'<br>'; //Addition
$numArr[1] = ' - '; echo implode($numArr).$numberSub.'<br>'; //Subtraction
$numArr[1] = ' ÷ '; echo implode($numArr).$numberDiv.'<br>'; //Division