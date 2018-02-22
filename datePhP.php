<?php

$load = $_GET['load'];
$Month = date('F');
if (!empty($load)){
    echo $Month;
};



$amis;
$variable;
$count = 1;


echo ',';
for($m=1; $m<=12; ++$m){
    echo date('F', mktime(0, 0, 0, $m, 1)).' ';
}

$amis = date('n');
$Days = date("t", mktime(0, 0, 0, $amis, 1, 2018));

$Day = date("j", mktime(0, 0, 0, $amis, date("j"), 2018));

$positionDate = date("N", mktime(0, 0, 0, $amis, 1, 2018));

$variable = $positionDate -1;
echo ',';
for ($i = 0; $i < 5; $i++){
    echo '<br>';
    for($j = 0; $j < 7;$j++){
        if ($i = 0){
            if ($j < $variable){
                echo '<div class="days">&nbsp;</div>';
            }else if ($j >= $variable){
                echo '<div class="days">'.$count.'</div>';
                $count++;
            }
        }else{
            echo '<div class="days">'.$count.'</div>';
            $count++;
        }
        if ($count == $Days){
            $count = ' ';
        }

    }
}
/*
$next = $_GET['next'];

if (isset($next)){
$new = $amis + $next;
}
echo ',';
echo $amis;
echo ',';
echo $asd;
echo ',';
echo $Days;
echo ',';
echo $new;
*/
