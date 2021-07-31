<?php
echo "乱数の生成確認:\n";
 $x = mt_rand(100,999);
 print_r($x);


    echo "暗算力トレーニング！";
    do {
        $x = mt_rand(100,999);
        $y = mt_rand(100,999);
        $z = mt_rand(100,999);
        $ptt = 4;

        switch($ptt) {
            case 0 :
               $kotae = $x + $y + $z;
            break;
            case 1 :
               $kotae = $x + $y - $z;
            break;
            case 2 :
               $kotae = $x - $y + $z;
            break;
            case 3 :
               $kotae = $x - $y - $z;
            break;
        }
        while (true) {
            if ( $ptt < 2 ) {
                echo "x + ";
            } else {
                echo "x - ";
            }
            if ( $ptt % 2 == 0 ) {
                echo "y + ";
            } else {
                echo "y - ";
            }
            echo "z = ";
            $k = (int)fgets(STDIN);
            if ( $k == $kotae ) {
             break;
             echo "違いますよ！\n";
            }
            
        } 
        echo "もう一度？ Yes...1/No...0\n";
            $an = (int)fgets(STDIN);
        

    } while ( $an != 0 && $an != 1 );
    

?>