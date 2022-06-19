<?php 
error_reporting(0);
session_start();
include "koneksi.php";

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Register</title>
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>

<form class="box" action="" method="post">
  <h1>Register</h1>
  <input type="text" name="username" placeholder="Username"value="<?php echo $username; ?>"required>
   <input type="text" name="email" placeholder="e-mail"value="<?php echo $email; ?>"required>
    <input type="password" name="password" placeholder="Password"value="<?php echo $_POST['password']; ?>"required>
     <input type="password" name="cpassword" placeholder="Re-Password"value="<?php echo $_POST['cpassword']; ?>"required>
  <input type="submit" name="proses_register" value="Register">
  <p>Anda sudah punya akun? <a href="index.php"><b> Login </b></a></p>
</form>

  </body>
</html>

<?php

if (isset($_POST['proses_register'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $cpassword = md5($_POST['cpassword']);
 
    if ($password == $cpassword) {
        $sql = mysqli_query($koneksi, "select * from user WHERE email='$email'");
        if (!$sql->num_rows > 0) {
            $sql = mysqli_query($koneksi, "insert into user (username, email, password)
            VALUES ('$username', '$email', '$password')");
            if ($sql) {
                header("Location: index.php");
                echo "<script>alert('Selamat, registrasi anda berhasil :) ')</script>";
                $username = "";
                $email = "";
                $_POST['password'] = "";
                $_POST['cpassword'] = "";                
            }else {
                echo "<script>alert('Woops! Terjadi kesalahan.')</script>";
             }
        }else {
            echo "<script>alert('Woops! Email Sudah Terdaftar.')</script>";
         }         
    }else {
        echo "<script>alert('Maaf, Password Tidak Sesuai')</script>";
     }
}
 
?>