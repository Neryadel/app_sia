<?php
 session_start();

 // Hapus semua data sesi
 session_unset();

 // Hapus sesi dari penyimpanan
 session_destroy();

 // Redirect ke halaman login atau halaman lainnya
 header("location: index.php");
 exit;
 ?>