<?php
 if($_SERVER["REQUEST_METHOD"]=="POST"){
require_once('koneksi.php');
 session_start();
 $username = $_POST['username'];
  $password = $_POST['password'];
$query = "SELECT * FROM tb_pengguna WHERE username='$username'";
 $result = $koneksi->query($query);
 $row = $result->fetch_assoc();
 if(mysqli_num_rows($result)>0){
if(password_verify($password,$row['password'])){
 $_SESSION['username']=$row['username'];
 $_SESSION['nama_lengkap']=$row['nama_lengkap'];
 $_SESSION['jabatan']=$row['jabatan'];
 $_SESSION['hak_akses']=$row['hak_akses'];
 header('location:dashboard.php');
}else{
 $_SESSION['pesan']="username atau password tidak valid!!!";
 header('location:index.php');
 }
 }else{
 $_SESSION['pesan']="username atau password tidak valid!!!";
 header('location:index.php');
 }
 }else{
 header('location:index.php');
}

