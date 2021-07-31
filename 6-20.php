<?php
echo "デコボコな2次元配列を作ります。\n";
echo "行数:$gyou\n";
$gyou = (int)fgets(STDIN);
$arr = [];
for ( $i = 0; $i < $gyou; $i++ ) {
    echo "$i 行目の列数：$retusu\n";
    $retusu = (int)fgets(STDIN);
  for ($j = 0; $j < $retusu; $j++ ) {
      echo "各要素の値を入力せよ。\n";
      echo "c[$i][$j]：$ten\n";
      $ten = (int)fgets(STDIN);
      $arr[$i][$j] = $ten;
  } 
}
echo "各要素の値は次のようになっています。\n";
for ( $i = 0; $i < count($arr); $i++ ) {
    for ( $j = 0; $j < count($arr[$i]); $j++ ) {
        $ans = $arr[$i][$j];
        echo "$ans  ";
    }
    echo "\n";
}

// print_r($arr);



?>