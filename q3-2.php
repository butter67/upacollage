<?php
 //3-11　◯
 $num = fgets(STDIN);
 echo "点数: $num\n";
 if ( $num >= 0 && $num <= 59 ) {
     echo "不可";
  } elseif ( $num >= 60 && $num <= 69 )  {
    echo "可";
  } elseif  ( $num >= 70 && $num <= 79 )  {
    echo "良";
  } elseif ( $num >= 80 && $num <= 100 ) {
      echo "優";
  };
   
  
//3-12　◯
$a = 25.7;
$b = 15.3;
echo "実数a: $a\n"; 
echo "実数b: $b\n"; 
if ($a > $b) {
  echo "大きい方の値は$a です。";
};


//3-13　◯
$a = 10;
$b = 40;
echo "整数A: $a\n"; 
echo "整数B: $b\n";
if ( $a >= $b ) {
  $res = $a - $b;
  echo "それらの差は$res です。\n";
} elseif ( $a <= $b ) {
  $res = $b - $a;
  echo "それらの差は$res です。\n";
};
     

//3-14　◯
$a = 16;
$b = 3;
echo "整数A: $a\n"; 
echo "整数B: $b\n";
$res = $a >= $b ? $a - $b : $b - $a;
if ( $res < 10 ) {
  echo "それらの差は10以下です。";
} else {
  echo "それらの差は10以上です。";
}


//3-15 ◯
$a = fgets(STDIN);
$b = fgets(STDIN);
$c = fgets(STDIN);
echo "整数a : $a";
echo "整数b : $b";
echo "整数c : $c";
$min = $a;
if ( $min > $b ) {
  $temp = $min;
  $min = $b;
  $a = $temp;
} 
if ( $min > $c ) {
  $temp = $min;
  $min = $c;
  $a = $temp;
}
echo "最小値は$min です。";

//3-16 
$a = fgets(STDIN);
$b = fgets(STDIN);
$c = fgets(STDIN);
echo "整数a : $a";
echo "整数b : $b";
echo "整数c : $c";

//3-17
$a = 100;
$b = 20;
echo "整数a : $a\n";
echo "整数b : $b\n";
$min = $a;
$max = $b;
if ( $min > $max ) {
  $min = $b;
  $max = $a;
  echo "小さい方の値は$min です。";
  echo "大きい方の値は$max です。";
} elseif ( $min === $max ) {
  echo "二つは同じ数値です。";
} else {
  echo "小さい方の値は$min です。";
  echo "大きい方の値は$max です。";
}

//3-18
$a = 12;
$b = 7;
echo "整数a : $a\n";
echo "整数b : $b\n";
echo "a>=bとなるようにソートしました。";
if ( $a < $b ) {
  $temp = $a;
  $a = $b;
  $b = $temp;
  echo "変数aは$a です。";
  echo "変数bは$b です。";
} else {
  echo "変数aは$a です。";
  echo "変数bは$b です。";
}

//3-19
$a = 53;
$b = 35;
$c = 42;
echo "整数a : $a\n";
echo "整数b : $b\n";
echo "整数c : $c\n";
echo "a<=b<=cとなるようにソートしました。";
if ( $a > $b ) {
   $temp = $a;
   $a = $b;
   $b = $temp;
}
if ( $b > $c ) {
   $temp = $b;
   $b = $c;
   $c = $temp;
}

  echo "変数aは$a です。";
  echo "変数bは$b です。";
  echo "変数cは$c です。";

  //3-20
  $num = mt_rand(0,2);
  switch ($num) {
    case 0:
      echo "コンピューターが生成した手: グー\n";
      break;
      
    case 1:
      echo "コンピューターが生成した手: チョキ\n";
      break;
      
    case 3:
      echo "コンピューターが生成した手: パー\n";
      break;
  }

  //3-21
 $month = mt_rand(1,12);
  switch ($month) {
    case 3;
    case 4;
    case 5;
     echo "何月ですか: $month\n";
     echo "春";
     break;
    case 6;
    case 7;
    case 8;
     echo "何月ですか: $month\n";
     echo "夏";
     break;
    case 9;
    case 10;
    case 11;
     echo "何月ですか: $month\n";
     echo "秋";
     break;
    case 12;
    case 1;
    case 2;
     echo "何月ですか: $month\n";
     echo "冬";
     break;
  }
?>