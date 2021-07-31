<?php

echo "行列の行数:$gyou\n";
$gyou = (int)fgets(STDIN);
echo "行列の列数：$retusu\n";
$retusu = (int)fgets(STDIN);
$a = [];
$b = [];
    echo "各要素の値を入力せよ。\n";
    for ( $i = 0; $i < $gyou; $i++ ) {
     for ($j = 0; $j < $retusu; $j++ ) {
        echo "c[$i][$j]：$ten\n";
        $ten = (int)fgets(STDIN);
        $a[$i][$j] = $ten;
     } 
  }
    echo "各要素の値を入力せよ。\n";
    for ( $i = 0; $i < $gyou; $i++ ) {
     for ($j = 0; $j < $retusu; $j++ ) {
        echo "c[$i][$j]：$ten\n";
        $ten = (int)fgets(STDIN);
        $b[$i][$j] = $ten;
     } 
  }

echo "和を数えます\n";
  function addMatrix($a,$b) {
    $c = [];
    for ( $i = 0; $i < count($a); $i++ ) {
        for ( $j = 0; $j < count($a[$i]); $j++ ) {
            $c[$i][$j] = $a[$i][$j] + $b[$i][$j];
        }
    }
    return $c;
  }
 $kei = addMatrix($a,$b);

echo "行列A:\n";
for ( $i = 0; $i < count($a); $i++ ) {
    for ( $j = 0; $j < count($a[$i]); $j++ ) {
        $ans = $a[$i][$j];
        echo "$ans  ";
    }
    echo "\n";
}

echo "行列B:\n";
for ( $i = 0; $i < count($b); $i++ ) {
    for ( $j = 0; $j < count($b[$i]); $j++ ) {
        $answ = $b[$i][$j];
        echo "$answ  ";
    }
    echo "\n";
}

echo "行列C:\n";
for ( $i = 0; $i < count($kei); $i++ ) {
    for ( $j = 0; $j < count($kei[$i]); $j++ ) {
        $answ = $kei[$i][$j];
        echo "$answ  ";
    }
    echo "\n";
}

?>