<?php
//4-11 ◯
$num = fgets(STDIN);
if ( $num < 0 ) {
    "整数値で入力してください。";
} else {
    echo "何個*を表示しますか: $num";
   for ($i = 0; $i < $num; $i++) {
    echo "*";
   } 
}

//4-12 ◯
 echo "カウントダウンします。";

do {
    $num = (int)fgets(STDIN);
    echo "正の整数値: $num\n";
} while ( $num <= 0 );
for ($i= 0; $i <= $num; $num--) {
  echo "$num\n";
} 
    
//4-13 ◯
echo "カウントアップします。";
$up = fgets(STDIN);
do {
  echo "正の整数値： $up\n";
} while ( $up <= 0 );
for ( $i = 0; $i <= $up; $i++ ) {
    echo "$i\n";
}

//4-14 ◯
echo "1からnまでの和を求めます。";
do {
    $n = fgets(STDIN);
    echo "nの値：$n";
} while ( $n <= 0 );
$sum = 0;
for ( $i = 1; $i <= $n; $i++ ) {
    $sum = $sum + $i;
}
echo "1から$n までの和は$sum です。";

//4-15　△式はあっているが惜しい
echo "1からnまでの和の式を求めます。";
do {
    $n = fgets(STDIN);
    echo "nの値：$n";
} while ( $n <= 0 );
$sum = 0;
for ( $i = 1; $i <= $n; $i++ ) {
    echo " $i + ";
    $sum = $sum + $i;
}
echo "= $sum ";


//4-16 ◯
echo "身長と標準体重の対応表を作成します。";
echo "何cmから: $cm\n";
$cm = (int)fgets(STDIN);
echo "何cmまで: $tocm\n";
$tocm = (int)fgets(STDIN);
echo "何cmごと: $tillcm\n";
$tillcm = (int)fgets(STDIN);
echo "身長　標準体重\n";
echo "--------------\n";
for ( $i = $cm; $i <= $tocm; $i += $tillcm ) {
    $res = ( $i - 100 ) * 0.9;
    echo "$i\n";
    echo "$res\n"; 
}


//4-17　◯
$num = fgets(STDIN);
echo "何個*を表示しますか: $num";
if ( $num > 0 ) {
   for ($i = 0; $i < $num; $i++) {
      echo "*";
    if ( $i % 5 == 4 ) {
         echo "\n";
    }
   } 
}

// //4-18 △結果が
echo "整数値：$num";
$num = (int)fgets(STDIN);
$yaku = 0;
for ( $i = 1; $i <= $num; $i++ ) {
    if ( $num % $i == 0 ) {
        echo "$i\n";
        $yaku++;
    }
}
echo "\n約数は$yaku 個です。";

//4-19 ◯
echo "二乗にする整数を入力してください。\n";
$num = (int)fgets(STDIN);
echo "nの値：$num\n";
for ( $i = 1; $i <= $num; $i++ ) {
    $zijo = $i * $i;
    echo "$i の二乗は$zijo\n";
}


?>