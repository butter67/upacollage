<?php
//8-1
Class Human {
  public $name;   //メンバ変数
  public $height;
  public $weight;
}
$human = new Human();
$human->name = "山田太郎\n";
$human->height = 170;
$human->weight = 60;

$kid = new Human();
$kid->name = "及川慶人\n";
$kid->height = 103;
$kid->weight = 18;

print_r($human);
print_r($kid);

echo "名前：$human->name\n";
echo "身長：$human->height\n";
echo "体重：$human->weight\n";

echo "名前：$kid->name\n";
echo "身長：$kid->height\n";
echo "体重：$kid->weight\n";
 
 ?>