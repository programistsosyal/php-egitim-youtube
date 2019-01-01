<?php 
    /*
        GET & POST METODLARI
        Tarayıcının web sunucusuna veri göndermek için kullandığı iki yöntemdir.

        GET METODU
            http://www.orneksite.com/index.htm?name1=value1&name2=value2

            -GET metodu sunucunun ve tarayıcının geçmişinde görünen uzun bir 
            URL üretir.
            -GET metodu ile en fazla 1024 karakter gönderilebilir.
            -Sunucuya gönderilecek gizli bilgiler(örn: şifre) varsa
            kesinlikle bu metod kullanılmamalıdır.

        POST METODU
            -POST metodu bilgileri HTTP üzerinden aktarır.
            -Gönderilecek veri boyutunda herhangi bir kısıtlama bulunmamaktadır.
            -POST metodu ile gönderilen veriler HTTP başlığından geçer böylece güvenlik
            HTTP protokolüne bağlıdır. 
    */
    if(isset($_POST['gonder'])){
        $sinav1 = $_POST['sinav1'];
        $sinav2 = $_POST['sinav2'];
        $sinav3 = $_POST['sinav3'];
        $ortalama = ($sinav1+$sinav2+$sinav3) / 3;
        if($ortalama > 50)
            echo "Tebrikler $ortalama ile geçtiniz.";
        else 
            echo "Malesef $ortalama ile kaldınız.";
    }
?>
<html>
    <body>
        <form action="" method="POST" > 
            <label>Sınav 1</label>
            <input type="text" name="sinav1">
            <label>Sınav 2</label>
            <input type="text" name="sinav2">
            <label>Sınav 3</label>
            <input type="text" name="sinav3">
            <input name="gonder" type="submit" value="gönder">
        </form>
    </body>
</html>
