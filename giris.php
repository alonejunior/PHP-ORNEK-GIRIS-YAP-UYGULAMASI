<?php

require 'ayarlar.php';


if(isset($_POST['submit']))
{
    $kullanici_adi = $_POST['kullanici_adi'];
    $sifre = $_POST['sifre'];

    if(!$kullanici_adi || !$sifre){
        $hata = 'Lütfen gerekli alanları doldurunuz.';
    }

    elseif($kullanici_adi != $uye['kullanici_adi']){
        $hata = 'kullanıcı adınızı kontrol edin lütfen';
    }

    elseif($sifre != $uye['sifre']){
        $hata = 'Girilen şifre yanlış';
    }

    else
    {   
        $_SESSION['zaman'] = time() + 10;
        //sessionlarımızı buraya yüklüyoruz.
        $_SESSION['kullanici_adi'] = $uye['kullanici_adi'];

        header('Location:index.php');
    }
}

?>

<?php if (isset($hata)): ?>
<div style="border: 1px solid red; background-color: red; width:400px; text-align: center;">
<?php echo $hata; ?>
</div>
<br>
<?php endif; ?>


<form action="" method="post">
    Kullanıcı Adı: <br>
    <input type="text" name="kullanici_adi">
    <hr>
    Şifre:
        <br>
        <input type="password" name="sifre">
        <br>
        <br>
        <input type="hidden" name="submit" value="1">
        <button type="submit"> Giriş Yap</button>
</form>

