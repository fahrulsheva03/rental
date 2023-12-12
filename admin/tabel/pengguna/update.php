 <!DOCTYPE html>
<html lang="en">

<?php
    require '../head.php';
?>
<body>
  
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <?php 
    require '../nav.php';
    ?>

    <!-- partial -->

    <div class="container-fluid page-body-wrapper">

      <!-- partial:partials/_sidebar.html -->
      <?php require '../side.php'; 
      ?>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
          <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Update Data</h4>
                <?php
                require '../../koneksi.php';
                $id = $_GET['id'];
                $sql = mysqli_query($koneksi , "SELECT * FROM tbl_akun WHERE id = $id");
                $d = mysqli_fetch_assoc($sql);
                ?>
                  <form method="POST" action="prosesUpdate.php" enctype="multipart/form-data"  class="forms-sample">
                  <input type="text" hidden class="form-control" name="id" id="exampleInputName1" value="<?= $d['id'] ?>" placeholder="Merk">
                  <input type="text" hidden class="form-control" name="fotoLama" id="exampleInputName1" value="<?= $d['foto'] ?>" placeholder="Merk">

                  <div class="form-group">
                      <label for="exampleInputName1">Nama</label>
                      <input type="text" class="form-control" name="nama" value="<?= $d['nama'] ?>" id="exampleInputName1" 
                      placeholder="Nama">
                    </div>
                    
                    <div class="form-group">
                      <label for="exampleInputName1">Username</label>
                      <input type="text" class="form-control" name="username" value="<?= $d['username'] ?>" id="exampleInputName1" 
                      placeholder="Username">
                    </div>
                    
                    <div class="form-group">
                      <label for="exampleInputName1">Gmail</label>
                      <input type="email" class="form-control" name="email" value="<?= $d['email'] ?>" id="exampleInputName1" 
                      placeholder="Gmail">
                    </div>
                    
                    <div class="form-group">
                      <label for="exampleInputName1">Alamat</label>
                      <input type="text" class="form-control" name="alamat" value="<?= $d['alamat'] ?>" id="exampleInputName1" 
                      placeholder="Alamat">
                    </div>
                    
                    <div class="form-group">
                      <label for="exampleInputName1">Password</label>
                      <input type="password" class="form-control" name="password" value="<?= $d['password'] ?>" id="exampleInputName1" 
                      placeholder="Password">
                    </div>
                    
                    <div class="form-group">
                      <label for="exampleInputName1">Foto</label>
                      <input type="file" class="form-control" name="foto" value="<?= $d['foto'] ?>" id="exampleInputName1" 
                      placeholder="Foto">
                    </div>

                    <button type="submit" name="edit" class="btn btn-primary mr-2">Update</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <?php require '../footer.php'; ?>
</body>

</html>

