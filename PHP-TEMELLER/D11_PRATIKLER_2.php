<?php 
    if(isset($_POST['submit'])){
        $kad = $_POST['kad'];
        $sifre = $_POST['sifre'];
        $sifre_Tekrar = $_POST['sifre2'];

        $kadUzunluk = strlen($kad);

        if($kad != null && $sifre != null && $sifre_Tekrar != null){

                if($kadUzunluk >=5 && $kadUzunluk<=12){
                        if($sifre == $sifre_Tekrar)
                        {
                            $basari = "Tebrikler kayıt oldunuz.";
                        } else 
                        {
                            $hata = "Şifreler uyuşmuyor.";
                        }
                }
                else {
                    $hata = "Kullanıcı adı 5-12 karakter olmalıdır.";
                }
        } else {
            $hata = "Tüm alanları doldurunuz.";
        }

    }
?>

<html>
    <body>
        <form action="" method="POST">
            <label>Kullanıcı Adı</label>
            <input type="text" name="kad">
            <label>Şifre</label>
            <input type="password" name="sifre">
            <label>Şifre(Tekrar)</label>
            <input type="password" name="sifre2">
            <input type="submit" name="submit" value="Kayıt Ol">
        </form>

        <?php if(isset($hata)):?>
            <div style="color:red">
                    <h2><?=$hata?></h2>
            </div>
        <?php endif; ?>

        <?php if(isset($basari)):?>
            <div style="color:green">
                    <h2><?=$basari?></h2>
            </div>
        <?php endif; ?>
    </body>
</html>