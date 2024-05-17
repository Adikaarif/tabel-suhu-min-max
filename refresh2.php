 <?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
    require_once('koneksi.php');
    $query1 = "SELECT * FROM logs ORDER BY no DESC LIMIT 10"; // Mengurutkan berdasarkan tanggal dan waktu secara descending (terbalik) dan hanya mengambil 10 data teratas
    $result = mysqli_query($conn, $query1);

    $no = 1;
    while (($data = mysqli_fetch_array($result)) && ($no <= 10)) { // Memastikan perulangan berhenti setelah 10 data ditampilkan
?>
     <tr id="tabelll">
         <th scope="row"><?php echo $no; ?></th>
         <td><?php echo $data['hari']; ?></td>
         <td><?php echo $data['tanggal']; ?></td>
         <td><?php echo $data['waktu']; ?></td>
         <td><?php echo $data['suhu']; ?><span class="derajat"> °C</span></td>
         <td><?php echo $data['kelembapan']; ?></td>
         <!-- <td><?php echo $data['asap']; ?></td> -->
     <?php
        $no++;
    }
    mysqli_close($conn);
        ?>