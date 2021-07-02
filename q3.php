<?php
//3-1
$atai = -10;
echo "整数値: $atai";
if ($atai < 1 )
 echo "その値は負です。";
 else 
 echo "その値は加です。";

//3-2
$num = 62;
$num2 = -35;
$zettai = abs($num);
$zettai2 = abs($num2);
echo "整数値: $num\n";
echo "その絶対値は $zettai です。\n";
echo "整数値: $num2\n";
echo "その絶対値は $zettai2 です。\n";

//3-3
$a = 12;
$b = 4;
echo "変数A: $a\n";
echo "変数B: $b\n";
if ( $a % $b === 0 )
echo "BはAの約数です。";
else 
echo "BはAの約数ではありません。";

//3-4
$a = 13;
$b = 5;
echo "変数A: $a";
echo "変数B: $b";
if ( $a % $b !== 0 )
echo "BはAの約数ではありません。";

//3-5
$num = fgets(STDIN);
if ( $num > 0 ) 
 echo "その値は正です。";
 elseif ( $num < 0 ) 
 echo "その値は負です。";
 else 
 echo "その値は０です。";

 //3-6
$num = fgets(STDIN);
if ( $num > 0 ) 
 echo "その値は正です。";
 elseif ( $num < 0 ) 
 echo "その値は負です。";
 elseif ( $num == 0 )
 echo "その値は０です。";
// return false;

//3-7
$a = 12;
$b = 3;
echo "変数A: $a";
echo "変数B: $b";
if ( $a > $b )
echo "変数Aの方が大きいです。";
elseif ( $a < $b ) 
echo "変数Bの方が大きいです。";
else 
echo "aとbは同じです。";


//3-8
$num = 36;
echo "整数値: $num \n";
if (( $num % 5 ) == 0 ) 
echo "その値は5で割り切れます。";
else 
echo "その値は5で割り切れません。";

//3-9
$num = 200;
echo "整数値: $num \n";
if ( $num < 1 )
echo "正ではない値が入力されました。";
elseif (($num % 10) == 0 )
echo "その値は10の倍数です。";
else 
echo "その値は10の倍数ではありません。";

//3-10
$num = 17;
echo "整数値: $num \n";
if ( $num < 1 ) {
 echo "正ではない値が入力されました。\n";
}
elseif (( $num % 3 ) == 0 ) {
 echo "その値は3で割り切れます。\n";
}
elseif (( $num % 3 ) == 2 ) {
 echo "その値を3で割った余は2です。\n";
}
elseif (( $num % 3 ) == 1 ) {
 echo "その値を3で割った余は1です。\n";
}


?>