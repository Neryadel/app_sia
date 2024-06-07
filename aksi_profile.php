<?php
if(isset($_POST['submit'])) {
    session_start();
    include_once('../../koneksi.php');
    $username = $_POST['username'];
    $nama_lengkap = $_POST['nama_lengkap'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password_baru = $_POST['password_baru'];
    $password_ulang = $_POST['password_ulang'];

    if (empty($password)){
        $query = "UPDATE tbl_pengguna SET nama_lengkap='$nama_lengkap', email='$email' WHERE username='$username";
        $exec = mysqli_query($koneksi, $query);
        if($exec) {
            $_SESSION['pesan'] = "Data profile telah diperbaharui";
            header('location: ../../dashboard.php?modul=profile');
        }else{
            $_SESSION['pesan'] = "Data profile gagal diperbaharui";
            header('location: ../../dashboard.php?modul=profile');
        }
    }else{
        $query = "SELECT * FROM tbl_pengguna WHERE username='$username'";
        $exec = mysqli_query($koneksi, $query);
 $data = mysqli_fetch_array($exec);
 if(password_verify($password, $data['password'])){
 if($password_baru == $password_ulang){
 $password = password_hash($password_baru, PASSWORD_BCRYPT);
 $query = "UPDATE tbl_pengguna SET password='$password',
nama_lengkap='$nama_lengkap', email='$email' WHERE username='$username'";
 $exec = mysqli_query($koneksi, $query);
 if($exec){
 $_SESSION['pesan'] = "Data profile telah diperbaharui";
 header('location:../../dashboard.php?modul=profile');
 }
 }else{
 $_SESSION['pesan'] = "Password baru tidak sesuai";
 header('location:../../dashboard.php?modul=profile');
 }
 }else{
 $_SESSION['pesan'] = "Password lama tidak sesuai";
 header('location:../../dashboard.php?modul=profile');
 }
 }
 header('location:../../index.php');
 }
 ?>