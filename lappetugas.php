<?php include "header.php";
include "koneksi.php";
include"library.php"?>

<div class=" container-scroller">
    <!-- partial:partials/_navbar.html -->
<?php include "navbar.php";?> 
 <div class="container-fluid">
      <div class="row row-offcanvas row-offcanvas-right">
<?php include "sidebar.php";?>

  <div class="content-wrapper">
          <h3 class="page-heading mb-4">Data Petugas<small>&nbsp( <?php echo IndonesiaTgl(date('Y-m-d'));?> )</small></h3>
           <div class="row mb-2">
            <div class="col-lg-12">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title mb-4" ><a href="petugas.php"><span class="fa fa-plus">Tambah Data</a><i class="fa fa-bookmark float-right icon-grey-big"></i></span></h5>
                  <div class="table-responsive">
                    <table class="table center-aligned-table">
                      <thead>
                        <tr align="center">
                          <th>No</th>
                          <th>Nama</th>
						  <th>Tempat Lahir</th>
						  <th>Tanggal Lahir</th>
						  <th>Jabatan</th>
						  <th>Alamat</th>
						  <th>Status</th>
						  <th>User</th>
						  <th>Password</th>
						  <th>Pilihan</th>
                        </tr>
                      </thead>
                      <tbody>
                        
                      </tbody>
                    </table>
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
	$(".setting").addClass("show");
  </script>
       