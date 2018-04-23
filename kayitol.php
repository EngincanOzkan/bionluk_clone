<?php
    include("classes/dbConnection.php");

    $islemler = new islemler();
    if(isset($_POST['onay'])){
        if($_POST['onay']=="Kayıt Ol"){
            $islemler->kayitOl();
        }
    }
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Yetenekli Freelancer Topluluğu - Bir Freelancerla Çalışın | Bionluk </title>
    <link rel="stylesheet" href="css/kayitStylesheet.css">
   <!-- <script src="main.js"></script> -->
</head>
<body>
<div>
    <div class="mainTopBar">
        <div class="mainLogoDiv">
            <img src="https://bionluk.azureedge.net/site/general/bionluk_logo_gk.png" class="mainLogo">
        </div>
    </div>

    <div style="height:60px"></div>
   
     <div class="flexBox">
        <p class="kucukaciklamalar" style="margin-top:0px;font-size:16px;"><a href="#" class="hemenKaydol">Facebook</a> veya <a href="#" class="hemenKaydol">Google</a> ile kaydolun.</p>
    </div>

    <form method="POST" action="kayitol.php">
    <div class="flexBox">
            <input name="isim" placeholder="İsim" type="text" style="width:155px;margin-bottom:5px;" class="GirisBilgiKutulari"/>
            <input name="soyisim" placeholder="Soy İsim" type="text" style="width:155px;margin-bottom:5px;" class="GirisBilgiKutulari"/> 
    </div>
    <div class="flexBox" style="flex-direction: column;align-items:center;">
        <div>
        <div class="">
            <span class="bionluklink" name="bionluklink"> bionluk.com/ <span>
        </div> 
        
        <input name="kullaniciadi" placeholder="kullanıcı Adı" type="text" style="width:345px;" class="GirisBilgiKutulari"/>
    </div>
    </div> 
    <div class="flexBox">
            <input name="email" placeholder="E-mail" type="email" style="width:345px;" class="GirisBilgiKutulari"/> 
    </div> 
    <div class="flexBox">        
            <input name="sifre" placeholder="Şifre" type="password" style="width:345px;" class="GirisBilgiKutulari"/> 
    </div>

    <div class="flexBox">
        <p class="kucukaciklamalar" style="margin-top:0px;">Kaydol'a basarak <a class="hemenKaydol">kullanıcı sözleşmesi</a> ve <a class="hemenKaydol">gizlilik sözleşmesini</a> kabul ediyorum.</p>
    </div>

     <div class="flexBox">
     
     <input name="onay" type="submit" value="Kayıt Ol" class="KayitOlButton" />
      
    </div>

    <div class="flexBox">
        <p class="kucukaciklamalar" style="margin-top:0px;font-size:16px;">  Zaten bir hesabın var mı? <a href="girisYap.php" class="hemenKaydol">Giriş Yap</a> </p>
    </div>

    </form>
</div>
</body>
</html>