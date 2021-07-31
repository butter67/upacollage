<?php

$weight = 60;

function gainWeight($weight,$w) {
    $weight += $w;
    return $weight;
}

$w = 3;
$res = gainWeight($weight,$w);
echo "$res";
// print_r($res);
?>