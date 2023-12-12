<?php

require '../../koneksi.php';

$id = $_GET['id'];

mysqli_query($koneksi , "DELETE FROM tbl_akun WHERE id = $id");

header('Location:../../user.php ');