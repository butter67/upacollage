<?php
Class Car {
    public $name;
    public $number;
    public $width;
    public $height;
    public $length;
    public $x;      
    public $y;
    public $tankage;
    public $fuel;
    public $sfc;
    
    public function __construct($name,$number,$width,$height,$length,$tankage,$fuel,$sfc) {
        $this->name = $name;
        $this->number = $number;
        $this->width = $width;
        $this->height = $height;
        $this->length = $length;
        $this->x = 0.0;
        $this->y = 0.0;
        $this->tankage = $tankage;
        $this->fuel = ($fuel <= $tankage) ? $fuel : $tankage;
        $this->sfc = $sfc;
    }

    public function getX() {
        return $this->x;
    }
    public function getY() {
        return $this->y;
    }
    public function getFuel() {
        return $this->fuel;
    }

    public function move($dx,$dy,$sfc,$fuel) {
        $dist = sqrt(($dx * $dx) + ($dy * $dy));
        $f = $dist / $sfc;

        if ( $f > $fuel ) {
            return false;
        } else {
            $fuel -= $f;
            $x += $dx;
            $y += $dy;
            return true;
        }
    }

    public function refuel ($df,$tankage) {
        if ( $df > 0 ) {
            $fuel += $df;
            if ( $fuel > $tankage ) {
                $fuel = $tankage;
            }
            
        }
    }

    public function putSpec() {
        echo "名前:".$this->name."\n";
        echo "ナンバー:".$this->number."\n";
        echo "車幅:".$this->width."mm\n";
        echo "車高:".$this->height."mm\n";
        echo "車長:".$this->length."mm\n";
        echo "タンク:".$this->tankage."リットル\n";
        echo "燃費:".$this->sfc."km/リットル\n";
    }
}

$volvo = new Car ("ボルボ",1234,1600,1800,0,0,2600,45,10);
// print_r($volvo);
$volvo->putSpec();




?>