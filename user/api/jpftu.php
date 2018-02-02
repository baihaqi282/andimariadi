<?php include "../koneksi.php";?>
<option value="">Pilih</option>
<?php
$data = $_POST['data'];
if ($data == 'toko') {
	$data = mysqli_query($koneksi, "SELECT * FROM `toko`");
	foreach ($data as $value) {
		echo '<option value="' . $value['id_toko'] . '">' . $value['id_penyewa'] . '</option>';
	}
} elseif ($data == 'los') {
	$data = mysqli_query($koneksi, "SELECT * FROM `los`");
	foreach ($data as $value) {
		echo '<option value="' . $value['id_los'] . '">' . $value['id_penyewa'] . '</option>';
	}
} else {
	$data = mysqli_query($koneksi, "SELECT * FROM `bak`");
	foreach ($data as $value) {
		echo '<option value="' . $value['id_peti'] . '">' . $value['id_penyewa'] . '</option>';
	}
}

//print_r($_POST);
?>