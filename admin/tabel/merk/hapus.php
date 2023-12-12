<?php

require '../../koneksi.php';

$id = $_GET['id'];

mysqli_query($koneksi , "DELETE FROM tbl_merk WHERE id_merk = $id");

header('Location:../../merk.php ');