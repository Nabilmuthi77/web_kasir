<?php
//lebih rinci alternatif nabil :)
/*
$host = "localhost";
$username = "root";
$password = "";
$database = "web";
$koneksi = mysqli_connect($host, $username, $password, $database);

*/

//lebih ringkas alternatif nabil :)
$koneksi = mysqli_connect("localhost", "root", "", "web");

//buat ngecek apakah sudah terkoneksi dengan database? kalau sudah terkoneksi, langsung matiin pake komentar kalau engga ntar bakal muncul terus notifnya wkwkwk :D
/*
if(!$koneksi) {
    die("<script>alert('Gagal terkoneksi dengan database :( ')</script>");
}else{
    echo "<script>alert('Berhasil terkoneksi dengan database :) ')</script>";
}
*/

?>