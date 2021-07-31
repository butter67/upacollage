<?php
Class Coordinate {
    private $x;
    private $y;

    public function __construct($x,$y) {
        $this->x = $x;
        $this->y = $y;
    }
    public function getX(){
        return $this->x;
    }
    public function getY(){
        return $this->y;
    }
    
    public function setX($x){
        $this->x = $x;
    }
    public function setY($y){
        $this->y = $y;
    }

    public function set($x,$y) {
        $this->x = $x;
        $this->y = $y;
    }

  
}

function CoordinateTester1 () {
    echo "座標pを入力せよ。\n";
    echo "X座標: $x\n";
    $x = fgets(STDIN);
    echo "Y座標: $y\n";
    $y = fgets(STDIN);

    $coodinateP = new Coordinate($x,$y);
    echo "p = (".$coodinateP->getX().",".$coodinateP->getY().")\n";
  

    $coodinateQ =& $coodinateP;
    $coodinateQ->set(9.9,9.9);
    echo "p = (".$coodinateP->getX().",".$coodinateP->getY().")\n";
    echo "q = (".$coodinateQ->getX().",".$coodinateQ->getX().")\n";
}


function CoordinateTester2() {
    echo "座標pを入力せよ。\n";
    echo "X座標: $x\n";
    $x = fgets(STDIN);
    echo "Y座標: $y\n";
    $y = fgets(STDIN);
    $coodinateP = new Coordinate($x,$y);

     echo "座標qを入力せよ。\n";
    echo "X座標: $x\n";
    $x = fgets(STDIN);
    echo "Y座標: $y\n";
    $y = fgets(STDIN);
    $coodinateQ = new Coordinate($x,$y);

    if ( $coodinateP == $coodinateQ ) {
        echo "p == q です。\n";
    } else {
        echo "p != q です。\n";
    }

    if ( $coodinateP->getX() == $coodinateQ->getX() && $coodinateP->getY() == $coodinateQ->getY() ) {
        echo "pとqは等しいです。\n";
    } else {
        echo "pとqは等しくありません。\n";
    }

}

function CoordinateTester3 () {
    echo "座標は何個: $n\n";
    $n = fgets(STDIN);
    $a = [];

    for ( $i = 0; $i < $n; $i++ ) {
        $a[$i] = new Coordinate(5.5,7.7); 
        $ai = $a[$i]->getX();
        $yi = $a[$i]->getY();
        echo "a[$i] = ($ai,$yi)\n";
    }
// print_r($a);
}

CoordinateTester1();
CoordinateTester2();
CoordinateTester3();

?>