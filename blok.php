<?php include "header.php";
include "koneksi.php";?>

<div class=" container-scroller">
    <!-- partial:partials/_navbar.html -->
<?php include "navbar.php";?> 
 <div class="container-fluid">
      <div class="row row-offcanvas row-offcanvas-right">
<?php include "sidebar.php";?>	  
	  <div class="content-wrapper">
	  <h3 class="page-heading mb-4">Data Blok</h3>
	  <div class="row mb-2">
            <div class="col-lg-10">
              <div class="card">
                <div class="card-body">
				<?php
$cari = mysqli_query ($koneksi, "select max(`id_blok`) as kd from blok");
$tm_cari = mysqli_fetch_array ($cari);
$kode = substr($tm_cari['kd'],1,2);
$tambah = $kode+1;
if ($tambah<10){
$ed = "B0".$tambah;
}else {
$ed ="B".$tambah;
}
 //.koding simpan
if (isset($_POST['add'])) {
	$id = $_POST['id'];
	$nama = $_POST['nama'];
	
  $search = mysqli_query($koneksi, "SELECT * FROM `blok` WHERE `nama_blok`='$nama'");
  /*
  echo mysqli_num_rows($search);
  */
  if (mysqli_num_rows($search) > 0) {
    echo '<script type="text/javascript">alert("Data sudah ada")
        </script>';
        echo '<meta http-equiv="refresh" content="0; url=./lapblok.php" >'; //coding refresh
  } else {
    if ($id != '') {
      $insert = mysqli_query($koneksi, "INSERT INTO blok (`id_blok`,`nama_blok`) 
      VALUES ('$id','$nama')") or die(mysqli_error());
      
          if($insert) {
        echo '<script type="text/javascript">alert("Data Berhasil disimpan") </script>';
        echo '<meta http-equiv="refresh" content="0; url=./lapblok.php" >'; //coding refresh
        
      } else {
        echo '<script type="text/javascript">alert("Data gagal disimpan")
        </script>';
        
        echo '<meta http-equiv="refresh" content="0; url=./lapblok.php" >'; //coding refresh
      }
    }
  }

}
$now = strtotime(date("Y-m-d"));
$maxage = date("Y-m-d", strtotime('- 16 year', $now));
$minage = date("Y-m-d", strtotime('- 40 year', $now));
?>
          <form class="form" action="" method="post">
                <div class="form-group"   >
                	<label class="col-sm-3 control-label">ID Blok</label>
                    <div class="col-sm-4">
                    	<input type="text" name="id" class="form-control" placeholder="ID Blok" required=""  value="<?php echo $ed;?>" readonly>
                       </div>
					   <label class="col-sm-3 control-label">Nama Blok</label>
                    <div class="col-sm-4">
                    	<input type="text" name="nama" class="form-control" placeholder="Nama Blok" required>
                       </div>
                       </div>
					   
                       <div class="form-group">
                       <div class="col-sm-3">
                       <button type="submit" name="add" class="btn btn-primary"><span class="fa fa-save"> Simpan</span></button>
                       <a href="lapblok.php" type="button" class="btn btn-danger mr-2"><span class="fa fa-remove"> Batal</span></a>
                       </div>
                       </div>
               </form>
        </div>
    </div>
	</div>
	</div>
	</div>
	
        <!-- partial:partials/_footer.html -->
</body>
<?php include "footer.php";?>
<script src="node_modules/jquery/dist/jquery.min.js"></script>
  <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
  <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
  <script src="node_modules/chart.js/dist/Chart.min.js"></script>
  <script src="node_modules/perfect-scrollbar/dist/js/perfect-scrollbar.jquery.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB5NXz9eVnyJOA81wimI8WYE08kW_JMe8g&callback=initMap" async defer></script>
  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/misc.js"></script>
  <script src="js/chart.js"></script>
  <script src="js/maps.js"></script>
       