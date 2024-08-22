<?php
function kake($a, $b)
{
    $value = $a * $b;
    return $value;
}

$total = kake(1, 5);
echo $total;

function goukei($score1, $score2, $score3)
{
    $total = $score1 + $score2 + $score3;
    if ($total > 210) {
        echo "合計点は $total 点なので合格です";
    } else {
        echo "合計点は $total 点なので不合格です";
    }
}
echo (goukei(100, 100, 11));


function sankaku($a, $b){
    return $a * $b / 2;
}
function sikaku($a, $b){
    return $a * $b;
}
function daikei($a, $b, $c){
    return ($a + $b) * $c / 2;
}
echo "<br>" . sankaku(2, 3) . "<br>";
echo sikaku(2, 3) . "<br>";
echo daikei(2, 3, 2);
