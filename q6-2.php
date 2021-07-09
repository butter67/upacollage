<?php
//6-13 ◯
echo "要素数： $n";
$n = (int)fgets(STDIN);
$array = range(1, $n);
for ( $i = 0; $i < $n; $i++ ) {
  shuffle($array);
  echo "a[$i] = $array[$i]\n";
}
echo "要素をかき混ぜました。\n";
shuffle($array); 
for ( $i = 0; $i < $n; $i++ ) {
  echo "a[$i] = $array[$i]\n";
}

//6-14  ◯
echo "要素数：$n\n";
$n = fgets(STDIN);
$a = array();
$b = array();
for ( $i = 0; $i < $n; $i++ ) {
    echo "要素を$n 個入力してください：$num\n";
    $num = fgets(STDIN);
    $a[$i] = $num;
    echo "a[$i] = $num\n";
}
echo "配列aの全要素を逆順にbにコピーしました。\n";
$b = array_reverse($a);
for ( $i = 0; $i < $n; $i++ ) {
    echo "b[$i] = $b[$i]\n";
}

//6-15  × 惜しいような‥
// $mo = array("January","February","March","April","May","June","July","August","September","October","November","December");
// echo "英語の月名を入力してください。\n";
// echo "なお、先頭は大文字で、2文字目以降は小文字とします。\n";

// do {
//     do {
//     $month = mt_rand(0,11);
//     echo "$month\n";
//     } while ( $month == $last );
//     $last = $month;
//     // echo "$last\n";
//     $lastone = $last + 1;
//     // echo "$lastone\n";
//     // echo "$mo[$last]\n";
    
//     echo "$lastone 月:$an";
//     $an = (string)fgets(STDIN);
//     if ( strcmp($mo[$last], $an) ){
//     // if ( $an === $mo[$last] ) {
//         echo "正解です！もう一度？1...Yes/0...No\n";
//         $res = (int)fgets(STDIN);
//     } else {
//         echo "違います！Try again!\n";
//     }
// } while ( $res == 1 || $res == null );

//6-16 ×　上記問題が解けたらとけるでしょう






?>