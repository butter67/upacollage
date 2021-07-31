<?php
echo "クラス数を入力せよ：$class\n";
$class = (int)fgets(STDIN);
$arr = [];
for ( $i = 0; $i < $class; $i++ ) {
    $cl = $i +1;
    echo "$cl 組の人数は：$ninzu\n";
    $ninzu = (int)fgets(STDIN);
  for ($j = 0; $j < $ninzu; $j++ ) {
      $ban = $j +1;
      echo "$cl 組$ban の点数：$ten\n";
      $ten = (int)fgets(STDIN);
      $arr[$i][$j] = $ten;
  } 
}

echo " 組 | 合計 平均\n";
echo "------------------\n";

for ( $i = 0; $i < count($arr); $i++ ) {  //ここでクラス数が取れた・・２
  $sum = 0;
  for ( $j = 0; $j < count($arr[$i]); $j++ ) { //ここでクラス数の中の人数をとりたい
    $sum +=  $arr[$i][$j];
    $total = $sum;
    $ave = $total / count($arr[$i]);
  }
  $kumi = $i + 1;
  echo "$kumi 組｜$total  $ave\n";
  $totalall += $total;  
  $aveall += $ave;
  $heikin = $aveall / count($arr);
}
echo "------------------\n";
echo " 計 | $totalall  $heikin\n";
// for ( $i = 0; $i < count($arr); $i++ ) { 
//   for ( $j = 0; $j < $arr[$i]; $j++ ) {
//     $sum +=  $arr[$i][$j];
//     $total = $sum;
//   }
// }

// print_r($arr);
?>