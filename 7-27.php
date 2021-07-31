<?php
// 要レビュー
$a = [[1,2,3],[4,5,6]];
$b = [[6,3,4],[5,1,2]];
$c = [[0,0,0],[0,0,0]];

  echo "和を数えます\n";
  function addMatrix($a,$b,$c) {
      if( count($a) != count($b) || count($b) != count($c)) {
          return false;
          for (  $i = 0; $i < count($a); $i++ ) {
              if ( count($a[$i]) != count($b[$i]) || count($b[$i]) != count($c[$i]) ) {
                  return false;
                  for ( $i = 0; $i < count($a); $i++ ) {
                   for ( $j = 0; $j < count($a[$i]); $j++ ) {
                    $c[$i][$j] = $a[$i][$j] + $b[$i][$j];
                  }
                }
              }
          }
      }
    return $c;
  }
 $kei = addMatrix($a,$b,$c);

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