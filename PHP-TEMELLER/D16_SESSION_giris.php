<?php 
session_start();
if(isset($_POST['submit'])){

    $kad = $_POST['kad'];
    $pw = $_POST['pw'];
    if($kad == 'programist' && $pw =='123'){
        $_SESSION['username'] = $kad;
        header('Location:yonetici.php');
    } else {
        echo "Kullanıcı adı ya da şifre hatalı.";
    }
}
?>

<html>
    <body>
        <form action="" method="POST">
            <h2>Yönetici Giriş Formu</h2>
            <label>Kullanıcı Adı</label>
            <input type="text" name="kad">
            <label>Şifre</label>
            <input type="password" name="sifre">
            <input type="submit" name="submit" value="Giriş Yap">
        </form>
    </body>

</html>