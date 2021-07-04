<?php
//4-20
echo "季節を求めます。";
do {
    do {
        echo "何月ですか？";
        $month = fgets(STDIN);
    } while ( $month < 1 || $month > 12 );
    if ( $month >= 3 && $month <= 5 ) {
        echo "それは春です。\n";
    } elseif ( $month >= 6 && $month <= 8 ) {
        echo "それは夏です。\n";
    } elseif ( $month >= 9 && $month <= 11 ) {
        echo "それは秋です。\n";
    }  else  {
        echo "それは冬です。\n";
    } 
    echo "もう一度？ 1..Yes/0..No";
    $ans = fgets(STDIN);
} while ( $ans == 1);

//4-21
echo "正方形を表示します。";
$dan = fgets(STDIN);
echo "段数は:$dan";
for ( $i = 1; $i <= $dan; $i++) {
    for ( $j = 1; $j <= $dan; $j++ ) {
        echo "*";
    }
    echo "\n";
}

//4-22
echo "左下直角の二等辺三角形を表示します。";
$dan = fgets(STDIN);
echo "段数は$dan";
for ( $i = 1; $i <= $dan; $i++) {
    for ( $j = 1; $j <= $i; $j++ ) {
        echo "*";
    }
    echo "\n";
} 

//4-23
echo "左上直角の二等辺三角形を表示します。";
$dan = fgets(STDIN);
echo "段数は$dan";
for ( $i = 1; $i <= $dan; $i++) {
    for ( $j = 1; $j <= $dan - $i + 1; $j++ ) {
        echo "*";
    }
    echo "\n";
} 

//4-24

?>

