<?php
require 'koneksi.php';

$id_user = $_SESSION['user']['id'];

$id = $_POST['id'];
$sampai = $_POST['sampai'];
$pinjam = $_POST['pinjam'];
$id = $_POST['id'];

$sql = mysqli_query($conn,"INSERT INTO tbl_pesanan  SET
pinjam = '$pinjam',
kembali = '$sampai',
id_user = $id_user,
id_mobil = $id
");

echo " 
<script>
alert('Terima kasih sudah Booking')
location = 'cars.php'
</script>
";