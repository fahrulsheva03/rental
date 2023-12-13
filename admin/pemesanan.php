<!DOCTYPE html>
<html lang="en">

<?php
    require 'components/head.php';
?>
<body>
  
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <?php 
    require 'components/nav.php';
    ?>

    <!-- partial -->

    <div class="container-fluid page-body-wrapper">

      <!-- partial:partials/_sidebar.html -->
      <?php require 'components/side.php'; 
      ?>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
          <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Tabel Pemesanan</h4>
                  <div class="hilang">
                  </div>
                  
                  <div class="table-responsive">
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th>Tanggal Pinjam</th>
                          <th>Tanggal Kembali</th>
                          <th>Denda</th>
                          <th>User</th>
                          <th>Jenis Mobil</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>

                          <?php
                          require 'koneksi.php';
                          $sql = mysqli_query($conn , "SELECT * FROM tbl_pesanan
                          JOIN 
                          tbl_mobil
                          ON
                          tbl_pesanan.id_mobil = tbl_mobil.id 
                          ");
                          while ($d = mysqli_fetch_array($sql)){
                          ?>

                        <tr>
                          <td><?= $d['pinjam'] ?></td>
                          <td><?= $d['kembali'] ?></td>
                          <td><?= $d['denda'] ?></td>
                          <td><?= $d['id_user'] ?></td>
                          <td><?= $d['nama'] ?></td>
                          <td>
                            <a href="tabel/merk/update.php?id=<?= $d['id'] ?>">
                                <label class="badge badge-warning">Update</label>
                            </a>
                            <a href="tabel/merk/hapus.php?id=<?= $d['id'] ?>">
                                <label class="badge badge-danger">Hapus</label>
                            </a>
                        </td>
                        <?php } ?> 
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <?php require 'components/footer.php'; ?>
</body>

</html>

