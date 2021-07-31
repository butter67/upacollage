<?php
// //4-20 ◯
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

// //4-21 ◯
// echo "正方形を表示します。";
// $dan = fgets(STDIN);
// echo "段数は:$dan";
// for ( $i = 1; $i <= $dan; $i++) {
//     for ( $j = 1; $j <= $dan; $j++ ) {
//         echo "*";
//     }
//     echo "\n";
// }

// //4-22 ◯
// echo "左下直角の二等辺三角形を表示します。";
// $dan = fgets(STDIN);
// echo "段数は$dan";
// for ( $i = 1; $i <= $dan; $i++) {
//     for ( $j = 1; $j <= $i; $j++ ) {
//         echo "*";
//     }
//     echo "\n";
// } 


// echo "左上直角の二等辺三角形を表示します。";
// $dan = fgets(STDIN);
// echo "段数は$dan";
// for ( $i = 1; $i <= $dan; $i++) {
//     for ( $j = 1; $j <= $dan - $i + 1; $j++ ) {
//         echo "*";
//     }
//     echo "\n";
// } 

// //4-23 　◯
// echo "ピラミッドを表示します\n";
// echo "段数は$dan\n";
// $dan = (int)fgets(STDIN);
// for ( $i = 1; $i <= $dan; $i++ ) { 
//     echo "\n";
//     for ( $j = 1; $j <= $dan - $i; $j++){
//         echo " ";
//     }
//     for ( $j = 1; $j <= 2 * $i - 1; $j++ ) {
//         echo "*";
//     }
// }


// //4-24 ◯
// echo "数字ピラミッドを表示します\n";
// echo "段数は$dan\n";
// $dan = (int)fgets(STDIN);
// for ( $i = 1; $i <= $dan; $i++ ) {
//     echo "\n";
//     for ( $j = 1; $j <= $dan - $i; $j++){
//         echo " ";
//     }
//     for ( $j = 1; $j <= 2 * $i - 1; $j++ ) {
//         $res = $i % 10;
//         echo "$res";
//     }
// }

// //4-25 △動いたけど理解してない
// do {
//     echo "2以上の整数値：$num";
//     $num = (int)fgets(STDIN);
// } while ( $num < 2 );
// for ( $i = 2; $i < $num; $i++ ) {
//     if( $num % $i == 0 ) {
//     break;
//     } 
//    }
//     if ( $num == $i ) {
//         echo "それは素数です。";
//     } else {
//         echo "それは素数ではありません。";
//     }


// //4-26 ◯
// echo "整数を加算します。";
// echo "何個加算しますか：$n";
// $n = (int)fgets(STDIN);

// $sum = 0;
// for ( $i = 0; $i < $n; $i++ ) {
//     echo "整数（0で終了）：$num";
//     $num = (int)fgets(STDIN);
//     if ( $num == 0 ) {
//     break;
//     }
//     $sum = $sum + $num;
//     $ave = $sum / $n;
//         // echo "合計$sum";
// }
// echo "合計は$sum です。";
// echo "平均は$ave です。";

// //4-27 ◯
// echo "整数を加算します。";
// echo "何個加算しますか：$n";
// $n = (int)fgets(STDIN);

// $sum = 0;
// for ( $i = 0; $i < $n; $i++ ) {
//     echo "整数（0で終了）：$num";
//     $num = (int)fgets(STDIN);
//     if ( $sum + $num > 1000 ) {
//         echo "合計が1000を超えました。";
//         echo "最後の数値は無視します。";
//         break;
//     }
//     $sum = $sum + $num;
//     $ave = $sum / $n;
// }
// echo "合計は$sum です。";
// echo "平均は$ave です。";

// //4-28 △あってるか？
// echo "整数を加算します。";
// echo "何個加算しますか：$n";
// $n = (int)fgets(STDIN);

// $sum = 0;
// $count = 0;
// for ( $i = 0; $i < $n; $i++ ) {
//     $num = (int)fgets(STDIN);
//     if ( $num < 0 ){
//         echo "負の数は加算しません。";
//         continue;
//     }
//     $sum = $sum + $num;
//     $count++;
//     // $sum += $num;
// } 
//  echo "合計は$sum です。";
//  if ( $count != 0 ) {
//      $hei = $sum / $count;
//      echo "平均は$hei です。";
//  }

//4-29　◯要レビュー
echo "整数を加算します\n";
$sum = 0;
for ( $i = 1; $i <= 10; $i++ ) {
    echo "第$i グループ\n";
    for( $j = 0; $j < 5; $j++ ) {
        echo "整数：$n\n";
        $n = (int)fgets(STDIN);
        if ( $n == 9999 ) {
        break 2;
        } elseif ( $n == 8888 ) {
        break;
        }
        $sum += $n;
    }  
    
}
echo "合計は$sum です。\n" ;

// //4-30 ◯
// $max = 6;
// $chance = $max;
// $no = mt_rand(0,99);
// echo "$no\n";
// echo "数当てゲーム開始！";
// echo "0~99の数を当ててください。";
// do {
//     echo "残り$chance 回。いくつかな\n";
//     $num = fgets(STDIN);
//     if ( $num < $no ) {
//         echo "もっと大きな数字だよ！\n";
//     } elseif ( $num > $no ) {
//         echo "もっと小さな数字だよ！\n";
//     }
//     $chance--;
// } while ( $num != $no || $chance < 0 );
// if ( $num == $no ) {
//     $res = $max - $chance;
//     echo "正解！$res 回で当たりましたね！\n";
// } else {
//     echo "正解は$no でした！\n";
// }



?>

