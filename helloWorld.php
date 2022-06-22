<?php

echo "<h1>hello world!</h1>";       //1

$hello = 'hello';
$world = 'world!';

$learning = 'Learning PHP';
if ($learning == 'Learning PHP'){
    $learning = '<br>'.$hello.' '.$world;
}

echo $hello.' '.$world;             //2
echo $learning;                     //3
echo "<h1>$hello $world</h1>";      //4

$worldArr = array('hello',' ','world!');
echo implode($worldArr);            //5