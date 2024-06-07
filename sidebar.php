<?php
 if(!isset($_GET['modul'])){
 $modul = "";
 }else{
$modul = $_GET['modul'];
 }
 $hak_akses = isset($_SESSION['hak_akses']) ? $_SESSION['hak_akses'] : '';
 ?>
 <ul class="nav nav-pills flex-column ms-2">
 <li class="nav-item">
 <a href="dashboard.php" class="nav-link text-white <?= $modul; ?>">
 <i class="bi bi-speedometer2 me-2"></i>Dashboard
 </a>
 </li>
 <li class="nav-item">
 <a href="?modul=akun" class="nav-link text-white <?= $modul=='akun'?'active':''; ?>">
 <i class="bi bi-database-fill-gear me-2"></i></i>Data Akun
 </a>
 </li>
 <li class="nav-item">
 <a href="#transaksiCollapse" data-bs-toggle="collapse" aria-expanded="false" class="nav-link d-flex text-white">
 <i class="bi bi-cash-stack me-2"></i>
 Transaksi
 <i class="bi bi-caret-down-fill ms-auto"></i>
 </a>
 <ul class="nav nav-pills flex-column collapse ms-4 bg-white rounded p-2"id="transaksiCollapse">
 <li class="nav-item">
 <a href="?modul=pembelian" class="nav-link text-dark textdecoration-none <?= $modul=='pembelian'?'active':''; ?>">Pembelian</a>
 </li>
 <li class="nav-item">
 <a href="?modul=pembayaran" class="nav-link text-dark textdecoration-none <?= $modul=='pembayaran'?'active':''; ?>">Pembayaran</a>
 </li>
 <li class="nav-item">
 <a href="?modul=penjualan" class="nav-link text-dark textdecoration-none <?= $modul=='penjualan'?'active':''; ?>">Penjualan</a>
 </li>
 </ul>
 </li>
 <li class="nav-item">
 <a href="#dataCollapse" data-bs-toggle="collapse" aria-expanded="false"
class="nav-link d-flex text-white">
 <i class="bi bi-database-fill-gear me-2"></i>
 Master Data
 <i class="bi bi-caret-down-fill ms-auto"></i>
 </a>
 <ul class="nav nav-pills flex-column collapse ms-4 bg-white rounded p-2"id="dataCollapse">
 <li class="nav-item">
 <a href="?modul=pelanggan" class="nav-link text-dark textdecoration-none <?= $modul=='pelanggan'?'active':''; ?>">Pelanggan</a>
 </li>
 <li class="nav-item">
 <a href="?modul=barang" class="nav-link text-dark text-decorationnone <?= $modul=='barang'?'active':''; ?>">Barang</a>
 </li>
 <li class="nav-item">
 <a href="?modul=suplier" class="nav-link text-dark text-decorationnone <?= $modul=='suplier'?'active':''; ?>">Suplier</a>
 </li>
 <li class="nav-item">
 <a href="?modul=pengguna" class="nav-link text-dark text-decorationnone <?= $modul=='pengguna'?'active':''; ?>">Pengguna</a>
 </li>
 </ul>
 </li>
 <li class="nav-item">
 <a href="?modul=jurnal" class="nav-link text-white <?=
$modul=='jurnal'?'active':''; ?>">
 <i class="bi bi-clipboard2-data-fill me-2"></i>Jurnal Umum
 </a>
 </li>
</ul>
