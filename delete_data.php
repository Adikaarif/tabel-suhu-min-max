<?php

// Cek apakah ID data telah diterima melalui metode HTTP GET
if (isset($_GET['id'])) {
    // Tangkap ID data dari parameter URL
    $id = $_GET['id'];

    // Lakukan koneksi ke database
    $koneksi = mysqli_connect("localhost", "nivor", "caesar17", "admin_sija");

    // Periksa koneksi
    if (mysqli_connect_errno()) {
        // Jika koneksi gagal, tampilkan pesan kesalahan
        echo "Koneksi database gagal: " . mysqli_connect_error();
        exit();
    }

    // Query untuk menghapus data dari database berdasarkan ID
    $query = "DELETE FROM logs WHERE id = '$id'";

    // Eksekusi query
    if (mysqli_query($koneksi, $query)) {
        // Jika penghapusan berhasil, kirim respons HTTP 200 (OK)
        http_response_code(200);
    } else {
        // Jika terjadi kesalahan, kirim respons HTTP 500 (Internal Server Error)
        http_response_code(500);
    }

    // Tutup koneksi ke database
    mysqli_close($koneksi);
} else {
    // Jika tidak ada ID data yang diterima, kirim respons HTTP 400 (Bad Request)
    http_response_code(400);
}
