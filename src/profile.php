
<!DOCTYPE HTML>
<html>

<?php

include 'db.php';
include 'macro/header.php';

?>

<body>

<?php
if (isset($_SESSION['user_id']) && isset($_GET['id'])) {
	$result = mysqli_query($link, "SELECT * FROM user WHERE id='".$_GET['id']."'");
	if (mysqli_num_rows($result) == 1) {
		$row = mysqli_fetch_array($result);
		echo "<h1>".$row['username']."</h1><br />";
		echo "<h2>Fullname: ".$row['nama']."<br />";
		echo "<h2>Email: ".$row['email']."<br />";
		echo "<h2>Alamat: ".$row['alamat']."<br />";
		echo "<h2>Provinsi: ".$row['provinsi']."<br />";
		echo "<h2>Kota: ".$row['kota']."<br />";
		echo "<h2>Kodepos: ".$row['kodepos']."<br />";
		echo "<h2>Phone: ".$row['hp']."<br />";
		echo "<h2>Jumlah: ".$row['transaksi']."<br />";
	}
	if (isset($_SESSION['user_id']) && $_GET['id'] == $_SESSION['user_id']) {
		echo "<button type=\"button\" onclick=\"location.href='editprofile.php';\">Ubah profil</button><br />";
		echo "<button type=\"button\" onclick=\"location.href='editpass.php';\">Ganti kata sandi</button><br />";
		echo "<button type=\"button\" onclick=\"location.href='regcard.php';\">Registrasi kartu kredit</button><br />";
	}
} else {
	header("Location: register.php");
}
?>
</body>
</html>