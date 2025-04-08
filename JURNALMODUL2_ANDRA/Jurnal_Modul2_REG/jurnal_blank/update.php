<?php
include 'connect.php';

// Cek Apakah ada data yang dikirim
if (isset($_POST['update'])) {
    $id = $_GET['id'];
    $judul = $_POST['Judul'];
    $penulis = $_POST['Penulis'];
    $tahun_terbit = $_POST['Tahun'];    


    // Buatlah query untuk update data
    $query = "UPDATE tb_buku SET
            Judul = '$judul',
            Penulis = '$penulis',
            Tahun = '$tahun_terbit'
            WHERE id = '$id'";

    $update = mysqli_query($conn, $query);

    if (mysqli_affected_rows($conn) > 0) {
        header("location: katalog_buku.php");
    } else {
        echo "<script>alert('Data gagal ditambahkan');</script>";
    }
}
?>