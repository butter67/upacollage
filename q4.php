<?php

//4-1　◯
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


//4-2　◯
do {
     $num = fgets(STDIN);
     echo "3桁の整数値: $num";
} while ( $num < 100 || $num > 999 );
     echo "$num と入力しましたね。";

//4-3 ◯
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

//4-4 ◯
$a = 33;
$b = 28;
echo "整数値A： $a\n";
echo "整数値B： $b\n";
if ( $a > $b ) {
    $tmp = $a;
    $a = $b;
    $b = $tmp;
}
echo "$a Aです。";
do {
    echo "$a\n";
    $a = $a + 1;
} while ( $a <= $b );

//4-5  ◯
echo "カウントダウンします。";
do {
    $cou = (int)fgets(STDIN);
    echo "正の整数値: $cou";
} while ( $cou <= 0 );
while ( $cou >= 0 ) {
    echo "$cou\n";
    $cou--;        //これだと数値の変わらない無限ループになってしまう
}
echo "値は$cou になりました。";

//4-6 ◯　この問題で、最後$cou--とデクリメントすると数値の変わらない無限ループになってしまうのはなぜか
echo "カウントダウンします。";
do {
    $cou = (int)fgets(STDIN);
    echo "正の整数値: $cou";
} while ( $cou <= 0 );
while ( $cou >= 0 ) {
    echo "$cou\n";
    --$cou;
}
echo "値は$cou になりました。";

// //4-7　◯
$num = fgets(STDIN);
echo "何個*を表示しますか: $num 個\n";
if ( $num > 0 ) {
    $i = 0;
    while ( $i < $num ) {
        echo "*";
        ++ $i;
    } return false;
}

//4-8　◯
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

//4-9 ◯
echo "正の整数値の桁数を求めます。";
 do {
     $atai = fgets(STDIN);
     echo "正の整数値：$atai";
 } while ( $atai <= 0 );
 $degi = 0;
 while ( $atai > 0 ) {
     $degi++;
     echo "カウント：$dezi\n";
    $atai = intdiv($atai,10);
     echo "値：$atai\n";
 }
 echo "その数は$degi 桁です。";



// //4-10　◯
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