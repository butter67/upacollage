<?php

Class Coordinate {
    private $x = 0.0;
    private $y = 0.0;

    public function __construct($x,$y) {
        $this->x = $x;
        $this->y = $y;
        $this-> set($x,$y);
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

    public function equalTo($x,$y,$c) {
        if ( $x->getX() == $c->getX() && $y->getY() == $c->getY() ) {
            return true;
        } else {
            return false;
        }
    }
    public function toString($x,$y) {
        echo $x->getX(),$y->getY();
    }

  
}


function CoordinateTester() {
    echo "座標pを入力せよ。\n";
    echo "x座標:\n";
    $x = (int)fgets(STDIN);
    echo "y座標:\n";
    $y = (int)fgets(STDIN);

    $p = new Coordinate($x,$y);
    // echo "p = ($p)";
    // print_r($p);
    $res = $p->toString($x,$y);
   print_r($res);
}
CoordinateTester()

?>