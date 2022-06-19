<?php
session_start();
include "koneksi.php"

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>

<form class="box" action="" method="post">
  <h1>Login</h1>
  <input type="text" name="username" placeholder="Username">
  <input type="password" name="password" placeholder="Password">
  <input type="submit" name="proses_login" value="Login">
  <p> Anda Belum punya akun? <a href="register.php"><b> Register </b></a></p>
</form>

  </body>
</html>

<?php
// jika tidak memakai username dan password di database (alias manual) alternatif nabil :)
/*
if(isset($_POST['proses_login'])) {
    $user = "nabilmuthi77";
    $pass = "1234";

    if(($_POST['username'] == $user) && ($_POST['password'] == $pass)) {
        $_SESSION['username'] = $_POST['username'];
        echo "<meta http-equiv=refresh content=0;URL='home.php'>";
    }else {
        echo "<script>alert('Username atau Password anda salah :) ')</script>";
        echo "<meta http-equiv=refresh content=2;URL='index.php'>";
    }
}
*/

// jika tidak memakai md5 password alternatif nabil :)
/*
if(isset($_POST['proses_login'])) {
    $sql = mysqli_query($koneksi, "select * from user where username = '$_POST[username]'
    and password = '$_POST[password]' ");

    $cek = mysqli_num_rows($sql);
    if($cek > 0) {
        $_SESSION['username'] = $_POST['username'];
        echo "<meta http-equiv=refresh content=0;URL='home.php'>";
    }else {
        echo "<script>alert('Username atau Password anda salah :) ')</script>";
        echo "<meta http-equiv=refresh content=2;URL='index.php'>";
    }
}
*/

//jika memakai md5 password alternatif nabil :)

if(isset($_POST['proses_login'])) {
    $password = md5($_POST['password']);
    $sql = mysqli_query($koneksi, "select * from user where username = '$_POST[username]'
    and password = '$password' ");
    
    $cek = mysqli_num_rows($sql);
    if($cek > 0) {
        $_SESSION['username'] = $_POST['username'];
        echo "<meta http-equiv=refresh content=0;URL='home.php'>";
    }else {
        echo "<script>alert('Username atau Password anda salah :) ')</script>";
        echo "<meta http-equiv=refresh content=2;URL='index.php'>";
    }
}

?>