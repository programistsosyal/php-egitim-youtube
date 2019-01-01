<?php 

    /*
        /// DİZİ FONKSİYONLARI ///
        $meyveler = array('portakal','mango','elma','portakal','mango','elma','portakal');        
        array_count_values($meyveler) -> Tekrarlanan verileri sayarak diziye atar.
        array_diff($dizi1,$dizi2) -> 2 dizi arasındaki farklılıklara bakar
        array_key_exists('indeks', $dizi) -> Böle bir indeksin olup olmadığına bakar.
        array_map("kupunuAl", $dizi) -> Dizi içindeki tüm elemanları belli bir fonksiyonla işleme alır
        array_reverse($dizi) -> Diziyi tersine çevirir.
        array_search("eleman", $dizi) -> Dizi içinde eleman arayıp o elemanın keyini döndürür.

    */

    $sayi = array(1,2,3,4,5);
    $elemanIndeks = array_search(33,$sayi);

    print_r($elemanIndeks);
?>