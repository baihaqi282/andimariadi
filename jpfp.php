<?php include "header.php";
include "koneksi.php";?>

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
				
                  <form class="form" action="" method="post">
                <div class="form-group"   >
                	<label class="col-sm-3 control-label">No</label>
                    <div class="col-sm-2">
                    	<input type="text" name="id" class="form-control" placeholder="ID Peti" required=""  value="" readonly>
                       </div>
					   <label class="col-sm-3 control-label">Jenis</label>
                    <div class="col-sm-3">
                    	<select name="nama" class="form-control" placeholder="Nama Peti" required="" span="label label-success">
						<option required="required" value="">Pilih</option>
						</select>
                       </div>
					   <label class="col-sm-3 control-label">Nama</label>
					   <div class="col-sm-5">
                    <select class="form-control" span="label label-success" name="np" required="required">
					<option required="required" value="">Pilih</option>
		
					</select>
					</div>
					<label class="col-sm-3 control-label">Blok</label>
					   <div class="col-sm-5">
						<input type="text" name="bk" class="form-control" placeholder="Blok" required>
					</div>
					   <label class="col-sm-3 control-label">Pembayaran Bulan</label>
                    <div class="col-sm-4">
                    	<input type="text" name="ukrn" class="form-control" placeholder="Bulan" required>
                       </div>
					   <label class="col-sm-3 control-label">Retribusi</label>
				        <div class="col-sm-2">
                    <input type="text" name="hrs" class="form-control" placeholder="-" required>
						</div>
						<label class="col-sm-3 control-label">PPN</label>
				        <div class="col-sm-2">
                    <input type="text" name="ppn" class="form-control" placeholder="-" required>
						</div>
						<label class="col-sm-3 control-label">Denda</label>
				        <div class="col-sm-2">
                    <input type="text" name="dnd" class="form-control" placeholder="-" required>
						</div>
						<label class="col-sm-3 control-label">Total</label>
				        <div class="col-sm-2">
                    <input type="text" name="ttl" class="form-control" placeholder="-" required>
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
       