<?php
//6-17 △これでいいのかわからない
$array = ['apple', 'orange', 'lemon'];
print_r($array);
foreach($array as $value){
 echo $value;
 echo '
';
}

//6-18

//6-19
$nin = 6;
$point = array([$nin],[2]);
print_r($point);
$sumStudent = array();
$sumSubject = array();
echo "$nin 人の国語・数学の点数を入力せよ。\n";
 for ( $i = 0; $i < $nin; $i++ ) {
     $ban = $i + 1;
     echo "$ban 番‥国語：$kokugo\n";
     $kokugo = (int)fgets(STDIN);
     $ten[][] = $kokugo;
     echo "\n数学：$sugaku\n";
     $sugaku = (int)fgets(STDIN);
     
 }

?>