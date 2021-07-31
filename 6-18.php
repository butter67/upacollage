<?php
echo "4行3列の行列と3行4列の行列の積を求める\n";
$a = [];
$b = [];
$c = [];
echo "行列aの要素の値を入力せよ。\n";
for ( $i = 0; $i < 4; $i++ ) {
     for ( $j = 0; $j < 3; $j++ ) {
        echo "要素$i 個目\n";
        $num = (int)fgets(STDIN);             
        $a[$i][$j] = $num;
        echo "a[$i][$j] = $num\n";
   }     
}
echo "行列bの要素の値を入力せよ。\n";
for ( $i = 0; $i < 3; $i++ ) {
     for ( $j = 0; $j < 4; $j++ ) {
        echo "要素$i 個目\n";
        $num = (int)fgets(STDIN);             
        $b[$i][$j] = $num;
        echo "b[$i][$j] = $num\n";
   }     
}
// ここ以下の計算がおかしい
for ( $i = 0; $i < 4; $i++ ) {
    for ( $j = 0; $j < 4; $j++ ) {
        $c[$i][$j] = 0;
       for ( $k = 0; $k < 3; $k++ ) {
           $c[$i][$j] += $a[$i][$k] * $b[$k][$j];
       }
    } 
}
echo "行列aとbの積\n";
for ( $i = 0; $i < 4; $i++ ) {
    echo "\n";
    for ( $j = 0; $j < 4; $j++ ) {
        $num = $c[$i][$j];
        echo "$num ";
    } 
}

// echo "以下Aの配列\n";
// print_r($a);
// echo "以下Bの配列\n";
// print_r($b);
// echo "以下Cの配列\n";
// print_r($c);
?>