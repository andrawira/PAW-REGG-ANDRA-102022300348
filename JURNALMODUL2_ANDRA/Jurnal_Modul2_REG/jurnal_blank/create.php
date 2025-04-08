<?php
include 'connect.php';

// Cek Apakah ada data yang dikirim
if (isset($_POST['create'])) {

    $judul = $_POST["Judul"];
    $penulis = $_POST["Penulis"];
    $tahun_terbit = $_POST["Tahun"];




    // Definisikan query untuk insert data
    $query = "INSERT INTO db_buku (Judul, Penulis, Tahun) VALUES ('$judul', '$penulis', '$tahun' )";

    mysqli_query($conn, $query);

    if (mysqli_affected_rows($conn) > 0) {
        header("location: katalog_buku.php");
    } else {
        echo "<script>alert('Data gagal ditambahkan');</script>";
    }
}
?>