<?php
class dbWorks{
private $servername = "localhost";
private $username = "root";
private $password = "root";
private $database = "bionluk";
public $conn = null;

function __construct($server, $user, $pass, $data) {
    $this->servername = $server;
    $this->username = $user;
    $this->password = $pass;
    $this->database = $data;
}

function connectDb(){
// Baglanti olusturma;
    $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->database);

    if(($this->conn)->connect_error){
        die("Bağlantı Başarısız: " . ($this->conn)->connect_error);
    }
}

function selectData($sql){
    if(($this->conn)->connect_error){
        die("Bağlantı Başarısız: " . ($this->conn)->connect_error);
    }else   
        return ($this->conn)->query($sql);
}

function insertData($sql){
    if (($this->conn)->query($sql) === TRUE) {
        echo "Kayıt Başarılı";
        return TRUE;
    } else {
        echo "Error: " . $sql . "<br>" . ($this->conn)->error;
        return FALSE;
    }
}

function disconnectDb(){
    ($this->conn)->close();
}
}

class islemler{
            
    function kayitOl(){
        $myDB = new dbWorks("localhost","root","root","bionluk");
                
        $isim = $_POST['isim'];
        $soyisim = $_POST['soyisim'];
        $kullaniciadi = $_POST['kullaniciadi'];
        $email = $_POST['email']; 
        $sifre = $_POST['sifre']; 

        $myDB->connectDb();

        $sql = "INSERT INTO tbl_kullanicilar (isim, soyisim, kullaniciadi, email, sifre) VALUES ($isim, $soyisim, $kullaniciadi , '$email', '$sifre')";

        $myDB->insertData($sql);

        $myDB->disconnectDb();
    }

    function girisYap(){
        $myDB = new dbWorks("localhost","root","root","bionluk");
        
        $email = $_POST['email']; 
        $sifre = $_POST['sifre']; 

        $myDB->connectDb();
        
        $sql = "SELECT * FROM tbl_kullanicilar WHERE email='$email' AND sifre='$sifre'";

        $result = $myDB->selectData($sql);

        if($result->num_rows > 0){
            $row = $result->fetch_assoc();
            setcookie("BionlukCakmasiUserId",$row['id'],time() + (86400 * 30)); //-> 1 gün
            setcookie("BionlukCakmasiUserName",$row['isim'],time() + (86400 * 30));
            setcookie("BionlukCakmasiUserSurname",$row['soyad'], time() + (86400 * 30));
            setcookie("BionlukCakmasiUserUserName",$row['kullaniciadi'], time() + (86400 * 30));
            setcookie("BionlukCakmasiUserUserEmail",$row['email'], time() + (86400 * 30));
            setcookie("BionlukCakmasiUserUserPass",$row['sifre'], time() + (86400 * 30));
            header('Location: /bionluk/index.php');
        }
     
        $myDB->disconnectDb();
    }

     function amIonline(){
        if(isset($_COOKIE["BionlukCakmasiUserId"])){
           $deger = $_COOKIE["BionlukCakmasiUserId"];
           if($deger != null)
           {
               return array($_COOKIE["BionlukCakmasiUserId"],
                            $_COOKIE["BionlukCakmasiUserName"],
                            $_COOKIE["BionlukCakmasiUserSurname"],
                            $_COOKIE["BionlukCakmasiUserUserName"],
                            $_COOKIE["BionlukCakmasiUserUserEmail"],
                            $_COOKIE["BionlukCakmasiUserUserPass"]
                        );
           }
           else return -1;
        }
        else return -1;
    }
}
?>