<?php

require '../../koneksi.php';

$id = $_GET['id'];

mysqli_query($koneksi , "DELETE FROM tbl_mobil WHERE id = $id");

header('Location:../../mobil.php ');