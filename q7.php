<?php
//7-1
// function back($n) {
//  if ( $n < 0 ) {
     
//  }

// }
// $n = (int)fgets(STDIN);

//7-2  ◯
// echo "整数を３つ入力してください。";
// $a = (int)fgets(STDIN);
// $b = (int)fgets(STDIN);
// $c = (int)fgets(STDIN);
// echo "整数a: $a\n";
// echo "整数b: $b\n";
// echo "整数c: $c\n";
// function mini($a,$b,$c) {
//     $res = min($a,$b,$c);
//     echo "最小値は$res です。\n";
// }
// mini($a,$b,$c);

//7-3 ×　3-16同様中央値を求めるプログラム。そこが解けないと解けない
// echo "整数を３つ入力してください。";
// $a = (int)fgets(STDIN);
// $b = (int)fgets(STDIN);
// $c = (int)fgets(STDIN);
// echo "整数a: $a\n";
// echo "整数b: $b\n";
// echo "整数c: $c\n";
// function mini($a,$b,$c) {
//     $res = min($a,$b,$c);
//     echo "最小値は$res です。\n";
// }
// mini($a,$b,$c);

//7-4 ◯
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

//7-5 ◎
// function greeting(){
//     echo "こんにちは！\n";
// }
// greeting();
// greeting();
// greeting();


//7-6 ◯
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

//7-7 ◯
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

//7-8 ◯
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

//7-9 ×飛ばし
// function numBack() {
//     do {
//         echo "正の整数値：$n";
//         $n = (int)fgets(STDIN);
//     } while ( $n <= 0 );
//     return $n;
// }
// numBack();

//7-10 ×飛ばし
// function retry() {
//  do {
//      echo "もう一度？ Yes...1/No...0\n";
//      $an = fgets(STDIN);
//  } while ( $an != 0 && $an != 1 );
//  return $an;
// }
// function anzan() {
//     echo "暗算力トレーニング！";
//     $x = mt_rand(100,999);
//     $y = mt_rand(100,999);
//     $z = mt_rand(100,999);
// }

?>