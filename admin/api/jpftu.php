<?php include "../koneksi.php";?>
<option value="">Pilih</option>
<?php
$data = $_POST['data'];
if ($data == 'toko') {
	$data = mysqli_query($koneksi, "SELECT * FROM `toko`");
	foreach ($data as $value) {
		echo '<option value="' . $value['id_toko'] . '">' . $value['nama_toko'] . '</option>';
	}
} elseif ($data == 'los') {
	$data = mysqli_query($koneksi, "SELECT * FROM `los`");
	foreach ($data as $value) {
		echo '<option value="' . $value['id_los'] . '">' . $value['nama_los'] . '</option>';
	}
} else {
	$data = mysqli_query($koneksi, "SELECT * FROM `bak`");
	foreach ($data as $value) {
		echo '<option value="' . $value['id_peti'] . '">' . $value['nama_peti'] . '</option>';
	}
}

//print_r($_POST);
?>