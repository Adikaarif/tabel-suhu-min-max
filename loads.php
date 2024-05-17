<link href="css/style.css" rel="stylesheet">
<link href="css/style2.css" rel="stylesheet">
<link rel="stylesheet" href="suhu.css">

<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
require_once('koneksi.php');
$query1 = "SELECT * FROM logs ORDER BY no DESC LIMIT 1 ";
$result = mysqli_query($conn, $query1);

$no = 1;
while ($data = mysqli_fetch_array($result)) {
?>
<p class="temperature1 ubuntu-bold"><?php echo $data['kelembapan'] ?>%</p>
<?php
} ?>