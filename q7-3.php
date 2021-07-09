<?php
//7-21 ×難しい。。
// $a = array();
// $b = array();
// function rep () {
//     echo "配列Aに入れる要素数を入力してください。\n";
//     $youso = (int)fgets(STDIN);
//     echo "要素数a：$youso\n";
//     echo "$youso 個数字を入力してください。\n";

//     for ( $i = 0; $i < $youso; $i++ ) {
//      $num = fgets(STDIN);
//      $a[$i] = $num;
//      echo "a[$i] = $num\n";
//   }

//     echo "配列Bに入れる要素数を入力してください。\n";
//     $yousob = (int)fgets(STDIN);
//     echo "要素数a：$yousob\n";
//     echo "$yousob 個数字を入力してください。\n";

//     for ( $j = 0; $j < $yousob; $j++ ) {
//      $num = fgets(STDIN);
//      $b[$j] = $num;
//      echo "b[$j] = $num\n";
//   }

//   $res = array_replace($a,$b);
//   var_dump($res);

// }
// rep();

//-7-22  ◯
function arr () {
    echo "配列に入れる要素数を入力してください。\n";
    $youso = (int)fgets(STDIN);
    echo "要素数：$youso\n";
    echo "$youso 個数字を入力してください。\n";

    $main = array();
    for ( $i = 0; $i < $youso; $i++ ) {
     $num = fgets(STDIN);
     $main[$i] = $num;
     echo "a[$i] = $num\n";
  }
  return $main;
}
$res = arr();
// print_r($res);
$cop = $res;
print_r($res);
print_r($cop);

//7-23

//7-24  ◯　ここから本来の問題の意図にそった答えができていると思う
function arrayRmvOf($arr,$index,$youso) {
    $res = array_search($index,$arr); 
    echo "resの中身:$res\n";
    unset($arr[$res]);
    $arr = array_values($arr);
    $youso = $youso - 1;
     echo "削除後を表示します。\n";
     for ( $i = 0; $i < $youso; $i++ ) {
      echo "a[$i] = $arr[$i]";
     }
     return $arr;
}

 echo "配列に入れる要素数を入力してください。\n";
    $youso = (int)fgets(STDIN);
    echo "要素数：$youso\n";
    echo "$youso 個数字を入力してください。\n";
    $arr = array();

    for ( $i = 0; $i < $youso; $i++ ) {
     $num = fgets(STDIN);
     $arr[$i] = $num;
     echo "a[$i] = $num\n";
  } 

 echo "削除したい要素を入力してください。\n";
    $index = (int)fgets(STDIN);
    echo "削除する要素のインデックス: $index\n";
 arrayRmvOf($arr,$index,$youso);


//7-25　×7-19の応用でそこが出来次第できそう　できそうで詰まった
function arrayRmvOfN($arr,$index,$youso,$kosu) {
    $res = array_search($index,$arr); 
    echo "削除する開始する要素のインデックス:$res\n";
    unset($arr[$res]);
    $arr = array_values($arr);
    $youso = $youso - 1;
     echo "削除後を表示します。\n";
     for ( $i = 0; $i < $youso; $i++ ) {
      echo "a[$i] = $arr[$i]";
     }
     return $arr;
}

  echo "配列に入れる要素数を入力してください。\n";
    $youso = (int)fgets(STDIN);
    echo "要素数：$youso\n";
    echo "$youso 個数字を入力してください。\n";
    $arr = array();

    for ( $i = 0; $i < $youso; $i++ ) {
     $num = fgets(STDIN);
     $arr[$i] = $num;
     echo "a[$i] = $num\n";
  } 

  echo "削除したい要素を入力してください。\n";
    $index = (int)fgets(STDIN);
  echo "削除したい要素をの個数を入力してください。\n";
    $kosu = (int)fgets(STDIN);
  echo "削除する開始する要素の値: $index\n";
 arrayRmvOfN($arr,$index,$youso,$kosu);


