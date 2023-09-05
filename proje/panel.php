<!DOCTYPE html>
<html>
<head>
<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
</style>
</head>
<body>

<h1>A Fancy Table</h1>

<table id="customers">
  <tr>
    <th>Ad Soyad</th>
    <th>Telefon</th>
    <th>Email</th>
    <th>Konu</th>
    <th>Mesaj</th>
  </tr>

  
  <?php

  session_start();//eger veri varsa sayfa acilsin,yoksa if olsun
    if($_SESSION["user"]==" ")
    { //admin paneline girmeden girmeye calisirsa otomatik bu olsun
    echo "<script>window.location.href='cikis.php'</script>";
    }
    else
    { //admin panelinden boyle giris yapsin demek

      echo"Kullanici Adiniz : ".$_SESSION['user']."<br>"; 
      echo "<a href='panelgiris.php'>Cikis Yap</a><br><br>";


      include('baglanti.php');

      $sec="select * from iletisim";
      $sonuc=$baglan->query($sec);
  
      if($sonuc->num_rows>0) //row satirsayimiz 0 dan buyukse-yani veri varsa
      {
         while($cek=$sonuc->fetch_assoc())
         {
          echo "
          <tr>
            <td>".$cek['adsoyad']."</td>
            <td>".$cek['telefon']."</td>
            <td>".$cek['email']."</td>
            <td>".$cek['konu']."</td>
            <td>".$cek['mesaj']."</td>
          </tr>
          ";
          }
  
       }
        else 
        {
          echo "Veritabaninda kayitli Hicbir veri Bulunamamistir! ";
  
        }


      }

 

     ?>
  
</table>

</body>
</html>

