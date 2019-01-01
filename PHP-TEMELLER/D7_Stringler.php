<?php 
/* 
    DERS 7 : STRINGS
    $string = "Bu çift tırnak ile tanımlanmış bir string."
    $string2 = 'Bu tek tırnak ile tanımlanmış bir string.'
    İkisinin farkı ise tek tırnak ile yazacağımız string ifadelerin içerisine
    değişken yazamayız. 

    strlen() -> string değerinin uzunluğunu verir.
    strpos($string,$ara) -> string içinde değer aramacak için kullanılır.
    explode(" ",$string) -> belirtilen karaktere göre stringi parçalara bölüp diziye atar.
    str_replace($yenideger,$eskideger,$string) -> string içindeki ifadeyi değiştirir.
    substr($string,baslangic_indeksi,bitis,bitis_indeksi) -> stringin belli parçasını alır.
*/ 
    $string = "Bu bir ifade.";
    $deger = substr($string,3,3);
    echo $deger;
?>