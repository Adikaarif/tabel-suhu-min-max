<?php
session_start();
ini_set('display_startup_errors', 1); 
ini_set('display_errors', 1);
error_reporting(-1);

// Koneksi ke database
$koneksi = mysqli_connect("103.144.209.109", "nivor", "caesar17", "admin_sija");

// Periksa koneksi
if (mysqli_connect_errno()) {
    echo "Koneksi database gagal: " . mysqli_connect_error();
    exit();
}

// Tangkap data dari formulir HTML
if (isset($_POST['send'])) {
    function getDateFormatted($format = 'Y-m-d') {
        return date($format);
    }

    $id = $_POST['id'];
    $name = $_POST['name'];
    $created = getDateFormatted();
    $password = $_POST['password'];
    $email = $_POST['email'];
    $user_type = $_POST['user_type'];

    // Buat query UPDATE
    $query = "UPDATE logs SET name='$name', created='$created', password='$password', email='$email', user_type='$user_type' WHERE id='$id'";

    // Eksekusi query
    if (mysqli_query($koneksi, $query)) {
        $_SESSION['notification'] = "1"; // Set notifikasi ke 1
        header("Location: CRUD.php");
        exit; // Pastikan untuk keluar setelah melakukan redirect
    } elseif(mysqli_error($koneksi)) {
        $_SESSION['notification'] = "2"; // Set notifikasi ke 2 jika terjadi kesalahan
        header("Location: CRUD.php");
        exit; // Pastikan untuk keluar setelah melakukan redirect
    } else {
        $_SESSION['notification'] = "0"; // Set notifikasi ke 0 jika terjadi kesalahan selain dari query
    }

}
?>

