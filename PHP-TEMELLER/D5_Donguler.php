<?php
    /*
        DERS 5 : DÖNGÜLER
        for : belirtilen sayıda kod bloğunu çalıştırır.
        while : belirtilen bir koşul true olduğu sürece kod bloğunu çalıştırır.
        do-while : önce kod bloğunu çalıştırır. ardından koşulun durumuna göre bir daha çalıştırır.
        foreach : bir dizideki her bir eleman için kod bloğunu dolaşır.

        continue deyimi : döngünün geçerli olan yinelemesini durdurmak için kullanılır.
        break deyimi : döngüden çıkış yapmak için kullanılır.
            echo "For Döngüsü <br>";
    for($i = 1;$i<=10;$i++){
            echo $i . ' - ';
    }
    echo "<br> While Döngüsü <br>";
    $i=1;
    while($i <= 10){
        echo $i . ' - ';
        $i++;
    }
    echo "<br> Do-While Döngüsü <br>";
    $i=11;
    do {
        echo $i;
    } while($i<=10);
    echo "<br> Foreach <br>";
    $sayilar = array(125,33,66,98);
    foreach($sayilar as $deger){
        echo $deger . ' - ';
    }
    */
    for ($i=1; $i <=10 ; $i++) { 
        if($i % 6 == 0)
             continue;
        echo $i . ' -  ';
    }
?>