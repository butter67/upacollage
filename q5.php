<?php
//5-1 ◯
$oct = octdec(12);
$hex = hexdec(12);
echo "8進数の12は10進数で$oct です。";
echo "10進数の12は10進数で12 です。";
echo "16進数の12は10進数で$hex です。";

//5-2 ◯
$num = 27;
$dec = decoct($num);
$dechx = dechex($num);
echo "8進数では$dec です。";
echo "16進数では$dechx です。";


//5-3 float double △よく意味がわからない
echo "変数xはfloat型で、yはdouble型です。";
echo "x : $x";
$x = (float)fgets(STDIN);
echo "y : $y";
$y = (double)fgets(STDIN);

//5-4 △
$b1 = true;
$b2 = false;
echo "b1 = $b1\n";
echo "b2 = $b2";

//5-5 ◯
$x = 7;
$y = 8;
$z = 10;
$heikin = ($x + $y + $z) / 3;
echo "$heikin";

//5-6 △
$x = 7;
$y = 8;
$z = 10;
$heikin = ($x + $y + $z) / 3;
echo "$heikin";

//5-7 ◯
$a = (int)10.0;
echo "a = $a ";

//5-8 ×

//5-9 ×

//5-10 ◯
echo '"ABC\n"';


?>