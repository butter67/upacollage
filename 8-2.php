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
  $yamada = new Human ("山田太郎",170,60);
  $keito = new Human ("及川慶人",103,18);

  $yamada->reduceWeight(5);
  $keito->gainWeight(3);

  $yname = $yamada->getName();
  $yheight = $yamada->getHeight();
  $yweight = $yamada->getWeight();

  $kname = $keito->getName();
  $kheight = $keito->getHeight();
  $kweight = $keito->getWeight();


  echo "名前:".$yname."\n";
  echo "身長:".$yheight."cm\n";
  echo "身長:".$yweight."kg\n";
  echo "\n";
  echo "名前:".$kname."\n";
  echo "身長:".$kheight."cm\n";
  echo "身長:".$kweight."kg\n";



?>