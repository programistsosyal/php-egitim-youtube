<?php 
    /* KONU TEKRARI - 1 
        *
        **
        ***
        ****
        *****
     
    for($i = 1;$i<=5;$i++){
        for($a = 1 ; $a <= $i;$a++){
            echo "*";
        }
        echo "<br>";
    }*/
    $ogrenciler = array('Ebubekir' => 88,'Hasan' => 77,'Oğuzhan' => 44,'Sinan'=> 56);
    $enYuksekIndeks = "";
    foreach($ogrenciler as $isimler => $notlar){
        if($notlar < 50)
            echo $isimler . ' isimli öğrenci '.$notlar.' notu ile dersten kaldı.';
        else
            echo $isimler . ' isimli öğrenci '.$notlar.' notu ile dersten geçti.';
        if( max($ogrenciler) == $notlar)
            $enYuksekIndeks = $isimler;
        echo "<br>";
    }
    echo "En yüksek not alan öğrenci : " . $enYuksekIndeks . " Notu = ". $ogrenciler[$enYuksekIndeks];
?>