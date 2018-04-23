<?php
        include("dbConnections.php");
       
class islemler{
        function kayitOl(){
                $myDB = new dbWorks("localhost","root","root","bionluk");
                
                $isim = (string)$_POST['isim'];
                $soyisim = (string)$_POST['soyisim'];
                $kullaniciadi = (string)$_POST['kullaniciadi'];
                $email = (string)$_POST['email']; 
                $sifre = (string)$_POST['sifre']; 
        
                $myDB->connectDb();
        
                $myDB->insertData("INSERT INTO tbl_kullanicilar (isim, soyisim, kullaniciadi, email, sifre)
                VALUES ($isim, $soyisim, $kullaniciadi , $email, $sifre)");
        
                $myDB->disconnectDb();
        }
}
       
        
?>