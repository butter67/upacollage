<?php
 Class Day {
     public $year = 1;
     public $month = 1;
     public $date = 1;

     public function __construct($year,$month,$date) {
         $this->year = $year;
         $this->month = $month;
         $this->date = $date;
     }
     function getYear() {
         return $this->year;
     }
     function getMonth() {
         return $this->month;
     }
     function getDate() {
         return $this->date;
     }


     function setYear($year) {
         $this->year = $year;
     }
     function setMonth($month) {
         $this->month = $month;
     }
     function setDate($date) {
         $this->date = $date;
     }

     function set($year,$month,$date) {
         $this->year = $year;
         $this->month = $month;
         $this->date = $date;
     }

    //  function dayOfWeek($y,$m,$d) {
    //      $y = $this->year;
    //      $m = $this->month;
    //      $d = $this->date;
    //      if ( $m == 1 || $m == 2 ) {
    //          $y--;
    //          $m += 12;
    //      }
    //      $res = ( $y + $y / 4 - $y / 100 + $y / 400 + ( 13 * $m + 8 ) / 5 + $d ) % 7;
    //      return $res;
    //  }

    function equalTo($d) {
        if ( $this->year == $d->year && $this->month == $d->month && $this->date == $d->date ) {
            return $this->year;
        } else {
            return false;
        }
    }

    function toString($y,$m,$d) {
        $wd = [];
        $wd = ["日","月","火","水","木","金","土"];
        echo $wd[date("w", strtotime($y,$m,$d))];
        print_r($wd);
    }


 }

 function DayTester () {
     echo "day1を入力せよ。\n";
     echo "年: $y\n";
     $y = (int)fgets(STDIN);
     echo "月: $m\n";
     $m = (int)fgets(STDIN);
     echo "日: $d\n";
     $d = (int)fgets(STDIN);

     $day1 = new Day($y,$m,$d);
     echo "day1 = $day1\n";
    print_r($day1);
     }
     
DayTester($y,$m,$d);
?>