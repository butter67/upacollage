<?php

// //4-1
do {
    $num = fgets(STDIN);
    if ( $num > 0 ) {
        echo "整数値: $num";
        echo "その値は正です。";
        echo "もう一度？ 1...Yes/0...No";
        $respo = fgets(STDIN);
    } elseif ( $num < 0 ) {
        echo "整数値: $num";
        echo "その値は負です。";
        echo "もう一度？ 1...Yes/0...No";
        $respo = fgets(STDIN);
    } else {
        echo "その値は0です。";
    } 
} while ( $respo == 1 );


// //4-2
do {
     $num = fgets(STDIN);
     echo "3桁の整数値: $num";
} while ( $num < 100 || $num > 999 );
     echo "$num と入力しましたね。";

//4-3
$no = mt_rand(10,99);
echo "$no\n";
echo "数当てゲーム開始！";
echo "10~99の数を当ててください。";
do {
    $num = fgets(STDIN);
    if ( $num < $no ) {
        echo "もっと大きな数字だよ！\n";
    } else {
        echo "もっと小さな数字だよ！\n";
    }
} while ( $num != $no );
 echo "正解です！！";

//4-4

//4-5 できなかった箇所。
// echo "カウントダウンします。";
// do {
//     $cun = fgets(STDIN);
//     echo "正の整数値: $cun";
// } while ( $cun <= 0 );
// // echo "正の整数値は:$cun でした。";
// while ( $cun < 0 ) {
//     echo "$cun";
//     $cun--;
// }




//4-6

//4-7
$num = fgets(STDIN);
echo "何個*を表示しますか: $num 個\n";
if ( $num > 0 ) {
    $i = 0;
    while ( $i < $num ) {
        echo "*";
        ++ $i;
    } return false;
}

//4-8
$num = fgets(STDIN);
echo "何個*を表示しますか: $num 個\n";
if ( $num > 0 ) {
    $i = 0;
     while ( $i < $num) {
     if ( $i % 2 == 0) {
         echo "*";
     } else {
         echo "+";
     } $i++;
    };
}
//4-9

//4-10
do {
  $num = fgets(STDIN);
  echo "正の整数値: $num";
} while ( $num <= 0 );
$count = 1;
$res = 1;
while ( $count <= $num ) {
    $res = $res * $count;
    $count++;
}
echo "1から$num までの積は$res です。";






     



 ?>