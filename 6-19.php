<?php
echo "6人の国語・数学の点数を入力せよ。\n";
$people = [];
for ( $i = 0; $i < 6; $i++ ) {
    $n = $i + 1;
    echo "$n 番‥国語：";
    $a = [];
    $a[0] = (int)fgets(STDIN);
    echo "数学：";
    $a[1] = (int)fgets(STDIN);
    array_push($people,$a);
}
// array_push($people,$a);

$sum = 0;
for ( $i = 0; $i < count($people); $i++ ) {
    $sum += $people[$i][0];
    $summath += $people[$i][1];
    $kokugo = $people[$i][0];
    $sugaku = $people[$i][1];
    $seitoave = ( $kokugo + $sugaku ) / 2;
    $n = $i +1;
    echo "$n 番目の生徒の2教科平均: $seitoave\n";
    echo "\n";
}
$heikin = $sum / count($people);
$heikinmath = $summath / count($people);
echo "国語の平均は$heikin です。\n";
echo "数学の平均は$heikinmath です。\n";



// $a = [10,20];
// $b = [30,40];
// $c = [50,60];
// $d = [70,80]; 
// $e = [90,100]; 
// $f = [110,120]; 
// array_push($people,$a);
// array_push($people,$b);
// array_push($people,$c);
// array_push($people,$d);
// array_push($people,$e);
// array_push($people,$f);
// print_r($people);


 ?>