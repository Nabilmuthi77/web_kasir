<?php
include "session.php";
include "koneksi.php";

$sql = mysqli_query($koneksi, "select * from transaksi where nota = '$_GET[kode]' ");
$data = mysqli_fetch_array($sql);

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Edit Transaction</title>
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
    <li><a href="developer.php"><i class="fas fa-question-circle"></i>About Us</a></li>
    <li><a href="logout.php"><i class="fas fa-key"></i>Log Out</a></li>
  </ul>
</div>

 <section>
 
<form action="" class="roxie" method="post">
<table align="center">
    <tr> <th colspan="2"> Edit Transaksi Steam Kendaraan </th>
    </tr>
    <tr>
    <tr>
        <td width="150"> Nota </td>
        <td> <input type="text" name="nota" value="<?php echo $data['nota']; ?>"> </td>
    </tr>
    <tr>
        <td> Nama Pelanggan </td>
        <td> <input type="text" name="nama" value="<?php echo $data['nama']; ?>"> </td>
    </tr>
    <tr>
        <td> Jenis Kendaraan </td>
        <td> <select name="jenis_kendaraan" value="<?php echo $data['jenis_kendaraan']; ?>">
            <option>Motor</option>
			<option>Mobil</option>
            </select>
        </td>
    </tr>
    <tr>
        <td> Harga </td>
        <td> <input type="text" name="harga" value=15000 readonly></td>
    </tr>
    <tr>
        <td> Bayar </td>
        <td> <input type="text" name="bayar" value="<?php echo $data['bayar']; ?>"> </td>
    </tr>
    <tr>
        <td> Kembalian </td>
        <td> <input type="text" name="kembalian" value="<?php echo $data['kembalian']; ?>"> </td>
    </tr>
    <tr>
        <td> Tanggal </td>
        <td> <input type="date" name="tanggal" value="<?php echo $data['tanggal']; ?>"> </td>
    </tr>
    <tr>
        <td><input type="reset" name="reset" value="reset"></td>
        <td><input type="submit" name="proses_transaksi" value="Simpan"></td>
    </tr>
 
</table>
</form>

 </section>

  </body>
</html>

<?php

if(isset($_POST['proses_transaksi'])){
    mysqli_query($koneksi, "update transaksi set
    nama = '$_POST[nama]',  
    jenis_kendaraan = '$_POST[jenis_kendaraan]',
    harga = '$_POST[harga]',
    bayar = '$_POST[bayar]',
    kembalian = '$_POST[kembalian]',
    tanggal = '$_POST[tanggal]' where nota = '$_GET[kode]' ");

    echo "<script>alert('Data berhasil dirubah :) ')</script>";
    echo "<meta http-equiv=refresh content=0;URL='transaksi_view.php'>";
}


?>
