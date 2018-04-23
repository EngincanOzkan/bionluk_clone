<?php
    include("classes/dbConnection.php");
    $islemler = new islemler();
    if(isset($_POST['onay'])){
        if($_POST['onay']=="Giriş Yap"){
            $islemler->girisYap();
        }
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>Yetenekli Freelancer Topluluğu - Bir Freelancerla Çalışın | Bionluk
        </title>
        <link rel="stylesheet" href="css/kayitStylesheet.css">
        <!-- <script src="main.js"></script> -->
    </head>
    <body>
        <div>
            <div class="mainTopBar">
                <div class="mainLogoDiv">
                    <img src="images/bionluk_logo_gk.png" class="mainLogo">
                </div>
            </div>

            <div style="height:90px"></div>

            <div class="flexBox">
                <div class="facebookgirisdiv">
                    <img data-v-735d2386="" src="images/facebook_landing_icon.svg">
                    <p>Facebook ile devam et</p>
                </div>
            </div>

            <div style="height:30px"></div>

            <div class="flexBox">
                <div class="googlegirisdiv">
                    <img src="images/googleminilogo.png" style="height: 24px; width: 24px;">
                    <p>Google ile devam et</p>
                </div>
            </div>

            <div style="height:15px;"></div>

            <div class="flexBox">
                <span style="color:#8b95a1">________________&nbsp &nbsp &nbsp veya &nbsp &nbsp &nbsp________________</span>
            </div>

            <div style="height:15px;"></div>
    <form method="POST" action="girisYap.php">
            <div class="flexBox">
                <input
                    name="email"
                    placeholder="E-mail"
                    type="email"
                    style="width:345px;"
                    class="GirisBilgiKutulari"/>
            </div>
            <div class="flexBox">
                <input
                    name="sifre"
                    placeholder="Şifre"
                    type="password"
                    style="width:345px;"
                    class="GirisBilgiKutulari"/>
            </div>
            <div class="flexBox">
                <p class="kucukaciklamalar" style="margin-top:0px;">
                    <a style="margin-left:260px" class="hemenKaydol">Şifremi Unuttum</a>
                </p>
            </div>
            <div class="flexBox">

                <input name="onay" type="submit" value="Giriş Yap" class="KayitOlButton"/>

            </div>
    </form>
           

            <div class="flexBox">
                <p style="margin-bottom:50px;margin-top:0px;font-size:16px;" class="kucukaciklamalar">Hesabınız yok mu?
                    <a href="kayitsecenek.php" class="hemenKaydol">Kaydol</a>
            </div>


            <div style="height:45px;"></div>

            <div class="footer">
                <div class="footer-div">
                    <div class="logo-div">
                        <img src="images/bionluk_logo_gk_footer.png">
                        <p>Bionluk Bilgi Teknolojileri Paz. ve Tic. A.Ş. © 2018</p>
                    </div>
                    <div class="footeryazilar-div">
                        <p>
                            Kategoriler
                        </p>
                        <a href="#" target="_blank" style="">
                            Grafik & Tasarım
                        </a>
                        <br/>
                        <a href="#" target="_blank" style="">
                            İnternet Reklamcılığı
                        </a>
                        <br/>
                        <a href="#" target="_blank">
                            Yazı & Çeviri
                        </a>
                        <br/>
                        <a href="#" target="_blank">
                            Yazılım & Teknoloji
                        </a>
                        <br/>
                        <a href="#" target="_blank">
                            Video & Animasyon
                        </a>
                        <br/>
                        <a href="#" target="_blank">
                            Ses & Müzik
                        </a>
                        <br/>
                        <a href="#" target="_blank">
                            İş & Yönetim
                        </a>
                    </div>
                    <div class="footeryazilar-div">
                        <p>
                            Hakkımızda
                        </p>
                        <a href="#" target="_blank" style="">
                            Bionluk Hakkında
                        </a>
                        <br/>
                        <a href="#" target="_blank" style="">
                            Üyelik Sözleşmesi
                        </a>
                        <br/>
                        <a href="#" target="_blank">
                            Kullanım Şartları
                        </a>
                        <br/>
                        <a href="#" target="_blank">
                            Gizlilik
                        </a>
                    </div>
                    <div class="footeryazilar-div">
                        <p>
                            Destek
                        </p>
                        <a href="#" target="_blank">
                            Yardım Merkezi
                        </a>
                        <br/>
                        <a href="#" target="_blank" style="">
                            Nasıl Çalışır?
                        </a>
                        <br/>
                        <a href="#" target="_blank" style="">
                            Bize Yazın
                        </a>
                        <br/>
                        <a href="#" target="_blank">
                            İletişim
                        </a>
                    </div>
                    <div class="footeryazilar-div">
                        <p>
                            Topluluk
                        </p>
                        <a href="#" target="_blank">
                            Geleceğin Çalıma Modeli
                        </a>
                        <br/>
                        <a href="#" target="_blank" style="">
                            Blog
                        </a>
                    </div>
                    <div class="footersocial-div">
                        <a
                            href="https://facebook.com/bionluk"
                            target="_blank"
                            style="margin-right: 30px;">
                            <img
                                src="https://bionluk.azureedge.net/site/icon/tansel_footer_facebook_white.svg">
                        </a>
                        <a
                            href="https://twitter.com/bionluk"
                            target="_blank"
                            style="margin-right: 30px;">
                            <img
                                src="https://bionluk.azureedge.net/site/icon/tansel_footer_twitter_white.svg">
                        </a>
                        <a href="https://instagram.com/bionlukcom" target="_blank">
                            <img
                                src="https://bionluk.azureedge.net/site/icon/tansel_footer_instagram_white.svg">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>