<?php
//7-11
//7-12
//7-13
//7-14

//7-15
function sumAll() {
     $youso = fgets(STDIN);
     echo "要素数：$youso";
     echo "$youso 個数字を入力してください。";

    $sum = 0;
    $arr = array();

    for ( $i = 0; $i < $youso; $i++ ) {
    $num = fgets(STDIN);
    $arr[$i] = $num;
    echo "a[$i] = $num";
  }
  $res = array_sum($arr);
  echo "全要素の合計は$res です。";
}
sumAll();

//7-16 ◯　がんばった！
echo "人数は：$nin\n";
$nin = (int)fgets(STDIN);

function addInfo($nin) {
    $height = array();
    $weight = array();
    for ( $i = 0; $i < $nin; $i++ ) {
        $num = $i + 1;
        echo "身長を入力してください。\n";
        $heig = (int)fgets(STDIN);
        echo "$num 番目の身長：$heig\n";
        $height[$i] = $heig;
        echo "体重を入力してください。\n";
        $weig = (int)fgets(STDIN);
        echo "$num 番目の体重：$weig\n";
        $weight[$i] = $weig;
    } 
    $minheight = min($height);
    $minweight = min($weight);
    return [$minheight,$minweight];
    
  }

   echo "$nin 人の身長と体重を入力せよ。\n";
$respo = addInfo($nin);
   echo "最も背が低い人の身長： $respo[0] cm\n";
   echo "最も痩せている人の体重： $respo[1] kg\n";


//7-17 △動くが問題の要望に最後までそっていない
function LinerSearch($youso,$dokonum) {

    $array = array();
    for ( $i = 0; $i < $youso; $i++) {
        $num = (int)fgets(STDIN);
        $array[$i] = $num;
        echo "a[$i] = $num\n";
     }

    echo "探す数値: $dokonum\n";
    $res = array_search($dokonum,$array); 
     if (in_array($dokonum, $array)) {
       echo "それはa[$res] にあります。\n";
      } else {
        echo "その数はありません。\n";
     }
    }
     echo "配列に入れる要素数を入力してください。";
     $youso = (int)fgets(STDIN);
     echo "探したい要素を入力してください。";
     $dokonum = (int)fgets(STDIN);
LinerSearch($youso,$dokonum);

//7-18 ◯がんばった
function aryRmv($arr,$n,$youso) {
    echo "削除する要素のインデックス: $n\n";
    $res = array_search($n,$arr); 
    echo "resの中身:$res\n";
    unset($arr[$res]);
    $arr = array_values($arr);
    $youso = $youso - 1;
     echo "削除後を表示します。\n";
     for ( $i = 0; $i < $youso; $i++ ) {
      echo "a[$i] = $arr[$i]";
     }
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

aryRmv($arr,$n,$youso);

//7-19 ◯
function aryRmvN($arr,$n,$youso,$deln) {
    echo "削除する要素のインデックス: $n\n";
    $res = array_search($n,$arr); 
    echo "resの中身:$res\n";
    echo "削除したい要素の個数:$deln";
    $deln = (int)fgets(STDIN);
    array_splice($arr,$res,$deln);
    // print_r($arr);
    $youso = $youso - $deln;
     echo "削除後を表示します。\n";
     for ( $i = 0; $i < $youso; $i++ ) {
      echo "a[$i] = $arr[$i]\n";
     }
}
    echo "配列に入れる要素数を入力してください。\n";
    $youso = (int)fgets(STDIN);
    echo "要素数：$youso\n";
    echo "$youso 個数字を入力してください。\n";
    $arr = array();
    
    for ( $i = 0; $i < $youso; $i++ ) {
     $num = fgets(STDIN);
     $arr[$i] = $num;
    //  echo "a[$i] = $num\n";
}
echo "削除したい要素を入力してください。\n";
 $n = (int)fgets(STDIN);

aryRmvN($arr,$n,$youso,$deln);


//7-20　◯計算はあってるが表示の仕方が’ちがう気がする
function AryIns($youso) {
    echo "要素数：$youso\n";
    echo "$youso 個数字を入力してください。\n";
    $arr = array();

    for ( $i = 0; $i < $youso; $i++ ) {
     $num = fgets(STDIN);
     $arr[$i] = $num;
     echo "a[$i] = $num\n";
  }
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
       echo "$arr";
}

 echo "配列に入れる要素数を入力してください。\n";
    $youso = (int)fgets(STDIN);

$ans = AryIns($youso);


?>