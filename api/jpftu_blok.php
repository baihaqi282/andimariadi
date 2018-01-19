<?php include "../koneksi.php";?>
<?php
$data = $_POST['data'];
$nama = $_POST['nama'];
if ($data == 'toko') {
	$data = mysqli_query($koneksi, "SELECT * FROM `toko` WHERE `id_toko`='$nama'");
	foreach ($data as $value) {
		echo $value['id_blok'];
	}
} elseif ($data == 'los') {
	$data = mysqli_query($koneksi, "SELECT * FROM `los` WHERE `id_los`='$nama'");
	foreach ($data as $value) {
		echo $value['id_blok'];
	}
} else {
	$data = mysqli_query($koneksi, "SELECT * FROM `bak` WHERE `id_peti`='$nama'");
	foreach ($data as $value) {
		echo $value['id_blok'];
	}
}
?>