<?php
$Month = date('F');
$tari = date('o');
if(isset($_GET['load'])){
    print_r($Month);
    echo $tari;
}
echo ',';
for($m=1; $m<=12; ++$m){
    echo date('F', mktime(0, 0, 0, $m, 1)).' ';
}
echo ',';
nkar();
function nkar(){
    $count = 1;
    $amis = date('n');
    $Days = date("t", mktime(0, 0, 0, $amis, 1));
    $countDay = $Days + 1;
    //$Day = date("j", mktime(0, 0, 0, $amis, date("j"), 2018));
    $positionDate = date("N", mktime(0, 0, 0, $amis, 1));
    $variable = $positionDate -1;
    for ($i = 0; $i < 5; $i++){
        echo '<br>';
        for($j = 0; $j < 7; $j++){
            if ($i == 0){
                if ($j < $variable){
                    echo '<div class="days">&nbsp;</div>';
                }else if ($j >= $variable){
                    echo '<div class="days">'.$count.'</div>';
                    $count++;
                }
            }else{
                echo '<div class="days">'.$count.'&nbsp;</div>';
                $count++;
            }
            if ($count == $countDay){
                $count = ' ';
            }
        }
    }
}
echo ',';
clicknext();
    function clicknext(){
        if(!empty($_GET['next']))
        $next = $_GET['next'];
        $Month = date('F');
        print_r($Month);
        echo ',';
        $count = 1;
        $amis = date('n');
        $nextclick = $amis + $next;
        $Days = date("t", mktime(0, 0, 0, $nextclick, 1));
        $countDay = $Days + 1;
        $positionDate = date("N", mktime(0, 0, 0, $nextclick, 1));
        $variable = $positionDate -1;
        if($variable == 6){
            for ($i = 0; $i < 6; $i++){
                echo '<br>';
                for($j = 0; $j < 7; $j++){
                    if ($i == 0){
                        if ($j < $variable){
                            echo '<div class="days">&nbsp;</div>';
                        }else if ($j >= $variable){
                            echo '<div class="days">'.$count.'</div>';
                            $count++;
                        }
                    }else{
                        echo '<div class="days">'.$count.'&nbsp;</div>';
                        $count++;
                    }
                    if ($count == $countDay){
                        $count = ' ';
                    }
                }
            }
        }else{
            for ($i = 0; $i < 5; $i++){
                echo '<br>';
                for($j = 0; $j < 7; $j++){
                    if ($i == 0){
                        if ($j < $variable){
                            echo '<div class="days">&nbsp;</div>';
                        }else if ($j >= $variable){
                            echo '<div class="days">'.$count.'</div>';
                            $count++;
                        }
                    }else{
                        echo '<div class="days">'.$count.'&nbsp;</div>';
                        $count++;
                    }
                    if ($count == $countDay){
                        $count = ' ';
                    }
                }
            }
        }

    }
    echo ',';
clickprev();
    function clickprev(){
        if(!empty($_GET['prev']))
        $prev = $_GET['prev'];
        $count = 1;
        $amis = date('n');
        $nextclick = $amis - $prev;
        $Days = date("t", mktime(0, 0, 0, $nextclick, 1));
        $countDay = $Days + 1;
        $positionDate = date("N", mktime(0, 0, 0, $nextclick, 1));
        $variable = $positionDate -1;
        if($variable == 6){
            for ($i = 0; $i < 6; $i++){
                echo '<br>';
                for($j = 0; $j < 7; $j++){
                    if ($i == 0){
                        if ($j < $variable){
                            echo '<div class="days">&nbsp;</div>';
                        }else if ($j >= $variable){
                            echo '<div class="days">'.$count.'</div>';
                            $count++;
                        }
                    }else{
                        echo '<div class="days">'.$count.'&nbsp;</div>';
                        $count++;
                    }
                    if ($count == $countDay){
                        $count = ' ';
                    }
                }
            }
        }else{
            for ($i = 0; $i < 5; $i++){
                echo '<br>';
                for($j = 0; $j < 7; $j++){
                    if ($i == 0){
                        if ($j < $variable){
                            echo '<div class="days">&nbsp;</div>';
                        }else if ($j >= $variable){
                            echo '<div class="days">'.$count.'</div>';
                            $count++;
                        }
                    }else{
                        echo '<div class="days">'.$count.'&nbsp;</div>';
                        $count++;
                    }
                    if ($count == $countDay){
                        $count = ' ';
                    }
                }
            }
        }

    }

?>
