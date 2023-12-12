<?php
require '../../koneksi.php';

if(isset($_POST['edit'])){
    $id = $_POST['id'];
    $merk = $_POST['merk'];


    $sql = mysqli_query($koneksi , "UPDATE kedatangan SET
     merk = '$merk'
    WHERE
    id = $id
    ");

if($sql){
    header('Location:../../merk.php ');
}else{
}
}


