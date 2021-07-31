<?php
// //6-17 △これでいいのかわからない
// $array = ['apple', 'orange', 'lemon'];
// print_r($array);
// foreach($array as $value){
//  echo $value;
//  echo '
// ';
// }

//6-18
echo "4行3列の行列と3行4列の行列の積を求める\n";
$four3 = [];
$three4 = [];
$a = [];
echo "行列aの要素の値を入力せよ。\n";
for ( $i = 0; $i < 4; $i++ ) {
    $a[$i] = $i;
     for ( $j = 0; $j < 3; $j++ ) {
        echo "要素$i 個目\n";                     
        $a[$j] = (int)fgets(STDIN);
        // $a[$i] = $i;
        // $a[$i] = $num;
        // $num = (int)fgets(STDIN);
        // $a[$j] = $num;
        // $num = fgets(STDIN);
        // echo "a[$i][$j] = $num\n";
         array_push($four3,$a);
         
   }
    // $a = [];
    // echo "要素$i 個目\n";                     
    // $a[$i] = (int)fgets(STDIN);
    // for ( $j = 0; $j < 3; $j++ ) {
    //     $a[$i] = $i;
    //     $a[$i] = $num;
    //     $num = (int)fgets(STDIN);
    //     // $a[$j] = $num;
    //     $num = fgets(STDIN);
    //     echo "a[$i][$j] = $num\n";
   // }
       
    
}

print_r($four3);

//6-19
// $nin = 6;
// $people = [];
// $a = [10,20];
// $b = [30,40];
// $c = [50,60];
// $d = [70,80]; 
// $e = [90,100]; 
// $f = [110,120]; 


// $sumStudent = array();
// $sumSubject = array();
// echo "$nin 人の国語・数学の点数を入力せよ。\n";
//  for ( $i = 0; $i < $nin; $i++ ) {
//      $ban = $i + 1;
//      echo "$ban 番‥国語：$kokugo\n";
//      $kokugo = (int)fgets(STDIN);
//      $ten[][] = $kokugo;
//      echo "\n数学：$sugaku\n";
//      $sugaku = (int)fgets(STDIN);
     
//  }

?>