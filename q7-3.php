<?php
//7-21 ◯
$arr = [];
$brr = [];

    echo "配列Aに入れる要素数を入力してください。\n";
    $youso = (int)fgets(STDIN);
    echo "要素数a：$youso\n";
    echo "$youso 個数字を入力してください。\n";
    for ( $i = 0; $i < $youso; $i++ ) {
      $arr[$i] = (int)fgets(STDIN);
      $na = $arr[$i];
      echo "a[$i] = $na\n";
  }


    echo "配列Bに入れる要素数を入力してください。\n";
    $yousob = (int)fgets(STDIN);
    echo "要素数a：$yousob\n";
    echo "$yousob 個数字を入力してください。\n";
    for ( $i = 0; $i < $yousob; $i++ ) {
      $brr[$i] = (int)fgets(STDIN);
      $nab = $brr[$i];
      echo "a[$i] = $nab\n";
    }
    print_r($arr);
    print_r($brr);

    $ar = count($arr);
    $br = count($brr);
    if ( $ar < $br ) {
      $n = $br;
    } else {
      $n = $a;
     }
    for ( $i = 0; $i < $n; $i++ ) {
      $tmp = [];
      $tmp[$i] = $arr[$i];
      $arr[$i] = $brr[$i];
      $brr[$i] = $tmp[$i];
    }
    echo "配列aの要素とbの要素を交換しました。\n";
    print_r($arr);
    print_r($brr);


//7-22  ◯
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


//7-25　 ◯
function aryRmvN($arr,$n,$youso,$deln) {
    echo "削除する要素のインデックス: $n\n";
    $res = array_search($n,$arr); 
    echo "resの中身:$res\n";
    echo "削除したい要素の個数:$deln";
    $deln = (int)fgets(STDIN);
    array_splice($arr,$res,$deln);
    $youso = $youso - $deln;
 
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
 $n = (int)fgets(STDIN);


$ans = aryRmvN($arr,$n,$youso,$deln);
echo "削除後を表示します。\n";
$youso -= $deln;
 for ( $i = 0; $i < $youso; $i++ ) {
  echo "a[$i] = $ans[$i]\n";
  }
echo "$ans";


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

//7-27 
$arrx = [ [1,2,3],[4,5,6] ];
$arry = [ [6,3,4],[5,1,2] ];
$arrc = [[],[]];
print_r($arrx);
print_r($arry);
print_r($arrc);

// function addMatrix($arrx,$arry,$arrc) {
  $xr = count($arrx);
  $yr = count($arry);
  $zr = count($arrc);
  print_r($xr);
  print_r($yr);
  print_r($zr);
 if ( $xr != $yr || $yr != $zr ) {
   return false;
  for ( $i = 0; $i < count($arrx); $i++ ) {
    for ( $j = 0; $j < count($arrx[$i]); $j++ ) {
      $arrc[$i][$j] = $arrx[$i][$j] + $arry[$i][$j];
      $ans = $arrc[$i][$j];
      echo "$ans \n";
    }
  } 
 }
 echo "arrx の中身：\n";
 print_r($arrx);
 echo "arry の中身：\n";
print_r($arry);
echo "arrc の中身：\n";
print_r($arrc);
//  return $arrc;
// }

// $res = addMatrix($arrx,$arry,$arrc);
// for ( $i = 0; $i < count($res); $i++ ) {
//   for ( $j = 0; $j < count($res[$i]); $j++ )
//   echo "行列c :\n";
//   echo "$res[$i][$j]\n";
// }
// echo "$res\n";

//7-28 ◯
//別ファイル(7-28.php)に記述

//7-29
//別ファイル(7-29.php)に記述

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