<?php
function insertArrayAtPosition( $array, $insert, $position ) {
    /*
    $array : The initial array i want to modify
    $insert : the new array i want to add, eg array('key' => 'value') or array('value')
    $position : the position where the new array will be inserted into. Please mind that arrays start at 0
    */
    return array_slice($array, 0, $position, TRUE) + $insert + array_slice($array, $position, NULL, TRUE);
}

$number1 = rand(1,10000); //limited for testing
$number2 = rand(1,10000);
$numArr = array($number1,'',$number2,' = ');


$numberMult = $number1 * $number2;
$numberAdd = $number1 + $number2;
$numberSub = $number1 - $number2;
$numberDiv = $number1 / $number2;


$numArr[1] = ' x '; echo implode($numArr).$numberMult.'<br>'; //Multiplication
$numArr[1] = ' + '; echo implode($numArr).$numberAdd.'<br>'; //Addition
$numArr[1] = ' - '; echo implode($numArr).$numberSub.'<br>'; //Subtraction
$numArr[1] = ' ÷ '; echo implode($numArr).$numberDiv.'<br>'; //Division