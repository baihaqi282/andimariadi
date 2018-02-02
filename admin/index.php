<?php include "header.php";
include "koneksi.php";
?>

<div class=" container-scroller">
    <!-- partial:partials/_navbar.html -->
<?php include "navbar.php";?> 
 <div class="container-fluid">
      <div class="row row-offcanvas row-offcanvas-right">
<?php include "sidebar.php";?>	  
	 <div class="content-wrapper">
          <h3 class="page-heading mb-4">Beranda</h3>
         
          
          
         
          <div class="row mb-2">
            <div class="col-lg-12">
              <div class="card">
                <div class="card-body">
                  <h5 class="display-4"><strong>Aplikasi Pendapatan Daerah</strong></h5>
                  <p class="text-left"><h3>Pasar Bauntung Tanjung Kabupaten Tabalong</h3></p>
                  

                 
                </div>
              </div>
            </div>
          </div>
		  <div class="row">
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 mb-4">
              <div class="card">
                <div class="card-body">
                  <div class="clearfix">
                    <i class="fa fa-tags float-right icon-grey-big"></i>
                  </div>
                  <h4 class="card-title font-weight-normal text-success">Alamat</h4>
                  <h6 class="card-subtitle mb-4">Jalan I.P.M Noor Rt.04 No.16B </h6>
                  <div class="progress progress-slim">
                    <div class="progress-bar bg-success-gadient" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
              </div>
            </div>
			<div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 mb-4">
              <div class="card">
                <div class="card-body">
                  <div class="clearfix">
                    <i class="fa fa-phone-square float-right icon-grey-big"></i>
                  </div>
                  <h4 class="card-title font-weight-normal text-info">Telpon</h4>
                  <h6 class="card-subtitle mb-4">.(0526) 21425</h6>
                  <div class="progress progress-slim">
                    <div class="progress-bar bg-info-gadient" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
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
       