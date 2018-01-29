<?php include "header.php";
include "koneksi.php";?>

<div class=" container-scroller">
    <!-- partial:partials/_navbar.html -->
<?php include "navbar.php";?> 
 <div class="container-fluid">
      <div class="row row-offcanvas row-offcanvas-right">
<?php include "sidebar.php";?>	  
	  <div class="content-wrapper">
          <h3 class="page-heading mb-4">Data Petugas</h3>
          <div class="row mb-2">
            <div class="col-lg-10">
              <div class="card">
                <div class="card-body">
				
                  <form class="form" action="" method="post">
                <div class="form-group"   >
                	<label class="col-sm-3 control-label">No ID</label>
                    <div class="col-sm-2">
                    	<input type="text" name="id" class="form-control" placeholder="-" required=""  value="" readonly>
                       </div>
					   <label class="col-sm-3 control-label">Nama Petugas</label>
                    <div class="col-sm-6">
                    	<input type="text" name="nama" class="form-control" placeholder="Nama Petugas" required>
                       </div>
					   <label class="col-sm-3 control-label">Tempat Lahir</label>
                    <div class="col-sm-4">
                    	<input type="text" name="nama" class="form-control" placeholder="Tempat Lahir" required>
                       </div>
					   <label class="col-sm-3 control-label">Tanggal Lahir</label>
                    <div class="col-sm-3">
                    	<input type="date" name="tanggal_lahir" value=""  class="input-group form-control" placeholder="YYYY-mm-dd" required>
                       </div>
					   <label class="col-sm-3 control-label">Jabatan</label>
                    <div class="col-sm-3">
                    	<input type="text" name="nama" class="form-control" placeholder="Jabatan" required>
                       </div>
					   <label class="col-sm-3 control-label">Alamat</label>
                    <div class="col-sm-4">
                    	<textarea type="textarea" name="almt" class="form-control inputstl" rows="5" placeholder="Alamat" ></textarea>
                       </div>
					   <label class="col-sm-3 control-label">Status</label>
                    <div class="col-sm-3">
                    	<select name="nama" id="jenis" class="form-control" placeholder="Nama Peti" required="" span="label label-success">
						<option required="required" value="">Pilih</option>
            <option value="admin">Admin</option>
            <option value="petugas">Petugas</option>
						</select>
                       </div>
					   <div class="col-sm-4">
					   <label for="exampleInputEmail1">User</label>
                      <input type="text" class="form-control p-input"  placeholder="Enter User">
                    </div>
                    <div class="col-sm-4">
                      <label for="exampleInputPassword1">Password</label>
                      <input type="password" class="form-control p-input" placeholder="Enter Password">
                    </div>
                       </div>
					   
                       <div class="form-group">
                       <div class="col-sm-3">
                       <button type="submit" name="add" class="btn btn-primary"><span class="fa fa-save"> Simpan</span></button>
                       <a href="lappenyewa.php" type="button" class="btn btn-danger mr-2"><span class="fa fa-remove"> Batal</span></a>
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
       