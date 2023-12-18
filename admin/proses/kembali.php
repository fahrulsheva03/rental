<?php 

include '../koneksi.php';
$id = $_POST['id'];


$data = mysqli_query($koneksi , "SELECT * FROM tbl_pesanan WHERE id_pesanan = $id");
$d = mysqli_fetch_assoc($data);

if(isset($_POST['kembali'])){
    $mobil_kembali = $_POST['mobil_kembali'];

    if($mobil_kembali > $d['kembali']){
        $denda = 10000;
        echo "
        <script>
        alert('Anda Melewati Batas pengembalian Mobil')
        </script>
        ";
    }else{
        $denda = 0;
        echo "
            <script>
            alert('Mobil Aman Dari Denda')
            </script>
            ";
    }

    mysqli_query($koneksi,"UPDATE tbl_pesanan SET
    denda = $denda,
    status = 1

    WHERE
    id_pesanan = $id

    ");


            echo "
            <script>
            location = '../pemesanan.php'
            </script>
            ";
    

}

        