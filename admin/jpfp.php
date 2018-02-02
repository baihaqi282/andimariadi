<?php include "header.php";
include "koneksi.php";
include "library.php"
?>

<div class=" container-scroller">
    <!-- partial:partials/_navbar.html -->
<?php include "navbar.php";?> 
 <div class="container-fluid">
      <div class="row row-offcanvas row-offcanvas-right">
<?php include "sidebar.php";?>	  
	  <div class="content-wrapper">
          <h3 class="page-heading mb-4">Transaksi JPFP (Jasa Pelayanan Fasilitas Pasar)</h3>
          <div class="row mb-2">
            <div class="col-lg-10">
              <div class="card">
                <div class="card-body">
				<?php
$cari = mysqli_query ($koneksi, "select max(`id_jpfp`) as kd from jpfp");
$tm_cari = mysqli_fetch_array ($cari);
$kode = substr($tm_cari['kd'],1,1);
$tambah = $kode+1;
if ($tambah<10){
$ed = "0".$tambah;
}else {
$ed ="C".$tambah;
}
 //.koding simpan
if (isset($_POST['add'])) {
	$id = $_POST['id'];
	$tgl = $_POST['tgl'];
	$jns = $_POST['jns'];
	$bln = $_POST['bln'];
	$pkk = $_POST['pkk'];
	$dnd = $_POST['dnd'];
	$ttl = $_POST['ttl'];
	
  if ($id != '') {
		$insert = mysqli_query($koneksi, "INSERT INTO jpfp (`id_jpfp`,`tgl`,`jenis`,`bulan`,`retribusi`,`denda`,`total`) 
		VALUES ('$id','$tgl','$jns','$bln','$pkk','$dnd','$ttl')") or die(mysqli_error());
		
				if($insert) {
			echo '<script type="text/javascript">alert("Data Berhasil disimpan") </script>';
			echo '<meta http-equiv="refresh" content="0; url=./lapjpfp.php" >'; //coding refresh
			
		} else {
			echo '<script type="text/javascript">alert("Data gagal disimpan")
			</script>';
			
			echo '<meta http-equiv="refresh" content="0; url=./lapjpfp.php" >'; //coding refresh
		}
	}  else {
		echo '<script type="text/javascript">alert("Data sudah ada")
			</script>';
			echo '<meta http-equiv="refresh" content="0; url=./lapjpfp.php" >'; //coding refresh
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
                    	<input type="text" name="id" class="form-control" placeholder="" required=""  value="<?php echo $ed;?>" readonly>
                       </div>
					   <label class="col-sm-3 control-label">Tanggal</label>
                    <div class="col-sm-4"> 
                        <input type="date" name="tgl" value=""  class="input-group form-control" placeholder="YYYY-mm-dd" required>
                        </div>
					   <label class="col-sm-3 control-label">Jenis</label>
                    <div class="col-sm-5">
                    <select id="jenis_select" class="form-control" span="label label-success" name="jns" required="required">
		<option required="required" value="">Pilih</option>
		<?php
			$k = mysqli_query ($koneksi, "select * from `jenis` order by `nama_jenis` ASC");
			while ($data = mysqli_fetch_array ($k)) {
			echo '<option value="' . $data[1]. '">' . $data[1].'</option>';
			}
			
		?>
		</select>
		</div>
					   <label class="col-sm-3 control-label">Pembayaran Bulan</label>
                    <div class="col-sm-4">
                    	<input type="text" name="bln" class="form-control" placeholder="Bulan" value="<?php echo date('M');?>" />
                       </div>
					   <label class="col-sm-3 control-label">Pokok</label>
				        <div class="col-sm-2">
                    <input type="text" name="pkk" class="form-control" placeholder="-" id="pokok" value="">
						</div>
						
						
						<div>
						&nbsp
						<div class="form-group">
						
                        <label class="col-sm-2">
						
                          <input class="col-sm-5" id="rppn" name="p1" value="" type="radio" checked>PPN
                  
                          </label>&nbsp <label class="col-sm-5">
                          <input class="col-sm-2" id="radmin" name="p1" value="" type="radio" > Administrasi
                        </label>
                      </div></div>
					  
						<label class="col-sm-3 control-label">Denda</label><div class="col-sm-5"><a class="fa fa-arrow-circle-right">Terhitung Dari Tanggal 27 perBulan</a></div>
				        <div class="col-sm-2">
						<?php
						//bikin denda otomatis
						if(date('d') > 27){
							$denda = '4500';
						} else {
							$denda = '';
						}
						?>
                    <input type="text" name="dnd" id="denda" class="form-control" placeholder="-" value="<?php echo $denda;?>" readonly>
						</div>
						<label class="col-sm-3 control-label">Total</label>
				        <div class="col-sm-2">
                    <input type="text" name="ttl" id="ttl" class="form-control" placeholder="-" required="" readonly>
						</div>
                       </div>
					   
                       <div class="form-group">
                       <div class="col-sm-3">
                       <button type="submit" name="add" class="btn btn-primary"><span class="fa fa-save"> Simpan</span></button>
                       <a href="lapjpfp.php" type="button" class="btn btn-danger mr-2"><span class="fa fa-remove"> Batal</span></a>
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
		if (<?php echo date('d');?> > 27) {
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
  		if (<?php echo date('d');?> > 27) {
  			$("#ttl").val(parseInt(c)+parseInt(denda));
  		} else {
  			$("#ttl").val(c);
  		}
  	});

    $("#jenis_select").on("change", function() {
      var value = $(this).val();
      if(value == 'Lahan Parkir') {
        $("#rppn").prop("checked", true);
		$("#rppn").prop('disabled', false);
		$("#radmin").prop('disabled', true);
      } else {
        $("#radmin").prop("checked", true);
		$("#radmin").prop('disabled', false);
	    $("#rppn").prop('disabled', true);
      }
      
    })
  })
 
</script>