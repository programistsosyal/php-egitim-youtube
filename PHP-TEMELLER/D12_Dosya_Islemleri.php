<?php
    /* 
        PHP DOSYA İŞLEMLERİ
        fopen($dosyaAdi,mode) -> Dosya açmak için kullanılır.
            mode operatörleri -> "r" = Dosyayı yalnızca okumak için kullanılır
                              -> "r+" = Dosya okuma/yazma
                              -> "w" = Dosyaya yazma
                              -> "w+" = Dosya yazma/okuma
                              -> "a" = Dosyaya yazmak için. Eğer dosya yoksa oluşturur.
                              -> "a+" = Dosya okuma/yazma için. Eğer yoksa oluşturur.
        fclose($dosya) -> Dosyayı kapatmak için
        fread($dosya,$dosyaBoyut) -> Dosyayı okumak için
        filesize($dosyaAdi) -> Dosyanın boyutunu verir.
    */ 

    $dosyaAdi = "test.txt";
    $dosya = fopen($dosyaAdi,"a+");

    if($dosya == false){
        echo "Dosyayı açarken hata ile karşılaştı.";
    }

    $dosyaBoyut = filesize($dosyaAdi);
    $dosyaIcerik = fread($dosya,$dosyaBoyut);

    echo "Dosya Adı : $dosyaAdi <br>
          Dosya Boyutu : $dosyaBoyut bytes <br>
          Dosya İçeriği : $dosyaIcerik <br>";

    fclose($dosya);
    // unlink($dosyaAdi) // Dosya Silme İşlemi
?>