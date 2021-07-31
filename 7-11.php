<?php
echo "整数xをnビットシフトします。\n";
echo "x: $x\n";
$x = (int)fgets(STDIN);
echo "n: $n\n";
$n = (int)fgets(STDIN);

function pow2($n) {
    $ans = pow(2,$n);
    return  $ans;
}


$mPower = $x * pow2($n);
$dPower = $x / pow2($n);

$lShift = $x << $n;
$rShift = $x >> $n;

echo "[a] x × (2の$n 乗) = $mPower\n";
echo "[b] x ÷ (2の$n 乗) = $dPower\n";
echo "[c] x << $n = $lShift\n";
echo "[d] x >> $n = $rShift\n";

if ( $mPower == $lShift ) {
    echo "[a]と[c]の値は一致します。\n";
} else {
    echo "[a]と[c]の値は一致しません。\n";
}

if ( $dPower == $rShift ) {
    echo "[b]と[d]の値は一致します。\n";
} else {
    echo "[b]と[d]の値は一致しません。\n";
}


?>