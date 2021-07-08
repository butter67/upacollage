<?php
//6-1 ◯
// $array = ["0.0", "0.0", "0.0", "0.0", "0.0"];
// echo "a[0] = $array[0]\n";
// echo "a[1] = $array[1]\n";
// echo "a[2] = $array[2]\n";
// echo "a[3] = $array[3]\n";
// echo "a[4] = $array[4]\n";

//6-2 ◯
// $array = ([0,1,2,3,4]);
// $count = count($array);
// // echo "$count";
// for ( $i = 0; $i < $count; $i++) {
//  $array[$i] = 5 - $i;
//  echo "a[$i] = $array[$i]\n";
// }

//6-3 ◯
// $array = ([0,1,2,3,4]);
// $count = count($array);
// for ( $i = 0; $i < $count; $i++) {
//  $array[$i] = ( $i + 1 ) * 1.1;
//  echo "a[$i] = $array[$i]\n";
// }

//6-4

//6-5 ◯
// $array = [5,4,3,2,1];
// echo "a[0] = $array[0]\n";
// echo "a[1] = $array[1]\n";
// echo "a[2] = $array[2]\n";
// echo "a[3] = $array[3]\n";
// echo "a[4] = $array[4]\n";

//6-6 

//6-7 ×できていない
// $ninzu = fgets(STDIN);
// // $count = count($ninzu);
// $array = array();
// echo "点数を入力せよ。\n";
// for ( $i = 0; $i < $count; $i++ ) {
//   $array[$i] = fgets(STDIN);
//   echo "$i 番の点数： $array[$i]";
// }

//6-8 ◯
$youso = fgets(STDIN);
$array = array();
for ( $i = 0; $i < $youso; $i++) {
    $num = (int)fgets(STDIN);
    $array[$i] = $num;
    echo "a[$i] = $num\n";
}
echo "探す数値: $dokonum\n";
$dokonum = (int)fgets(STDIN);
$res = array_search($dokonum,$array); 
if (in_array($dokonum, $array)) {
  echo "それはa[$res] にあります。\n";
} else {
    echo "その数はありません。\n";
}

//6-9 ◯
// $yousosu = fgets(STDIN);
// $array = array();
// for ( $i = 0; $i < $yousosu; $i++ ) {
//     $num = fgets(STDIN);
//     $array[$i] = $num;
//     echo "a[$i] = $num";
// }
// $sum = array_sum($array);
// $average = $sum/count($array);
// echo "全要素の合計は$sum です。";
// echo "全要素の平均は$average です。";

//6-10 ◯
// $yousosu = fgets(STDIN);
// $array = array();
// for ( $i = 0; $i < $yousosu; $i++ ) {
//     $num = mt_rand(1,10);
//     $array[$i] = $num;
//     echo "a[$i] = $num\n";
// }

//6-11  ◯
// echo "要素数：$youso";
// $youso = (int)fgets(STDIN);
// for ( $i = 0; $i < $youso; $i++ ) {
//     $array = range(1, $youso);
//     shuffle($array); 
//     for ( $i = 0; $i < $youso; $i++ ) {
//         echo "a[$i] = $array[$i]\n";
//     }
// }

//6-12 ◯
// do {
//     echo "要素数：$n";
//     $n = (int)fgets(STDIN);
// } while ( $n > 10 );
// $ar_num = range(1,$n);
// shuffle($ar_num);
// for ($i = 0 ; $i < $n ; $i++){
//     echo "a[$i] = $ar_num[$i]\n";
// }




?>