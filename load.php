<link href="css/style.css" rel="stylesheet">
<link href="css/style2.css" rel="stylesheet">
<link rel="stylesheet" href="suhu.css">

<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
require_once('koneksi.php');

$query1 = "SELECT * FROM logs ORDER BY no DESC LIMIT 1";
$result = mysqli_query($conn, $query1);

if (!$result) {
    die('Query Error: ' . mysqli_error($conn)); // Menampilkan pesan error jika query gagal
}

if (mysqli_num_rows($result) > 0) { // Memeriksa apakah query berhasil dan menghasilkan setidaknya satu baris data
    $data = mysqli_fetch_array($result); // Mengambil baris data terbaru
    $temperature = $data['suhu']; // Mendapatkan nilai suhu
?>
    <!-- Melakukan pengecekan suhu dan menampilkan ikon serta deskripsi sesuai kondisi suhu -->
    <?php
    if ($temperature < 25) {
    ?>
        <img class="temp" src="icon/animated/snowy-6.svg">
        <p class="ubuntu-bold2">Dingin</p>
        <!-- Menampilkan ikon dan deskripsi cuaca untuk suhu < 25 -->
    <?php
    } elseif ($temperature >= 25 && $temperature <= 30) {
    ?>
        <img class="temp" src="icon/animated/cloudy-day-1.svg">
        <p class="ubuntu-bold2">Hangat</p>
        <!-- Menampilkan ikon dan deskripsi cuaca untuk suhu 25-30 -->
    <?php
    } elseif ($temperature > 30) {
    ?>
        <img class="temp" src="icon/animated/day.svg">
        <p class="ubuntu-bold2">Panas</p>
        <!-- Menampilkan ikon dan deskripsi cuaca untuk suhu > 30 -->
    <?php
    }
    ?>
    <p class="temperature suhu ubuntu-bold"><?php echo $temperature; ?> °C</p>


<?php
}
?>
