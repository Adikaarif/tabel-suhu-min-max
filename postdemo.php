<?php
	include "koneksi.php";
    
	// Create connection
    $conn = mysqli_connect($servername, $username, $password, $database);
	$sql = "SELECT * FROM logs WHERE 1 ORDER BY id DESC";
    // Check connection
    if ($conn->connect_error) {
        die("Database Connection failed: " . $conn->connect_error);
    }
 
    // Get current date and time
    date_default_timezone_set('Asia/Jakarta'); 
	$seminggu = array("Minggu","Senin","Selasa","Rabu","Kamis","Jumat","Sabtu");
	$hari = date("w");
	$hari_ini = $seminggu[$hari];
    $tgl_sekarang = date("ymd");
    $jam_sekarang = date("H:i:s");
 
    if (!empty($_POST['suhu']) && !empty($_POST['kelembapan']) && !empty($_POST['asap'])) {
    	$suhu 		= $_POST['suhu'];
		$kelembapan = $_POST['kelembapan'];
    	$asap 		= $_POST['asap'];
 
	    $sql = "INSERT INTO logs (tanggal, hari, waktu, suhu, kelembapan, asap)
		VALUES ('".$tgl_sekarang."',  '".$hari_ini."', '".$jam_sekarang."','".$suhu."','".$kelembapan."','".$asap."')";
 
		if ($conn->query($sql) === TRUE) {
		    echo "OK";
		} else {
		    echo "Error: " . $sql . "<br>" . $conn->error;
		}
	} else {
        echo "Data is incomplete. Some values are missing.";
    }
 
	$conn->close();
?>
