 <meta http-equiv="refresh" content="2;URL=/contact.html"> 
<?php

require("class.phpmailer.php");
$mail = new PHPMailer();
$mail->IsSMTP();
$mail->SMTPDebug = 1; // Hata ayıklama değişkeni: 1 = hata ve mesaj gösterir, 2 = sadece mesaj gösterir
$mail->SMTPAuth = true; //SMTP doğrulama olmalı ve bu değer değişmemeli
$mail->SMTPSecure = 'tls'; // Normal bağlantı için boş bırakın veya tls yazın, güvenli bağlantı kullanmak için ssl yazın
$mail->Host = "smtp.gmail.com"; // Mail sunucusunun adresi (IP de olabilir)
$mail->Port = 587; // Normal bağlantı için 587, güvenli bağlantı için 465 yazın
$mail->IsHTML(true);
$mail->SetLanguage("tr", "phpmailer/language");
$mail->CharSet  ="utf-8";
$mail->Username = "zibizeretta2@gmail.com"; // Gönderici adresiniz (e-posta adresiniz)
$mail->Password = "152133asas"; // Mail adresimizin sifresi
$mail->SetFrom("zibizeretta2@gmail.com", "Siteden Gelen Mail"); // Mail atıldığında gorulecek isim ve email
$mail->AddAddress("zibizeretta@gmail.com"); // Mailin gönderileceği alıcı adres
$mail->Subject  =  $_POST['name'];
$mail->Body     =  implode(" \n",$_POST);

/*$mail->Subject  =  $isim=$_POST['name'];
$mail->Subject  =  $mail=$_POST['emailAddress'];
$mail->Subject  =  $telefon=$_POST['phoneNumber'];
$mail->Subject  =  $message=$_POST['message'];
$mail->Body     =  "
isim: $isim  
E-mail: $emailAddress
Telefon: $phoneNumler  
Mesaj: $message"; 
*/
if(!$mail->Send()){
  echo "Email Gönderim Hatasi: ".$mail->ErrorInfo;
} else {
echo '<script type="text/javascript">alert("E Postanız  Başarı ile  Gönderilmiştir.");</script>';
}
?>

