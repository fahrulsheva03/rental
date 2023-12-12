<?php

require '../../koneksi.php';

if(isset($_POST['tambah'])){
    $nama = $_POST['nama'];
    $warna = $_POST['warna'];
    $dd = $_POST['dd'];
    $kursi = $_POST['kursi'];
    $tahun = $_POST['tahun'];
    $harga = $_POST['harga'];
    $id_merk = $_POST['merk'];

    $gambar =  upload();
    if( !$gambar ) {
        return false;
    }
  
    

    $sql = mysqli_query($koneksi , "INSERT INTO tbl_mobil SET
    nama = '$nama',
    warna = '$warna',
    dd = '$dd',
    kursi = '$kursi',
    tahun = '$tahun',
    harga = '$harga',
    gambar = '$gambar',
    merk = '$id_merk'
    ");

    if($sql){
        echo "
        <script>
        alert('Berhasil Tambah Data')
        </script>
        ";
        header('Location:../../mobil.php ');
    }else{
        echo "
        <script>
        alert('Gagal Tambah Data')
        </script>
        ";
    }
}

function upload(){
    $namaFile = $_FILES['gambar']['name'];
    $ukuranFIle = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmpName = $_FILES['gambar']['tmp_name'];

    //cek apakah ada gambar yg di upload
    if( $error === 4 ) {
        echo "<script>
            alert('pilih gambar terlrbih dahulu');
            </script>";

        return false;
    }

    // cek apakah yg di upload adalah gambar
    $ekstensiGambarValid = ['jpg', 'png', 'jpeg'];
    $ekstensiGambar = explode('.', $namaFile);
    $ekstensiGambar = strtolower(end($ekstensiGambar));
    // if( !in_array($ekstensiGambar, $ekstensiGambarValid)){
    //     echo "<script>
    //         alert('bukan gambar yang anda uoload');
    //         </script>";

    //     return false;
    // }

    //cek ukuran file jika besar
    if ( $ukuranFIle > 2000000 ) {
        echo "<script>
            alert('ukuran gambar terlalu besar');
            </script>";

        return false;      
    }

    //lolos pengecekan, gambar siap upload
    //generate nama gambar baru
    $namaFileBaru = uniqid();
    $namaFileBaru .= '.'; 
    $namaFileBaru .= $ekstensiGambar; 

    move_uploaded_file($tmpName, '../../assets/img/' . $namaFileBaru);

    return $namaFileBaru;
}
