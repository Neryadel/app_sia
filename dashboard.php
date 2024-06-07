<?php
 session_start();
 if (!isset($_SESSION['username'])) {
 header('location: index.php');
 }else{
 include_once('koneksi.php');
 ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
       <title>SIA | Dashboard </title>
       <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" >
       <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    </head>
    <body>
<div class="container-fluid">
<div class="row">
<div class="col-md-3 text-bg-dark" style="min-height:100vh">
<div class="text-center">
<i class="bi bi-coin fs-1 text-success"></i>
<h3>Sistem Informasi Akuntansi</h3>
<hr>
</div>

<?php
include_once('sidebar.php');
?>
</div>
<div class="col-md-9">
<div class="text-end p-3">
<div class="dropdown">
<button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
<i class="bi bi-person-circle"></i>
Administrator Web
</button>
<ul class="dropdown-menu">
<li>
<a class="dropdown-item" href="?modul=profile">
<i class="bi bi-person-badge-fill"></i>
Profile
</a>
</li>
<li>
<a class="dropdown-item" href="logout.php">
<i class="bi bi-door-closed-fill"></i>
Logout
</a>
</li>
</ul>
</div>
</div>
<div class="p-3">
<?php
include_once('media.php');
?>
</div>
</div>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"crossorigin="anonymous"></script>
</body>
</html>
<?php
 }
 ?>