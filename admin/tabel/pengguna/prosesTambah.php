<?php

require '../../koneksi.php';

if(isset($_POST['tambah'])){
    $nama = $_POST['nama'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $alamat = $_POST['alamat'];
    $password = $_POST['password'];
    $gambar =  upload();
    if( !$gambar ) {
        return false;
    }
    

    $sql = mysqli_query($koneksi , "INSERT INTO tbl_akun SET
    nama_user = '$nama',
    username = '$username',
    email = '$email',
    alamat = '$alamat',
    password = '$password',
    foto = '$gambar'
    ");

    if($sql){
        echo "
        <script>
        alert('Berhasil Tambah Data')
        </script>
        ";
        header('Location:../../user.php ');
    }else{
        echo "
        <script>
        alert('Gagal Tambah Data')
        </script>
        ";
    }
}

function upload(){
    $namaFile = $_FILES['foto']['name'];
    $ukuranFIle = $_FILES['foto']['size'];
    $error = $_FILES['foto']['error'];
    $tmpName = $_FILES['foto']['tmp_name'];

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
