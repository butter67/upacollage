<?php
//4-20 ◯
// echo "季節を求めます。";
// do {
//     do {
//         echo "何月ですか？";
//         $month = fgets(STDIN);
//     } while ( $month < 1 || $month > 12 );
//     if ( $month >= 3 && $month <= 5 ) {
//         echo "それは春です。\n";
//     } elseif ( $month >= 6 && $month <= 8 ) {
//         echo "それは夏です。\n";
//     } elseif ( $month >= 9 && $month <= 11 ) {
//         echo "それは秋です。\n";
//     }  else  {
//         echo "それは冬です。\n";
//     } 
//     echo "もう一度？ 1..Yes/0..No";
//     $ans = fgets(STDIN);
// } while ( $ans == 1);

//4-21 ◯
// echo "正方形を表示します。";
// $dan = fgets(STDIN);
// echo "段数は:$dan";
// for ( $i = 1; $i <= $dan; $i++) {
//     for ( $j = 1; $j <= $dan; $j++ ) {
//         echo "*";
//     }
//     echo "\n";
// }

//4-22 ◯
// echo "左下直角の二等辺三角形を表示します。";
// $dan = fgets(STDIN);
// echo "段数は$dan";
// for ( $i = 1; $i <= $dan; $i++) {
//     for ( $j = 1; $j <= $i; $j++ ) {
//         echo "*";
//     }
//     echo "\n";
// } 

//4-23 ◯
// echo "左上直角の二等辺三角形を表示します。";
// $dan = fgets(STDIN);
// echo "段数は$dan";
// for ( $i = 1; $i <= $dan; $i++) {
//     for ( $j = 1; $j <= $dan - $i + 1; $j++ ) {
//         echo "*";
//     }
//     echo "\n";
// } 

//4-24 ×もう少しでできそう
// echo "数字ピラミッドを表示します";
// echo "段数は$dan";
// $dan = (int)fgets(STDIN);
// for ( $i = 1; $i <= $dan; $i++ ) {
//     for ( $j = 1; $j <= $dan; $j++){
//         echo "$dan\n";
//     }
// }

//4-25 ×
// do {
//     echo "2以上の整数値：$num";
//     $num = (int)fgets(STDIN);
// } while ( $num < 2 );
// for ( $i = 2; $i < $num; $i++ ) {
//     if( $num % $i == 0 ) {
//     break;
//     }
//     if ( $num == $i ) {
//         echo "それは素数です。";
//     }else {
//         "それは素数ではありません。";
//     }
// }

//4-26 ×わからない
// echo "整数を加算します。";
// echo "何個加算しますか：$num";
// $n = (int)fgets(STDIN);

// $sum = 0;
// for ( $i = 0; $i < $n; $i++ ) {
//     echo "整数（0で終了）：$num";
//     $num = (int)fgets(STDIN);
//     if ( $num == 0 ) {
//     break;
//     }
//     $sum = $sum + $num;
//     echo "合計$sum";
// }

//4-27 ×

//4-28

//4-29

//4-30 △超惜しい、回数判定が動いていない
// $max = 6;
// $chance = $max;
// $no = mt_rand(0,99);
// echo "$no\n";
// echo "数当てゲーム開始！";
// echo "0~99の数を当ててください。";
// do {
//     $left = $chance--;
//     echo "残り$left 回。いくつかな\n";
//     $num = fgets(STDIN);
//     if ( $num < $no ) {
//         echo "もっと大きな数字だよ！\n";
//     } else {
//         echo "もっと小さな数字だよ！\n";
//     }
// } while ( $num != $no || $left < 0 );
// if ( $num == $no ) {
//     $res = $max - $left;
//     echo "$res で当たりましたね！\n";
// } else {
//     echo "正解は$no でした！\n";
// }



?>

