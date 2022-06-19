<?php
include "session.php";
include "koneksi.php";

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Home</title>
    <link rel="stylesheet" href="css/styles.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  </head>
  <body>
    <input type="checkbox" id="check">
    <label for="check">
      <i class="fas fa-bars" id="btn"></i>
      <i class="fas fa-times" id="cancel"></i>
    </label>
    <div class="sidebar">
    <header>Steam</header>
  <ul>
    <li><a href="#"><i class="fas fa-qrcode"></i>Dashboard</a></li>
    <li><a href="transaksi.php"><i class="fas fa-link"></i>New Transaction</a></li>
    <li><a href="transaksi_view.php"><i class="fas fa-sliders-h"></i>List Transaction</a></li>
    <li><a href="developer.php"><i class="fas fa-question-circle"></i>About Us</a></li>
    <li><a href="logout.php"><i class="fas fa-key"></i>Log Out</a></li>
  </ul>
</div>
 <section>
 <div class="caramel">  
 <h1>
    Halo... Selamat datang <b> <?php echo $_SESSION['username']; ?> 
 </h1>
 <p>
   Web ini dibuat untuk mencatat data pelanggan agar terdata dengan baik :)
 </p>
 <?php 
	  $sql = mysqli_query($koneksi, "SELECT count(nama), sum(harga) FROM transaksi");
	  list($nama, $harga) = mysqli_fetch_array($sql);
	  echo '
	  <table>
      <tr>
        <th> Jumlah Pelanggan</th>
        <th> Jumlah Pendapatan</th>
      </tr>

      <tr>
        <td> <b>'.$nama.'</b> Pelanggan</td>
        <td> <b>RP. '.number_format($harga).'</b></td>
      </tr>
    </table>
	  </div>
	  ' ?>
  </div>
 </section>

  </body>
</html>