//7-26  ◯
function arrayInsOf ($arr,$youso) {
    echo "挿入したい要素の値を入力してください。\n";
    $newatai = (int)fgets(STDIN);
    echo "挿入したい要素のインデックス入力してください。\n";
    $index = (int)fgets(STDIN);
    echo "挿入する要素の値：$newatai インデックス：$index\n";
    array_splice($arr,$index,0,$newatai);
    $youso = $youso + 1;
     echo "追加後を表示します。\n";
     for ( $i = 0; $i < $youso; $i++ ) {
      echo "a[$i] = $arr[$i]\n";
     }
     return $arr;
}

    echo "配列に入れる要素数を入力してください。\n";
    $youso = (int)fgets(STDIN);
    echo "要素数：$youso\n";
    echo "$youso 個数字を入力してください。\n";
    $arr = array();

    for ( $i = 0; $i < $youso; $i++ ) {
     $num = fgets(STDIN);
     $arr[$i] = $num;
     echo "a[$i] = $num\n";
  }
arrayInsOf($arr,$youso);

//7-27 わからない‥
// $arrx = [ [1,2,3,],[4,5,6] ];
// $arry = [ [6,3,4],[5,1,2] ];
// $arrc = [[],[]];
// print_r($arrx);
// print_r($arry);
// print_r($arrc);

// function addMatrix($arrx,$arry,$arrc) {
//   $xr = count($arrx);
//   $yr = count($arry);
//   $zr = count($arrc);
//  if ( $xr != $yr || $yr != $zr ) {
//    return false;
//  } else {
//    return true;
//  }
// }
// $res = addMatrix($arrx,$arry,$arrc);
// echo "$res\n";

//7-28
//7-29

//7-30 ◯
function mina($x,$y) {
  if ( $x < $y ) {
    $an = $x;
    return $an;
  } else {
    $an = $y;
    return $an;
  }
}

function minb($x,$y,$z) {
  $min = $x;
  if ( $min > $y ) {
    $temp = $min;
    $min = $y;
    $x = $temp;
  } elseif ( $min > $z ) {
    $temp = $min;
    $min = $z;
    $x = $temp;
  }
  return $min;
}
 function minc($a) {
   $res = min($a);
   return "$res";
 }

echo "xの値: $x";
$x= (int)fgets(STDIN);
echo "yの値: $y";
$y= (int)fgets(STDIN);
echo "zの値: $z";
$z= (int)fgets(STDIN);
$a = array();

    echo "配列aに入れる要素数を入力してください。\n";
    $youso = (int)fgets(STDIN);
    echo "配列aの要素数：$youso\n";
    echo "$youso 個数字を入力してください。\n";
    for ( $i = 0; $i < $youso; $i++ ) {
     $num = fgets(STDIN);
     $a[$i] = $num;
     echo "a[$i] = $num\n";
  }

// print_r($a);
$a1 = mina($x,$y);
$a2 = minb($x,$y,$z);
$a3 = minc($a);

echo "x,yの最小値は$a1 です。\n";
echo "x,y,zの最小値は$a2 です。\n";
echo "配列aの最小値は$a3 です。\n";

//7-31 ◯
function int($a) {
  $a = abs($a);
  return $a;
}
function float($b) {
  $b = abs($b);
  return $b;
}
function double($c) {
  $c = abs($c);
  return $c;
}

echo "int型整数aの値：$a";
  $a = (int)fgets(STDIN);
 echo "float型整数bの値：$b";
  $b = (float)fgets(STDIN);
  echo "double型整数cの値：$c";
  $c = (double)fgets(STDIN);

$ans = int($a);
$ansb = float($b);
$ansc = double($c);

echo "aの絶対値は$ans です。";
echo "bの絶対値は$ansb です。";
echo "cの絶対値は$ansc です。";


//7-32


?>