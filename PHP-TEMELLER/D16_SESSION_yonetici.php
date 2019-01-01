
<?php 
session_start();

if(!isset($_SESSION['username'])){
    header('Location:giris.php');
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Yönetici Sayfası</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
        <h1>Yönetici Sayfasındasın</h1>
        <p>Hoşgeldiniz <?=$_SESSION['username'];?></p>
        <a href="oturumkapat.php">Oturum Kapat</a>
</body>
</html>