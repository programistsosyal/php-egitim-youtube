<?php
    /*
        FONKSİYONLAR
        Fonksiyon Tanımlama
        function fonksiyonAdi(){
            //Fonksiyon çağırıldığında çalıştırılacak kodlar.
        }
        Fonksiyon Çağırma
        fonksiyonAdi();
        
        Parametre Alan Fonksiyonlar
        function ucgenAlanHesaplama($taban,$yukseklik){
            return ($taban*$yukseklik) / 2;
        }
        $ucgenAlan = ucgenAlanHesaplama(5,10);

        VARSAYILAN DEĞER BELİRLEME
        funciton ekranaYaz($metin=NULL){
            return "Merhaba : $metin";
        }
        ekranaYaz();

        DİNAMİK FONKSİYON ÇAĞIRIMI
        function ekranaYaz(){
            echo "Merhaba";
        }
        $fonksAd = "ekranaYaz";
        $fonskAd();
        &
    */

    function besEkle(&$sayi){
        $sayi += 5;
        echo "$sayi <br>";
    }
    $sayimiz = 10;
    besEkle($sayimiz);
    echo "Sayı değişkenin değeri : ".$sayimiz;
?>