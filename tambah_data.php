<?php
include 'koneksi.php';

function tambahData($nama, $umur) {
    global $conn;
    $query = "INSERT INTO mahasiswa (nama, umur) VALUES ('$nama', '$umur')";
    if (mysqli_query($conn, $query)) {
        echo "Data berhasil ditambahkan!";
    } else {
        echo "Gagal menambahkan data: " . mysqli_error($conn);
    }
}

tambahData("Andi", 20);
?>