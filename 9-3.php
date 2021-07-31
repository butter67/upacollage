<?php

  Class Human {
    public $name;   //メンバ変数
    public $height;
    public $weight;

    public function __construct($name,$height,$weight) {
        $this->name = $name;
        $this->height = $height;
        $this->weight = $weight;
    }

    public function getName() {
        return $this->name;
    }
    public function getHeight() {
        return $this->height;
    }
    public function getWeight() {
        return $this->weight;
    }

    public function gainWeight($w) {
         $this->weight += $w;
    }
    public function reduceWeight($w) {
         $this->weight -= $w;
          }
}
// 一次元配列

$p = [
    new Human("及川 慶人",103,18),
    new Human("山田 太郎",170,60),
];

// 一次元配列
echo "配列qの要素数: $n\n";
$n = fgets(STDIN);

$q = [];
for ( $i = 0; $i < $n; $i++ ) {
    echo "q[$i]\n";
    echo "名前: $name\n";
    $name = fgets(STDIN);
    echo "身長: $height\n";
    $height = fgets(STDIN);
    echo "体重: $weight\n";
    $weight = fgets(STDIN);
    $q[$i] = new Human($name,$height,$weight);
}

// print_r($q);

// 二次元配列
$x = [
    [new Human("及川 慶人",103,18), new Human("山田 太郎",170,60)],
    [new Human("及川 恵利",160,50), new Human("川島 太郎",180,70)]
];
// print_r($x);


echo "配列yの行数: $num\n";
$num = (int)fgets(STDIN);
$y = []; 
echo "y[$i] の列数: $retu\n";
$retu = fgets(STDIN);
for ( $i = 0; $i < $num; $i++ ) { 
    for ( $j = 0; $j < $retu; $j++ ) {
        echo "y[$i][$j]\n";
        echo "名前: $name\n";
        $name = fgets(STDIN);
        echo "身長: $height\n";
        $height = fgets(STDIN);
        echo "体重: $weight\n";
        $weight = fgets(STDIN);
        $y[$i][$j] = new Human($name,$height,$weight);
    }
}
// print_r($y);

//表示作業！
echo "配列P:\n";
print_r($p);

echo "配列Q:\n";
print_r($q);

echo "配列x:\n";
print_r($x);

echo "配列Y:\n";
print_r($y);



?>