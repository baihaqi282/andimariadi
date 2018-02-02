<?php include "header.php";
include "koneksi.php";
include "library.php";
$ud1 = $_GET['id'];?>

<div class=" container-scroller">
    <!-- partial:partials/_navbar.html -->
<?php include "navbar.php";?> 
 <div class="container-fluid">
      <div class="row row-offcanvas row-offcanvas-right">
<?php include "sidebar.php";?>	  
	  <div class="content-wrapper">
          <h3 class="page-heading mb-4">Transaksi JPFTU (Jasa Pelayanan Fasilitas Tempat Usaha)</h3>
          <div class="row mb-2">
            <div class="col-lg-10">
              <div class="card">
                <div class="card-body">
				<?php 
$ubah = mysqli_query ($koneksi, "select * from jpftu where id ='$ud1'");
$data = mysqli_fetch_array ($ubah);
?>

<?php
if (isset($_POST['edt'])) {
	
	$tgl = $_POST['tgl'];
	$nama = $_POST['nama'];
	$np = $_POST['np'];
	$bk = $_POST['bk'];
	$bln = $_POST['bln'];
	$pkk = $_POST['pkk'];
	$dnd = $_POST['dnd'];
	$ttl = $_POST['ttl'];
	
	$cek = mysqli_query($koneksi, "select * from jpftu where id='$data[0]'"); //cek data yg mau diedit
	
  if (mysqli_num_rows($cek) !=0) {
		$edit = mysqli_query($koneksi, "UPDATE `jpftu` set  `tgl`='$tgl',`jenis_jpftu`='$nama',`id_`='$np',`idindeks`='$bk',`bulan`='$bln',`retribusi`='$pkk',`denda`='$dnd',`total`='$ttl' where `id`='$ud1'") 
		or die (mysqli_error());
		
				if($edit) {
			echo '<script type="text/javascript">alert("Data Berhasil disimpan") </script>';
			echo '<meta http-equiv="refresh" content="0; url=./lapjpftu.php" >'; //coding refresh
			
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
                	<label class="col-sm-3 control-label">No</label>
                    <div class="col-sm-2">
                    	<input type="text" name="id" class="form-control" placeholder="" required=""  value="<?php echo $data[0];?>" readonly>
                       </div>
					   <label class="col-sm-3 control-label">Tanggal</label>
                    <div class="col-sm-4"> 
                        <input type="date" name="tgl" value="<?php echo $data[1]?>"  class="input-group form-control" placeholder="YYYY-mm-dd" required readonly>
                        </div>
					   <label class="col-sm-3 control-label">Jenis</label>
                    <div class="col-sm-3">
                    	<select name="nama" id="jenis" class="form-control" placeholder="Nama Jenis" required="" span="label label-success">
						<option required="required" value="<?php echo $data[2];?>">Pilih</option>
            <option value="toko">Toko</option>
            <option value="los">Los</option>
            <option value="bak">Peti</option>
						</select>
                       </div>
					   <label class="col-sm-3 control-label">Nama</label>
					   <div class="col-sm-5">
                    <select class="form-control" span="label label-success" name="np" required="required" id="nama_anu">
					<option required="required" value="<?php echo $data[3];?>">Pilih</option>
					</select>
					</div>
					<label class="col-sm-3 control-label">Blok</label>
					   <div class="col-sm-5">
						<input type="text" name="bk" class="form-control" placeholder="Blok" id="nama"   value="<?php echo $data[4];?>">
					</div>
					   <label class="col-sm-3 control-label">Pembayaran Bulan</label>
                    <div class="col-sm-4">
                    	<input type="text" name="bln" class="form-control" placeholder="Bulan" value="<?php echo date('M');?>" / readonly>
                       </div>
					   <label class="col-sm-3 control-label">Pokok</label><div class="col-sm-5"><a class="fa fa-arrow-circle-right">Toko : 200.000/Los : 100.000/Peti : 100.000 + PPN 10%</a></div>
				        <div class="col-sm-2">
                    <input type="text" name="pkk" class="form-control" placeholder="-" id="pokok" value="<?php echo $data[6];?>">
						</div>
						
						
						<label class="col-sm-3"></label>
						<div class="form-group">
						<div class="col-sm-3">
						<button type="button" name="hitung" id="rppn" class="btn btn-info mr-2"><span class="fa fa-table">Hitung</span></button>
						</div>
						</div>
					  
						<label class="col-sm-3 control-label">Denda</label><div class="col-sm-5"><a class="fa fa-arrow-circle-right">Terhitung Dari Tanggal 23 perBulan</a></div>
				        <div class="col-sm-2">
						<?php
						//bikin denda otomatis
						if(date('d') > 22){
							$denda = '6000';
						} else {
							$denda = '';
						}
						?>
                    <input type="text" name="dnd" id="denda" class="form-control" placeholder="-" value="<?php echo $denda;?>" readonly>
						</div>
						<label class="col-sm-3 control-label">Total</label>
				        <div class="col-sm-2">
                    <input type="text" name="ttl" id="ttl" class="form-control" placeholder="-"  value="<?php echo $data[8];?>" readonly>
						</div>
                       </div>
					   
                       <div class="form-group">
                       <div class="col-sm-3">
                       <button type="submit" name="edt" class="btn btn-primary"><span class="fa fa-save"> Simpan</span></button>
                       <a href="lapjpftu.php" type="button" class="btn btn-danger mr-2"><span class="fa fa-remove"> Batal</span></a>
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
<script type="text/javascript">
  $(document).ready(function(){
    $("#jenis").on("change", function() {
      var data = $(this).val();
      //alert(data);
      if (data == 'toko') {
        $.ajax({
          type: 'POST',
          url: 'api/jpftu.php',
          data: 'data=' + data,
          success:function(data) {
            $("#nama_anu").html(data);
          }
        })
        //alert('sip')
      } else if(data == 'los') {
        $.ajax({
          type: 'POST',
          url: 'api/jpftu.php',
          data: 'data=' + data,
          success:function(data) {
            $("#nama_anu").html(data);
          }
        })
        //alert('kada sip');
      } else {
        $.ajax({
          type: 'POST',
          url: 'api/jpftu.php',
          data: 'data=' + data,
          success:function(data) {
            $("#nama_anu").html(data);
          }
        })
        //alert('anu');
      }
    });

    $("#nama_anu").on("change", function() {
      var data = $("#jenis").val();
      var nama = $(this).val();
      //alert(data);
      $.ajax({
        type: 'POST',
        url: 'api/jpftu_blok.php',
        data: 'data=' + data +'&nama=' + nama,
        success:function(data) {
          $("#nama").val(data);
          //alert(data);
        }
      });
    });
	
	$("#rppn").on('click', function() {
		var pokok = $("#pokok").val();
		var denda = $("#denda").val();
		var a = pokok * (10/100);
		var c = parseInt(pokok)+parseInt(a);
		if (<?php echo date('d');?> > 22) {
			$("#ttl").val(parseInt(c)+parseInt(denda));
		} else {
			$("#ttl").val(c);
		}
		
	});
	$("#radmin").on('click', function() {
		var pokok = $("#pokok").val();
		var denda = $("#denda").val();
		var a = pokok * (11.5/100);
		var c = parseInt(pokok)+parseInt(a);
		if (<?php echo date('d');?> > 22) {
			$("#ttl").val(parseInt(c)+parseInt(denda));
		} else {
			$("#ttl").val(c);
		}
	});
  })
 
</script>