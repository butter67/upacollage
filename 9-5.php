<?php

Class Account {
    private $name;
    private $no;
    private $balance;
    private $openDay;

    function __construct($n,$num,$z,$d) {
        $this->name = $n;
        $this->no = $num;
        $this->balance = $z;
        $this->openDay = $d;
        $openDay = new Day($d);
    }
    //口座名義人を調べる
    function getName() {
        return $this->name;
    }
    //口座番号を調べる
    function getNo() {
        return $this->no;
    }
    //預金残高を調べる
    function getBalance() {
        return $this->balance;
    }
    //口座開設日を調べる
    function getOpenDay() {
        return new Day($openDay);
    }

    //k円預ける
    function deposit($k) {
        $this->balance += $k;
    }
    //k円おろす
    function widthdraw($k) {
        $this->balance -= $k;
    }

    function toString() {
        return  "{".$this->name.$this->no.$this->balance."}";
    }

  
}


?>