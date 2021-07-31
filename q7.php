<?php
//7-1 ◯
// function signOf($n) {
//     if ( $n > 0 ) {
//         return 1;
//     } elseif ($n < 0 ) {
//         return -1;
//     } else {
//         return 0;
//     }
// }

// $n = (int)fgets(STDIN);
// $ans = signOf($n);
// echo "signOf(x)は$ans です。";

// //7-2  ◯
// echo "整数を３つ入力してください。";
// $a = (int)fgets(STDIN);
// $b = (int)fgets(STDIN);
// $c = (int)fgets(STDIN);
// echo "整数a: $a\n";
// echo "整数b: $b\n";
// echo "整数c: $c\n";
// function mini($a,$b,$c) {
//     $res = min($a,$b,$c);
//     return $res;
// }

// $ans = mini($a,$b,$c);
// echo "最小値は$ans です。\n";

//7-3 ◯
// echo "整数a : $a\n";
// $a = fgets(STDIN);
// echo "整数b : $b\n";
// $b = fgets(STDIN);
// echo "整数c : $c\n";
// $c = fgets(STDIN);
// $mid = $a;

// function getMiddle($a,$b,$c) {
//  if ( $a > $b ) {
//   if ( $b > $c ) {
//     $temp = $a;
//     $mid = $b;
//     $a = $temp;
//   } elseif ( $c > $b ) {
//     $temp = $a;
//     $mid = $c;
//     $a = $temp;
//   }
// } elseif ( $a < $b ) {
//   if ( $a > $c ) {
//     $mid = $a;
//   } elseif ( $a < $c ) {
//     $temp = $a;
//     $mid = $c;
//     $a = $temp;
//   }
// } elseif ( $b < $c ) {
//   if ( $a < $b ) {
//     $temp = $a;
//     $mid = $b;
//     $a = $temp;
//   } 
// }
//  return $mid;
// }

// $ans = getMiddle($a,$b,$c);
// echo "中央値は$ans です。\n";



// //7-4 ◯
// function sumup($x) {
//     $sum = 0;
//     for ( $i = 1; $i <= $x; $i++ ) {
//         $sum = $sum + $i;
//     }  
//     echo "1から$x までの和は$sum です。";
// }
//     do {
//         echo "1からxまでの和を求めます。";
//         echo "xの値：$x";
//         $x = (int)fgets(STDIN);
//     } while ( $x <= 0 );

// sumup($x);

// //7-5 ◎
// function greeting(){
//     echo "こんにちは！\n";
// }
// greeting();
// greeting();
// greeting();


// //7-6 ◯
// function guessSeasons($month) {
//    switch ($month) {
//     case 3;
//     case 4;
//     case 5;
//      echo "その月の季節は春です。";
//      break;
//     case 6;
//     case 7;
//     case 8;
//      echo "その月の季節は夏です。";
//      break;
//     case 9;
//     case 10;
//     case 11;
//      echo "その月の季節は秋です。";
//      break;
//     case 12;
//     case 1;
//     case 2;
//      echo "その月の季節は冬です。";
//      break;
//   }
// }

// do {
//     echo "何月ですか（1~12）: $month";
//     $month = (int)fgets(STDIN);
// } while ( $month < 1 || $month > 12  );
// guessSeasons($month);

// //7-7 ◯
// function triangle($dan) {
// echo "段数は$dan";
//  for ( $i = 1; $i <= $dan; $i++) {
//     for ( $j = 1; $j <= $i; $j++ ) {
//         echo "*";
//     }
//     echo "\n";
//  } 
// }
// echo "左下直角の二等辺三角形を表示します。";
// $dan = fgets(STDIN);
// triangle($dan);

// //7-8 ◯
// function randm($a,$b){
//     echo "乱数を生成します。";
//     echo "下限値：$a\n";
//     echo "上限値：$b\n";
//     $res = mt_rand($a,$b);
//     echo "乱数の中身：$res\n";
//     if ( $b < $a ) {
//         echo "生成した乱数は$a です。\n";
//     } else {
//         echo "生成した乱数は$res です。\n";
//     }
// }
// $a = (int)fgets(STDIN);
// $b = (int)fgets(STDIN);
// randm($a,$b);

//7-9 △
// function readPlusInt($n) {
//     do {
//         $n = (int)fgets(STDIN);
//     } while ( $n <= 0 );
//     return $n;
// }
// $ans = readPlusInt($n);
// echo "正の整数値：$ans";
//  do {
//     //  $ans = readPlusInt($n);
//      echo "逆から読むと\n";
//      while ( $ans > 0 ) {
//          $gya = $ans % 10;
//          $ans = $ans / 10;
//          echo "$gya";
//      }
//      echo "です。\n";
//      echo "もう一度？ Yes...1/No...0";
//      $x = (int)fgets(STDIN);
//  } while ( $x == 1);

//7-10 ×飛ばし

echo "乱数の生成確認:\n";
 $x = mt_rand(100,999);
 print_r($x);


    echo "暗算力トレーニング！";
    do {
        $x = mt_rand(100,999);
        $y = mt_rand(100,999);
        $z = mt_rand(100,999);
        $ptt = 4;

        switch($ptt) {
            case 0 :
               $kotae = $x + $y + $z;
            break;
            case 1 :
               $kotae = $x + $y - $z;
            break;
            case 2 :
               $kotae = $x - $y + $z;
            break;
            case 3 :
               $kotae = $x - $y - $z;
            break;
        }
        while (true) {
            if ( $ptt < 2 ) {
                echo "x + ";
            } else {
                echo "x - ";
            }
            if ( $ptt % 2 == 0 ) {
                echo "y + ";
            } else {
                echo "y - ";
            }
            echo "z = ";
            $k = (int)fgets(STDIN);
            if ( $k == $kotae ) {
             break;
             echo "違いますよ！\n";
            }
            
        } 
        echo "もう一度？ Yes...1/No...0\n";
            $an = (int)fgets(STDIN);
        

    } while ( $an != 0 && $an != 1 );
    
    


?>