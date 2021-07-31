<?php
echo "要素数: $youso\n";
$youso = (int)fgets(STDIN);
$a = [];
echo "$youso 個の要素を入力せよ。\n";
for ( $i = 0; $i < $youso; $i++ ) {
    $a[$i] =  (int)fgets(STDIN);
    echo "a[$i] : $a[$i]\n";
}
echo "探索する値:$n\n";
$n = (int)fgets(STDIN);
$keys = array_keys($a,$n);
// print_r($keys);
echo "一致する要素のインデックス:\n";
for ( $i = 0; $i < count($keys); $i++ ) {
    $res = $keys[$i];
    echo "$res\n";
}


?>