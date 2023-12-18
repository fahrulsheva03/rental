<?php
require '../../koneksi.php';

if(isset($_POST['edit'])){
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $alamat = $_POST['alamat'];
    $password = $_POST['password'];
    $fotoLama = $_POST['fotoLama'];
    //Pengecekan kondisi user menekan tombol gambar atau tidak
    if($_FILES['foto']['error'] == 4){
        $gambar = $fotoLama;
    } else{
        $gambar = upload();
    }

    $sql = mysqli_query($koneksi , "UPDATE tbl_akun SET
    nama_user = '$nama',
    username = '$username',
    email = '$email',
    alamat = '$alamat',
    password = '$password',
    foto = '$gambar'
    WHERE
    id = $id    
    ");

if($sql){
    header('Location:../../user.php ');
}else{
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


