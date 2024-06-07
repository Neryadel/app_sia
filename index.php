<div class="card mb-3">
  <div class="card-body">
    <form method="post" action="save-suplier.php">
      <div class="row">
        <div class="mb-3 col-md-6">
          <label for="nama_suplier" class="form-label">Nama suplier</label>
          <input type="text" class="form-control" name="nama_suplier">
        </div>
        <div class="mb-3 col-md-6">
          <label for="alamat" class="form-label">Alamat</label>
          <input type="text" class="form-control" name="alamat">
        </div>
      </div>
      <div class="row">
        <div class="mb-3 col-md-6">
          <label for="telp" class="form-label">Telp</label>
          <input type="text" class="form-control" name="telp">
        </div>
        <div class="mb-3 col-md-6">
          <label for="email" class="form-label">Email</label>
          <input type="text" class="form-control" name="email">
        </div>
      </div>
      <hr>
      <div class="row">
        <div class="col text-end">
          <button class="btn btn-secondary" type="reset">Reset</button>
          <button class="btn btn-primary" type="submit">Simpan</button>
        </div>
      </div>
    </form>
  </div>
</div>

<div class="card">
  <div class="card-header">
    <h3>Data Suplier</h3>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-striped">
        <thead>
          <tr>
            <th>#</th>
            <th>Nama Suplier</th>
            <th>Alamat</th>
            <th>Telp</th>
            <th>Email</th>
            <th><i class="bi bi-gear-fill"></i></th>
          </tr>
        </thead>
        <tbody>
          <?php
          $conn = mysqli_connect("localhost", "username", "password", "database_name");
          $query = "SELECT * FROM suplier";
          $result = mysqli_query($conn, $query);
          while ($row = mysqli_fetch_assoc($result)) {
          ?>
            <tr>
              <td><?= $row['id'] ?></td>
              <td><?= $row['nama_suplier'] ?></td>
              <td><?= $row['alamat'] ?></td>
              <td><?= $row['telp'] ?></td>
              <td><?= $row['email'] ?></td>
              <td>
                <a href="#editSuplier" class="text-decoration-none" data-bstoggle="modal">
                  <i class="bi bi-pencil-square text-success"></i>
                </a>
                <a href="delete-suplier.php?id=<?= $row['id'] ?>" class="text-decoration-none">
                  <i class="bi bi-trash text-danger"></i>
                </a>
              </td>
            </tr>
          <?php
          }
          mysqli_close($conn);
          ?>
        </tbody>
      </table>
    </div>
  </div>
</div>