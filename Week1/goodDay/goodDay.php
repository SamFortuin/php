<!DOCTYPE html>
<style>
    .center {
        margin-top: 20pc;
        text-align: center;
        color: white;
        font-size: 120px;
    }
</style>

<body id="main" style="background-size:cover;">
<meta http-equiv="refresh" content="1">
<?php
    function changeBG($inStr,$inTime){
        $translate = array(
            'morning' => 'morgen',
            'afternoon' => 'middag',
            'evening' => 'avond',
            'night' => 'nacht'
        );
        $imageURL = 'images/'.$inStr.'.png';
        echo "<h1 class=center>Goede $translate[$inStr]<br>$inTime</h1>";
        echo '<script>document.getElementById("main").style.backgroundImage = "url('.$imageURL.')";</script>';
    }
    
    
    date_default_timezone_set('Europe/Amsterdam');
    $currentTime = date('H:i:s')."<br>";
    $switchTime = date('H');

    if ($switchTime >= 0 and $switchTime < 6){
        changeBG('night',$currentTime);
    }
    elseif ($switchTime > 5 and $switchTime < 12){
        changeBG('morning',$currentTime);
    }
    elseif ($switchTime > 11 and $switchTime < 18){
        changeBG('afternoon',$currentTime);
    }
    elseif ($switchTime > 17 and $switchTime <= 23){
        changeBG('evening',$currentTime);
    }
?>
</body>