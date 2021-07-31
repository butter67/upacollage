<?php

echo "1次元配列の要素数：$one\n";
$one = (int)fgets(STDIN);
$x = [];
echo "各要素の値を入力せよ。\n";
for ( $i =0; $i < $one; $i++ ) {
    $x[$i] = fgets(STDIN);
    echo "x[$i] : $x[$i]";
}


echo "2次元配列yの行数:$gyou\n";
$gyou = (int)fgets(STDIN);
$y = [];
for ( $i = 0; $i < $gyou; $i++ ) {
    echo "$i 行目の列数：$retusu\n";
    $retusu = (int)fgets(STDIN);
    echo "各要素の値を入力せよ。\n";
  for ($j = 0; $j < $retusu; $j++ ) {
      echo "y[$i][$j]：$ten\n";
      $ten = (int)fgets(STDIN);
      $y[$i][$j] = $ten;
  } 
}
// print_r($y);


function PrintArray ($x,$y) {
 echo "1次元配列x:\n";
    for ( $i = 0; $i < count($x); $i++ ) {
      $ans1 = $x[$i];
      echo "$ans1  ";
   }

echo "2次元配列y:\n";
    for ( $i = 0; $i < count($y); $i++ ) {
      for ( $j = 0; $j < count($y[$i]); $j++ ) {
         $ans = $y[$i][$j];
         echo "$ans  ";
      }
    echo "\n";
  }
}


$ans = PrintArray ($x,$y);
echo "$ans";




?>