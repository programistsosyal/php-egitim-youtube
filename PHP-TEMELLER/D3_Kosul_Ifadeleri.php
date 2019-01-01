<?php
/*  DERS 3 : KOŞUL İFADELERİ 
    // BASİT IF-ELSE YAPISI //
    if(koşul){
        //koşul = true dönerse buradaki kodlar çalışır
    } else {
        //koşul = false dönerse buradaki kodlar çalışır.
    }

    // ELSE IF YAPISI //
    if(koşul1){
        //koşul1 true ise buradaki kodlar çalışır
    }
    else if (koşul2){
        //koşul2 sağlanmışsa buradaki kodlar çalışır.
    }
    else if(koşul3){}
    else{
        // iki koşul da sağlanmamışsa buradaki kodlar çalışır
    }
    
    // SWITCH-CASE YAPISI //
    switch(koşul değişkeni){
        case koşul1:
                asdfasdf
            break;
        case koşul2:
            gerçekleşecek işlem
            break;
        default:
            gerçekleşecek işlem
            break;
    }
*/
    $mevsim = "SSS";

    switch($mevsim){
        case "İlkbahar":
                echo "Mart-Nisan-Mayıs";
            break;
        case "Yaz":
            echo "Haziran-Temmuz-Ağustos";
            break;
        case "Sonbahar":
            echo "Eylül-Ekim-Kasım";
            break;
        case "Kış":
            echo "Aralık-Ocak-Şubat";
            break;
        default:
            echo "Yanlış değer girdiniz.";
            break;
    }
    ///
?>