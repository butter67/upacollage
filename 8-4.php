<?php
 include '8-3.php';

function carTester1() {
    $vitz = new Car("ビッツ","福岡999ん99-99",1660,1500,3640,0,0,40.0,12.0);
    $vitz->putSpec();

    $march = new Car("マーチ","福岡999ん99-99",1660,1525,3695,0,0,41.0,12.0);
    $march->putSpec();
}


function carTester2() {
    echo "車のデータを入力せよ。\n";
    echo "名前: $name\n";
    $name = fgets(STDIN);
    echo "ナンバー: $number\n";
    $number = (int)fgets(STDIN);
    echo "車幅: $width\n";
    $width = fgets(STDIN);
    echo "高さ: $height\n";
    $height = fgets(STDIN);
    echo "長さ: $length\n";
    $length = fgets(STDIN);
    echo "タンク容量: $tank\n";
    $tank = fgets(STDIN);
    echo "ガソリン量: $fuel\n";
    $fuel = fgets(STDIN);
    echo "燃費: $sfc\n";
    $sfc = fgets(STDIN);

    $myCar = new Car($name,$number,$width,$height,$length,$tank,$fuel,$sfc);

    while(true) {
        $itiX = $myCar->getX();
        $itiY = $myCar->getY();
        $zan = $myCar->getFuel();
        echo "現在地:$itiX.$itiY\n";
        echo "残り燃料:$zan\n";
        echo "移動しますか？ 1...Yes/No...0\n";
        $n = (int)fgets(STDIN);
        if ( $n == 0 ) {
        break;
        } 
        echo "x方向の移動距離:$dx\n";
        $dx = fgets(STDIN);
        echo "y方向の移動距離:$dy\n";
        $dy = fgets(STDIN);
        $myCar->move($dx,$dy,$sfc,$fuel);
        // if ( !$myCar->move($dx,$dy) ) {
        //     echo "燃料不足！\n";
        // }
        
    }
}


carTester1();
carTester2();

?>