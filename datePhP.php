<?php
$Month = date('F');
$tari = date('o', mktime(0, 0, 0, date('n'), 1));
$Day = date("j");
if(isset($_GET['load'])){
    print_r($Month);
    echo ' ';
    echo $tari;
}
echo ',';
echo $Day;
echo ',';
nkar();
function nkar(){
    $count = 1;
    $cou = 1;
    $co = 1;
    $amis = date('n');
    $Days = date("t", mktime(0, 0, 0, $amis, 1));
    $countDay = $Days + 1;
    $positionDate = date("N", mktime(0, 0, 0, $amis, 1));
    $variable = $positionDate -1;
    for ($i = 0; $i < 5; $i++){
        echo '<div class="divs'.$co.'">';
        $co++;
        for($j = 0; $j < 7; $j++){
            if ($i == 0){
                if ($j < $variable){
                    echo '<div class="days">&nbsp;</div>';
                }else if ($j >= $variable){
                    echo '<div class="days" id="matr'.$cou.'">'.$count.'</div>';
                    $count++;
                    $cou++;
                }
            }else{
                echo '<div class="days" id="matr'.$cou.'">'.$count.'&nbsp;</div>';
                $count++;
                $cou++;
            }
            if ($count == $countDay){
                $count = ' ';
            }
        }
        echo '</div>';
    }
}
echo ',';
echo date('n');
echo ',';
click();
function click(){
    $tari = date('o');
    if(isset($_GET['next'])){
        $next = $_GET['next'];
    }
    if (isset($_GET['nextyear'])){
        $asdf = $_GET['nextyear'];
        $tari = $asdf;
    }
    $Month = date('F', mktime(0, 0, 0, $next, 1, $tari));
    print_r($Month);
    echo ' ';
    echo $tari;
    echo ',';
    $count = 1;
    $cou = 1;
    $co = 1;
    $Days = date("t", mktime(0, 0, 0, $next, 1, $tari));
    $countDay = $Days + 1;
    $positionDate = date("N", mktime(0, 0, 0, $next, 1, $tari));
    $variable = $positionDate -1;
    if($variable == 6 || $variable == 5 && $countDay > 31){
        for ($i = 0; $i < 6; $i++){
            echo '<div class="divs'.$co.'">';
            $co++;
            for($j = 0; $j < 7; $j++){
                if ($i == 0){
                    if ($j < $variable){
                        echo '<div class="days">&nbsp;</div>';
                    }else if ($j >= $variable){
                        echo '<div class="days"  id="matr'.$cou.'">'.$count.'</div>';
                        $count++;
                        $cou++;
                    }
                }else{
                    echo '<div class="days" id="matr'.$cou.'">'.$count.'&nbsp;</div>';
                    $count++;
                    $cou++;
                }
                if ($count == $countDay){
                    $count = ' ';
                }
            }
            echo '</div>';
        }
    }else{
        for ($i = 0; $i < 5; $i++){
            echo '<div class="divs'.$co.'">';
            $co++;
            for($j = 0; $j < 7; $j++){
                if ($i == 0){
                    if ($j < $variable){
                        echo '<div class="days">&nbsp;</div>';
                    }else if ($j >= $variable){
                        echo '<div class="days" id="matr'.$cou.'">'.$count.'</div>';
                        $count++;
                        $cou++;
                    }
                }else{
                    echo '<div class="days" id="matr'.$cou.'">'.$count.'&nbsp;</div>';
                    $count++;
                    $cou++;
                }
                if ($count == $countDay){
                    $count = ' ';
                }
            }
            echo '</div>';
        }
    }
}
echo ',';
clickprev();
function clickprev(){
    $tari = date('o');

    if(isset($_GET['prev'])){
        $prev = $_GET['prev'];
    }
    if(isset($_GET['prevyear'])){
        $asd = $_GET['prevyear'];
        $tari = $asd;
    }
    $Month = date('F', mktime(0, 0, 0, $prev, 1, $tari));
    print_r($Month);
    echo ' ';
    echo $tari;
    echo ',';
    $count = 1;
    $cou = 1;
    $co = 1;
    $Days = date("t", mktime(0, 0, 0, $prev, 1, $tari));
    $countDay = $Days + 1;
    $positionDate = date("N", mktime(0, 0, 0, $prev, 1, $tari));
    $variable = $positionDate -1;
    if($variable == 6){
        for ($i = 0; $i < 6; $i++){
            echo '<div class="divs'.$co.'">';
            $co++;
            for($j = 0; $j < 7; $j++){
                if ($i == 0){
                    if ($j < $variable){
                        echo '<div class="days">&nbsp;</div>';
                    }else if ($j >= $variable){
                        echo '<div class="days" id="matr'.$cou.'">'.$count.'</div>';
                        $count++;
                        $cou++;
                    }
                }else{
                    echo '<div class="days"  id="matr'.$cou.'">'.$count.'&nbsp;</div>';
                    $count++;
                    $cou++;
                }
                if ($count == $countDay){
                    $count = ' ';
                }
            }
            echo '</div>';
        }
    }else{
        for ($i = 0; $i < 5; $i++){
            echo '<div class="divs'.$co.'">';
            $co++;
            for($j = 0; $j < 7; $j++){
                if ($i == 0){
                    if ($j < $variable){
                        echo '<div class="days">&nbsp;</div>';
                    }else if ($j >= $variable){
                        echo '<div class="days" id="matr'.$cou.'">'.$count.'</div>';
                        $count++;
                        $cou++;
                    }
                }else{
                    echo '<div class="days" id="matr'.$cou.'">'.$count.'&nbsp;</div>';
                    $count++;
                    $cou++;
                }
                if ($count == $countDay){
                    $count = ' ';
                }
            }
            echo '</div>';
        }
    }
}
?>
