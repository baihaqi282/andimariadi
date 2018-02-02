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
  $cek = mysqli_query($koneksi, "SELECT * FROM jpftu WHERE `id`='$id'");
  if (mysqli_num_rows($cek) > 0) {
    $delete = mysqli_query($koneksi, "DELETE FROM jpftu WHERE `id`='$id'");
    if ($delete) {
      echo '<div class="alert alert-danger alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Berhasil!</strong> Data Telah dihapus.</div>';
  echo '<meta http-equiv="refresh" content="0; url=./lapjpftu.php" >'; //coding refresh
    } else {
      echo '<div class="alert alert-warning alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Kesalahan!</strong> Tidak dapat menghapus data.</div>';
    }
  }
}
?>	

  <div class="content-wrapper">
          <h3 class="page-heading mb-4">Transaksi JPFTU (Jasa Pelayanan Fasilitas Tempat Usaha)<small>&nbsp( <?php echo IndonesiaTgl(date('Y-m-d'));?> )</small></h3>
           <div class="row mb-2">
            <div class="col-lg-12">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title mb-4" ><a href="jpftu.php"><span class="fa fa-plus">Tambah Data</a><i class="fa fa-bookmark float-right icon-grey-big"></i></span></h5>
                  <div class="table-responsive">
                    <table class="table center-aligned-table">
                      <thead>
                        <tr align="center">
                          <th>No</th>
						  <th>Tanggal</th>
                          <th>Jenis</th>
						  <th>Penyewa</th>
						  <th>Blok</th>
						  <th>Bulan Pembayaran</th>
						  <th>Retribusi</th>
						  <th>Denda</th>
						  <th>Total</th>
						  <th>Pilihan</th>
                        </tr>
                      </thead>
                      <tbody>
                         <?php
      $tanggal = date('Y-m-d');

       $sql = mysqli_query($koneksi, "SELECT `jpftu`.`id`,`jpftu`.`tgl`,`jpftu`.`jenis_jpftu`,`jpftu`.`id_`,`jpftu`.`idindeks`,`jpftu`.`bulan`,`jpftu`.`retribusi`,`jpftu`.`denda`,`jpftu`.`total`,`toko`.`id_penyewa`,`los`.`id_penyewa`,`bak`.`id_penyewa` FROM `jpftu` LEFT JOIN `toko` ON `jpftu`.`id_` = `toko`.`id_toko`
LEFT JOIN `los` ON `jpftu`.`id_` = `los`.`id_los`
LEFT JOIN `bak` ON `jpftu`.`id_` = `bak`.`id_peti`");
      
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
		  <td>';
		  if (substr($data[3], 0, 1) == 'L') {
			echo $data[10];
		  } elseif(substr($data[3], 0, 1) == 'T') {
			echo $data[9];
		  } else {
			 echo $data[11];
		  }
		  echo '</td>
		  <td>'.$data[4].'</td>
		  <td>'.$data[5].'</td>
		  <td>'.$data[6].'</td>
		  <td>'.$data[7].'</td>
		  <td>'.$data[8].'</td>
		  
		  
		  
		<td><a href="editjpftu.php?id='.$data[0].'"  class="btn-primary btn-sm"><span  class="fa fa-pencil-square-o" aria-hidden="true"></span></a> 
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
	$(".transaksi").addClass("show");
  </script>