<?php 
    /*
        COOKIES ( ÇEREZLER )

        Çerezler istemcide depolanan metin dosyalarıdır ve kullanıcı ile ilgili 
        bilgileri saklarlar. 
        -Sunucu tarayıcıya bir dizi çerez gönderir. Örneğin isim,yaş veya kimlik numarası
        -Tarayıcı bu bilgiyi daha sonra kullanmak üzere yerel makinede saklar.
        -Tarayıcı bir dahaki sefere web sunucusuna herhangi bir istek gönderdiğinde,
        o çerez bilgilerini sunucuya gönderir ve sunucu bu bilgiyi kullanıcıyı tanımlamak
        için kullanır.

        ÇEREZ TANIMLAMA
        setcookie(name, value, expire, path, domain, security);
        name-> çerezin adını belirtir.
        value-> çereze atadığınız bilgi
        expire-> çerezin ne kadar süre geçerli olacağı
        path->çerezin hangi dizinde geçerli olacağı
        security-> bu çerezin yalnızca HTTPS üzerinden aktarılacağını gstermek için 1 olarak ayarlanır.

        ÇEREZ SİLMEK
        setcookie( "name", "", time()- 60, "/","", 0);
    */
    setcookie('isim','Programist',time()-60,"/","",0);
    if(isset($_COOKIE['isim'])){
        echo 'Merhaba : '.$_COOKIE['isim'];
    } else {
        echo "çerez tanımlanamış";
    }
?>