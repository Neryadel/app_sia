<?php
 if(!isset($_GET['modul'])){
 include_once('modul/home/index.php');
 }else{
 if($_GET['modul']=="transaksi"){
 include_once('modul/transaksi/index.php');
 }elseif($_GET['modul']=="akun"){
 include_once('modul/akun/index.php');
 }elseif($_GET['modul']=="pembelian"){
 include_once('modul/pembelian/index.php');
 }elseif($_GET['modul']=="pembayaran"){
 include_once('modul/pembayaran/index.php');
 }elseif($_GET['modul']=="penjualan"){
 include_once('modul/penjualan/index.php');
 }elseif($_GET['modul']=="pelanggan"){
 include_once('modul/pelanggan/index.php');
 }elseif($_GET['modul']=="barang"){
 include_once('modul/barang/index.php');
 }elseif($_GET['modul']=="suplier"){
 include_once('modul/suplier/index.php');
 }elseif($_GET['modul']=="pengguna"){
 include_once('modul/pengguna/index.php');
 }elseif($_GET['modul']=="jurnal"){
 include_once('modul/jurnal/index.php');
 }elseif($_GET['modul']=="profile"){
 include_once('modul/profile/index.php');
 }else{
 ?>
 <div class="alert alert-info">
 <strong>Perhatian : </strong>
 Modul yang anda request tidak ada!!!
 </div>
<?php
 }
}
?>
