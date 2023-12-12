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
                  <h4 class="card-title">Tambah Data</h4>
                  <form method="POST" action="prosesTambah.php" enctype="multipart/form-data"  class="forms-sample">
                    
                    <div class="form-group">
                      <label for="exampleInputName1">Merk</label>
                      <input type="text" class="form-control" name="merk" id="exampleInputName1" placeholder="Merk">
                    </div>

                    <button type="submit" name="tambah" class="btn btn-primary mr-2">Tambah</button>
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

