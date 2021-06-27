<?php 
//2-1
$wa = 82 + 17;
$sa = 82 - 17;
echo $wa;
echo $sa;

$shiki = "82 + 17 = 99\n";
$sashiki = "82 - 17 = 65\n";
echo $shiki;
echo $sashiki;

//2-2
$x = 20;
$y = 40;
$kei = $x + $y;
$heikin = ($x + $y) / 2;
echo "xの値は $x です。\n";
echo "yの値は $y です。\n";
echo "合計は $kei です。\n";
echo "平均は $heikin です。\n";

//2-3
$x = 20.5;
$y = 40.5;
$kei = $x + $y;
$heikin = ($x + $y) / 2;
echo "xの値は $x です。\n";
echo "yの値は $y です。\n";
echo "合計は $kei です。\n";
echo "平均は $heikin です。\n";

//2-4
$x = 20;
$y = 40;
$z = 50;
$kei = $x + $y + $z;
$heikin = ($x + $y + $z) / 3;
echo "xの値は $x です。\n";
echo "yの値は $y です。\n";
echo "zの値は $z です。\n";
echo "合計は $kei です。\n";
echo "平均は $heikin です。\n";

//2-5
$num = fgets(STDIN);
echo "$num と入力しましたね。";

//2-6
$num = fgets(STDIN);
$plusten = $num + 10;
$minusten = $num - 10;
echo "10を加えた値は $plusten です。\n";
echo "10を減じた値は $minusten です。\n";

//2-7
$num = fgets(STDIN);
$remove = $num / 10;
$surplus = $num % 10;
echo "最下位桁を除いた値は $remove です。\n";
echo "最下位桁は $surplus です。\n";

//2-8
$zissu1 = fgets(STDIN);
$zissu2 = fgets(STDIN);
$total = $zissu1 + $zissu2;
$heikin2 = $total / 2 ;
echo "xの値: $zissu1";
echo "yの値: $zissu2";
echo "合計は $total です。";
echo "平均は $heikin2 です。";

//2-9 三角形の面積を求める
$bottom = fgets(STDIN);
$height = fgets(STDIN);
$area = ( $bottom * $height ) / 2;
echo "三角形の面積を求めます。";
echo "底辺: $bottom";
echo "高さ: $height";
echo "面積は $area です。";

// //2-10 球体の表面積と体積を求める
$radius = fgets(STDIN);
$hyoumenseki = 4 * pi() * ($radius * $radius);
$taiseki = ( 4 / 3 ) * pi() * ($radius * $radius * $radius);
echo "球の表面積と体積を求めます。";
echo "半径: $radius";
echo "表面積は $hyoumenseki です。";
echo "体積は $taiseki です。\n";
//微妙に答えの小数点以下が違うのがなぜかわからない

//2-11
$sei = mt_rand(1, 9);
$fu = mt_rand(-9, -1);
$sei2keta = rand(10, 99);
echo "3個の乱数を生成しました。\n";
echo "1の正の整数: $sei \n";
echo "1の負の整数: $fu \n";
echo "2桁の正の整数: $sei2keta \n";



?>