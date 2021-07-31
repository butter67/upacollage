<?php
echo "行列の行数:$gyou\n";
$gyou = (int)fgets(STDIN);
echo "行列の列数：$retusu\n";
$retusu = (int)fgets(STDIN);
$a = [];
 echo "各要素の値を入力せよ。\n";
  for ( $i = 0; $i < $gyou; $i++ ) {
     for ($j = 0; $j < $retusu; $j++ ) {
        echo "c[$i][$j]：$ten\n";
        $ten = (int)fgets(STDIN);
        $a[$i][$j] = $ten;
     } 
  }

  function aryClone2($a) {
      $c = [];
      for ( $i = 0; $i < count($a); $i++ ) {
        for ( $j = 0; $j < count($a[$i]); $j++ ) {
            $c[$i][$j] = $a[$i][$j];
        }
      }
     return $c;
  }
$clone = aryClone2($a);

  echo "行列A:\n";
    for ( $i = 0; $i < count($a); $i++ ) {
       for ( $j = 0; $j < count($a[$i]); $j++ ) {
          $ans = $a[$i][$j];
          echo "$ans  ";
      }
        echo "\n";
    }

  echo "行列Aの複製:\n";
    for ( $i = 0; $i < count($clone); $i++ ) {
       for ( $j = 0; $j < count($clone[$i]); $j++ ) {
          $ans = $clone[$i][$j];
          echo "$ans  ";
      }
        echo "\n";
    }

?>