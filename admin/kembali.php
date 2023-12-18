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
          <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Kembali Mobil</h4>
                  <?php  $id = $_GET['id']; ?>
                  <form method="POST" action="proses/kembali.php"  class="forms-sample">

                  <input type="id" hidden class="form-control" value="<?= $id?>" name="id" id="exampleInputName1" 

                    <div class="form-group">
                      <label for="exampleInputName1">Masukan Tanggal Kembali Nya Mobil</label>
                      <input type="date" class="form-control" name="mobil_kembali" id="exampleInputName1" 
                      placeholder="Kembali">
                    </div>
                    
                    <button type="submit" name="kembali" class="btn btn-primary mr-2">Kembali</button>
                  </form>
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

