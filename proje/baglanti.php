<?php
$vt_sunucu="localhost";
$vt_kullanici="root";
$vt_sifre="";
$vt_adi="companywebsite";


$baglan=mysqli_connect($vt_sunucu , $vt_kullanici, $vt_sifre, $vt_adi );

if(!$baglan)
{
   die("veritabani baglanti islemi basarsiz ".mysqli_connect_error());
}
// else{
//     echo "Baglanti Basarli !";
// }


?>