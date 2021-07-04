<?php
//4-11 ◯
// $num = fgets(STDIN);
// if ( $num < 0 ) {
//     "整数値で入力してください。";
// } else {
//     echo "何個*を表示しますか: $num";
//    for ($i = 0; $i < $num; $i++) {
//     echo "*";
//    } 
// }

//4-12 for以降が発動しない
//  echo "カウントダウンします。";
//  $num = fgets(STDIN);
// do {
//     echo "正の整数値: $num\n";
// } while ( $num <= 0 );
// for ($i= 0; $i >=$num; $num--) {
//   echo "$num\n";
// } 
    
//4-13 ◯
// echo "カウントアップします。";
// $up = fgets(STDIN);
// do {
//   echo "正の整数値： $up\n";
// } while ( $up <= 0 );
// for ( $i = 0; $i <= $up; $i++ ) {
//     echo "$i\n";
// }

//4-14 //途中、動くが計算できていない
echo "1からnまでの和を求めます。";
do {
    $n = fgets(STDIN);
    echo "nの値：$n";
} while ( $n <= 0 );
$sum = 0;
for ( $i = 1; $i <= $n; $i++ ) {
    $res = $sum + $i;
}
echo "1から$n までの和は$res です。";

//4-15

//4-16

//4-17



?>