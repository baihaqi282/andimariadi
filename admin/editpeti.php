<?php include "header.php";
include "koneksi.php";
$ud1 = $_GET['id'];?>

<div class=" container-scroller">
    <!-- partial:partials/_navbar.html -->
<?php include "navbar.php";?> 
 <div class="container-fluid">
      <div class="row row-offcanvas row-offcanvas-right">
<?php include "sidebar.php";?>	  
	  <div class="content-wrapper">
          <h3 class="page-heading mb-4">Edit Data Peti</h3>
          <div class="row mb-2">
            <div class="col-lg-10">
              <div class="card">
                <div class="card-body">
				<?php 
$ubah = mysqli_query ($koneksi, "select * from bak where id_peti ='$ud1'");
$data = mysqli_fetch_array ($ubah);
?>

<?php
if (isset($_POST['edt'])) {
	
	$nama = $_POST['nama'];
	$np = $_POST['np'];
	$nb = $_POST['nb'];
	$ukrn = $_POST['ukrn'];
	$hrs = $_POST['hrs'];
	
	$cek = mysqli_query($koneksi, "select * from bak where id_peti='$data[0]'"); //cek data yg mau diedit
	
  if (mysqli_num_rows($cek) !=0) {
		$edit = mysqli_query($koneksi, "UPDATE `bak` set  `nama_peti`='$nama',`id_penyewa`='$np',`id_blok`='$nb',`ukuran`='$ukrn',`harga_sewa`='$hrs' where `id_peti`='$ud1'") 
		or die (mysqli_error());
		
				if($edit) {
			echo '<script type="text/javascript">alert("Data Berhasil disimpan") </script>';
			echo '<meta http-equiv="refresh" content="0; url=./lappeti.php" >'; //coding refresh
			
		} else {
			echo '<script type="text/javascript">alert("Data gagal disimpan")
			</script>';
		}
	} 
}

$now = strtotime(date("Y-m-d"));
$maxage = date("Y-m-d", strtotime('- 16 year', $now));
$minage = date("Y-m-d", strtotime('- 40 year', $now));
?>
                  <form class="form" action="" method="post">
                <div class="form-group"   >
                	<label class="col-sm-3 control-label">ID Peti</label>
                    <div class="col-sm-2">
                    	<input type="text" name="i" class="form-control" placeholder="ID Peti" value="<?php echo $data[0];?>" readonly>
                       </div>
					   <label class="col-sm-3 control-label">Nama Peti</label>
                    <div class="col-sm-6">
                    	<input type="text" name="nama" class="form-control" placeholder="Nama Peti" value="<?php echo $data[1];?>">
                       </div>
					   <label class="col-sm-3 control-label">Penyewa</label>
					   <div class="col-sm-5">
                    <select class="form-control" span="label label-success" name="np">
		<option target="#option1" value="<?php echo $data[2];?> ">Pilih </option>
		<?php
			$q = mysqli_query ($koneksi, "select * from `penyewa` order by `id_penyewa` ASC");
			while ($dat = mysqli_fetch_array ($q)) {
			echo '<option value="' . $dat[1]. '">' . $dat[1].'</option>';
			}
			
		?>
		</select>
		</div>
		<label class="col-sm-3 control-label">Blok</label>
					   <div class="col-sm-5">
                    <select class="form-control" span="label label-success" name="nb">
		<option target="#option2" value="<?php echo $data[3];?>">Pilih</option>
		<?php
			$r = mysqli_query ($koneksi, "select * from `blok` order by `id_blok` ASC");
			while ($dat1 = mysqli_fetch_array ($r)) {
			echo '<option value="' . $dat1[1]. '">' . $dat1[1].'</option>';
			}
			
		?>
		</select>
		</div>
					   <label class="col-sm-3 control-label">Ukuran</label>
                    <div class="col-sm-4">
                    	<input type="text" name="ukrn" class="form-control" placeholder="Ukuran" value="<?php echo $data[4];?>">
                       </div>
					   <label class="col-sm-3 control-label">Harga Sewa</label>
                    <div class="col-sm-3">
                    	<input type="text" name="hrs" class="form-control" placeholder="Harga Sewa" value="<?php echo $data[5];?>">
                       </div>
                       </div>
					   
                       <div class="form-group">
                       <div class="col-sm-3">
                       <button type="submit" name="edt" class="btn btn-primary"><span class="fa fa-save"> Simpan</span></button>
                       <a href="lappeti.php" type="button" class="btn btn-danger mr-2"><span class="fa fa-remove"> Batal</span></a>
                       </div>
                       </div>
               </form>
                </div>
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
       