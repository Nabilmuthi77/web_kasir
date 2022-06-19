<?php
include "session.php";
include "koneksi.php";

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>List Transaction</title>
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
    <li><a href="#"><i class="fas fa-sliders-h"></i>List Transaction</a></li>
    <li><a href="developer.php"><i class="fas fa-question-circle"></i>About Us</a></li>
    <li><a href="logout.php"><i class="fas fa-key"></i>Log Out</a></li>
  </ul>
</div>
 <section>
 
<table align="center">
  <tr> 
    <th colspan="10" class="gg">Data Transaksi</th>
  </tr>
    <tr class="gg2">
        <th> No </th>
        <th> Nama Pelanggan </th>
        <th> Nota </th>
        <th> Jenis Kendaraan </th>
        <th> Harga </th>
        <th> Bayar </th>
        <th> Kembalian </th>
        <th> Tanggal </th>
        <th colspan="2">Aksi</th>
    </tr>

    <?php
    $no = 1;
    $ambildata1 = mysqli_query($koneksi,"select * from transaksi");
    while($tampil = mysqli_fetch_array($ambildata1)){
        echo "
        <tr>
            <td>$no</td>
            <td>$tampil[nama]</td>
            <td>$tampil[nota]</td>
            <td>$tampil[jenis_kendaraan]</td>
            <td>$tampil[harga]</td>
            <td>$tampil[bayar]</td>
            <td>$tampil[kembalian]</td>
            <td>$tampil[tanggal]</td>
            <td><a href='transaksi_edit.php?kode=$tampil[nota]'> edit </a></td>
            <td><a href='?kode=$tampil[nota]'> delete </a></td>            
        <tr> ";
        $no++;
    }
    
    ?>
    <tr class="gg3">
        <td colspan="2" align="left">Total Pelanggan</td>
        <td colspan="8"> <?php
                         //menghitung jumlah pelanggan
                            $ambildata2 = mysqli_query($koneksi, "select * from transaksi 
                            where nota >= 0 ") or die (mysqli_error($koneksi));

                            $data_pelanggan = mysqli_num_rows($ambildata2);
                            echo "$data_pelanggan Orang";
                         ?> </td>
    </tr>
    <tr class="gg4">
        <td colspan="2" align="left"> Total Pendapatan </td>
        <td colspan="8"> <?php
                         //menghitug jumlah harga (total pendapatan) 
                            $ambildata3 = mysqli_query($koneksi, "select * from transaksi");
                            $data_pendapatan = 0;
                            while($tampil2 = mysqli_fetch_array($ambildata3)) {
                                $data_pendapatan += $tampil2['harga'];
                            }echo "Rp." . number_format($data_pendapatan);
                         ?> </td>
    </tr>
</table>
</section>

  </body>
</html>


<?php

if(isset($_GET['kode'])){
    mysqli_query($koneksi,"delete from transaksi where nota ='$_GET[kode]' ");
    
    echo "<script>alert('Data berhasil terhapus :) ')</script>";
    echo "<meta http-equiv=refresh content=2;URL='transaksi_view.php'>";
}

?>

