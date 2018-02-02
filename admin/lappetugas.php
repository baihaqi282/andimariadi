<?php include "header.php";
include "koneksi.php";
include"library.php"?>

<div class=" container-scroller">
    <!-- partial:partials/_navbar.html -->
<?php include "navbar.php";?> 
 <div class="container-fluid">
      <div class="row row-offcanvas row-offcanvas-right">
<?php include "sidebar.php";?>

<?php // Coding Hapus
if (isset($_GET['del'])) {
  $id = $_GET['del'];
  $cek = mysqli_query($koneksi, "SELECT * FROM petugas WHERE `id_petugas`='$id'");
  if (mysqli_num_rows($cek) > 0) {
    $delete = mysqli_query($koneksi, "DELETE FROM petugas WHERE `id_petugas`='$id'");
    if ($delete) {
      echo '<div class="alert alert-danger alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Berhasil!</strong> Data Telah dihapus.</div>';
  echo '<meta http-equiv="refresh" content="0; url=./lappetugas.php" >'; //coding refresh
    } else {
      echo '<div class="alert alert-warning alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Kesalahan!</strong> Tidak dapat menghapus data.</div>';
    }
  }
}
?>

<script type="text/javascript">
		var s5_taf_parent = windows.location;
		function popup_print(){
		window.open('cetakpetugas.php', 'page','toolbar=0, scrollbars=1,location=0,statusbar=0,menubar=0,risizable=0,width=750,height=600,left=50,top=50,titlebar=yes')
		}
	</script>

  <div class="content-wrapper">
          <h3 class="page-heading mb-4">Data Petugas<small>&nbsp( <?php echo IndonesiaTgl(date('Y-m-d'));?> )</small></h3>
           <div class="row mb-2">
            <div class="col-lg-12">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title mb-4" ><a href="petugas.php"><span class="fa fa-plus">Tambah Data</a><i class="fa fa-bookmark float-right icon-grey-big"></i></span></h5>
                  <input type="button" onClick="popup_print()" class="btn btn-primary next-page" value="priview"></a>
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
						  <th>Pilihan</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
      $tanggal = date('Y-m-d');

        $sql = mysqli_query($koneksi, "SELECT * FROM `petugas` order by `id_petugas` asc");
      
      if (mysqli_num_rows($sql) == 0) {
        echo "<tr><td colspan=\"9\">Tidak Ada Data</td></tr>";
      } else {
        $no = 0;
        while ($data = mysqli_fetch_array($sql)) {
          $no++;
          echo '
        <tr align="center" bgcolor="#CCCCCC">
           
          <td>'.$data[0].'</td>
          <td>'.$data[1].'</td>
		  <td>'.$data[2].'</td>
		  <td>'.$data[3].'</td>
		  <td>'.$data[4].'</td>
		  <td>'.$data[5].'</td>
		  <td>'.$data[6].'</td>
		  
		 
		  
		  
		  
		  
		<td> 
          <a href="?del='.$data[0].'" class="btn-danger btn-sm" ><span class="fa fa-trash" aria-hidden="true" onclick="return confirm(\'Hapus data ini?\')"></span></a></td>
        </tr>';
		}
      }
    ?>
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
       