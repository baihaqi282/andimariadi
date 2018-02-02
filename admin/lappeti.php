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

<?php // Coding Hapus
if (isset($_GET['del'])) {
  $id = $_GET['del'];
  $cek = mysqli_query($koneksi, "SELECT * FROM bak WHERE `id_peti`='$id'");
  if (mysqli_num_rows($cek) > 0) {
    $delete = mysqli_query($koneksi, "DELETE FROM bak WHERE `id_peti`='$id'");
    if ($delete) {
      echo '<div class="alert alert-danger alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Berhasil!</strong> Data Telah dihapus.</div>';
  echo '<meta http-equiv="refresh" content="0; url=./lappeti.php" >'; //coding refresh
    } else {
      echo '<div class="alert alert-warning alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Kesalahan!</strong> Tidak dapat menghapus data.</div>';
    }
  }
}
?>	  
	  <div class="content-wrapper">
          <h3 class="page-heading mb-4">Data Peti<small>&nbsp( <?php echo IndonesiaTgl(date('Y-m-d'));?> )</small></h3>
           <div class="row mb-2">
            <div class="col-lg-12">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title mb-4" ><a href="peti.php"><span class="fa fa-plus">Tambah Data</a><i class="fa fa-bookmark float-right icon-grey-big"></i></span></h5>
                  <div class="table-responsive">
                    <table class="table center-aligned-table">
                      <thead>
                        <tr align="center">
                          <th>No</th>
                          <th>Nama</th>
						  <th>Penyewa</th>
						  <th>Blok</th>
						  <th>Ukuran</th>
						  <th>Harga Sewa</th>
						  <th>Pilihan</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
      $tanggal = date('Y-m-d');

       $sql = mysqli_query($koneksi, "SELECT * FROM `bak` order by `id_peti` asc");
          
      
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
		  
		  
		  
		<td><a href="editpeti.php?id='.$data[0].'"  class="btn-primary btn-sm"><span  class="fa fa-pencil-square-o" aria-hidden="true"></span></a> 
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
	$(".master-data").addClass("show");
  </script>
       