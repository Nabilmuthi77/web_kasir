<?php
include "session.php";
include "koneksi.php";

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>About Us</title>
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
    <li><a href="home.php"><i class="fas fa-qrcode"></i>Dashboard</a></li>
    <li><a href="transaksi.php"><i class="fas fa-link"></i>New Transaction</a></li>
    <li><a href="transaksi_view.php"><i class="fas fa-sliders-h"></i>List Transaction</a></li>
    <li><a href="#"><i class="fas fa-question-circle"></i>About Us</a></li>
    <li><a href="logout.php"><i class="fas fa-key"></i>Log Out</a></li>
  </ul>
</div>
 <section>
  <div class="box">
    <table>
      <td>
    <div class="card">
        <img src="image/nabil.jpg">
        <div class="details">
            <h2>QmYuDhIoD</h2>
            <p>Nabil Muthi Maulani</p>
        </div>
        <p><a href='http://instagram.com/nabilmuthi77'>contact me</a></p>
    </div>
    </td>
    <td>
    <div class="card">
        <img src="image/yori.png">
        <div class="details">
            <h2>Hermalia</h2>
            <p>Hermalia Mayori</p>
        </div>
        <p><a href='http://instagram.com/iam.flowry_'>contact me</a></p>
    </div>
    </td>
    <td>
    <div class="card">
        <img src="image/nina.jpeg">
        <div class="details">
            <h2>ninaamln</h2>
            <p>Nina Amelina</p>
        </div>
        <p><a href='http://instagram.com/ninaamlnaa'>contact me</a></p>
    </div>
    </td>
    <td>
    <div class="card">
        <img src="image/putri.jpeg">
        <div class="details">
            <h2>putrinur</h2>
            <p>Putri Nurul</p>
        </div>
        <p><a href='http://instagram.com/kharraii_05'>contact me</a></p>
    </div>
    </td>
  </table>
  </div>
 </section>

  </body>
</html>
