<style>
    p{
        font-size: 14px;
        margin-top: 0px;
        margin-bottom: 0px;
    }
</style>

<?php
function table($inNum){
    for ($i=1; $i<=10; $i++){
        $mult = $i*$inNum;
        echo "<p>$i × $inNum = $mult</p>";
    }
}

table(6); echo '<br>';          //2

$numArr = array(3,5,8,12);      //3
foreach ($numArr as $value){
    table($value); echo '<br>';
}
?>