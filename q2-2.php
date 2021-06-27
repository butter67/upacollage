<?php
 //2-12
//  $num = fgets(STDIN);
//  $plus5 = mt_rand($num + 5);
//  $minus5 = mt_rand($num - 5);
//  $ransu = mt_rand($plus5,$minus5);
//  echo "整数値: $num \n";
//  echo "その値±5の乱数を生成しました。\n";
//  echo "値は $ransu です。\n";


//2-13
$num1 = mt_rand() / mt_getrandmax() * $max;
$num2 + mt_rand() / mt_getrandmax() * ($max - $min);
// $num2 = mt_rand(0.0, 10.0);
// $num3 = mt_rand(-1.0, 1.0);
echo "3個の乱数を生成しました。";
echo "0.0以上 1.0未満 : $num1 \n";
echo "0.0以上 10.0未満 : $num2 \n";
echo "-1.0以上 1.0未満 : $num3 \n";


//2-14
$name = fgets(STDIN);
$last = fgets(STDIN);
echo "姓: $name";
echo "名: $last";
echo "こんにちは $name $last さん。";

//2-15
$pref = fgets(STDIN);
$city = fgets(STDIN);
echo "住所: $pref $city";
echo "お住まいは$pref $city ですね。";

//2-16
$s1 = "文字列s1はABCです。";
$s2 = "文字列s2はXYZです。";
echo $s1;
echo $s2;
$s1 = "文字列s1はFBIです。";
echo $s1;
echo $s2;

 ?>