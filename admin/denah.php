<?php include "header.php";
include "koneksi.php";
include "library.php";
//error_reporting(0);
?>

<div class=" container-scroller">
    <!-- partial:partials/_navbar.html -->
<?php include "navbar.php";?> 
 <div class="container-fluid">
      <div class="row row-offcanvas row-offcanvas-right">
<?php include "sidebar.php";?>	  
	  <div class="content-wrapper">
          <h3 class="page-heading mb-4">DENAH PASAR</h3>
          <div class="row mb-2">
            <div class="col-lg-12">
              <div class="card">
                <div class="card-body">
					<div class="row">
						<div class="col-lg-6" style="text-align: center">
						<table width="100%" class="table-denah">
							<thead>
								<tr>
									<td colspan="5">BLOK A</td>
								</tr>
							</thead>
							<tbody>
								<tr>
								<?php
									for($i=1; $i <= 5; $i++) {
										$data = mysqli_query($koneksi, "SELECT `id_blok` FROM `toko` WHERE `id_blok`='A/0" . $i . "'");
										$e = mysqli_fetch_array($data);
										if(('A/0' . $i) == $e[0]) {
											echo '<td width="20%" style="padding: 15px; color: #fff" bgcolor="red">A/0' . $i .'</td>';
										} else {
											echo '<td width="20%" style="padding: 15px; color: #fff" bgcolor="black">A/0' . $i .'</td>';
										}
									}
								?>
								</tr>
								<tr>
								<?php
									for($i=6; $i <= 10; $i++) {
										$data = mysqli_query($koneksi, "SELECT `id_blok` FROM `toko` WHERE `id_blok`='A/0" . $i . "'");
										$e = mysqli_fetch_array($data);
										if(('A/0' . $i) == $e[0]) {
											echo '<td width="20%" style="padding: 15px; color: #fff" bgcolor="red">A/0' . $i .'</td>';
										} else {
											echo '<td width="20%" style="padding: 15px; color: #fff" bgcolor="black">A/0' . $i .'</td>';
										}
									}
								?>
								</tr>
								
								<tr>
									<td colspan="5"><br/></td>
								</tr>
								<tr>
									<td colspan="5"><br/>PETI</td>
								</tr>
								
								<tr>
								<?php
									for($i=1; $i <= 5; $i++) {
										$data = mysqli_query($koneksi, "SELECT `id_peti` FROM `bak` WHERE `id_peti`='E0" . $i . "'");
										$e = mysqli_fetch_array($data);
										if(('E0' . $i) == $e[0]) {
											echo '<td width="20%" style="padding: 15px; color: #fff" bgcolor="red">E0' . $i .'</td>';
										} else {
											echo '<td width="20%" style="padding: 15px; color: #fff" bgcolor="black">E0' . $i .'</td>';
										}
									}
								?>
								</tr>
								<tr>
								<?php
									for($i=6; $i <= 10; $i++) {
										$data = mysqli_query($koneksi, "SELECT `id_peti` FROM `bak` WHERE `id_peti`='E0" . $i . "'");
										$e = mysqli_fetch_array($data);
										if(('E0' . $i) == $e[0]) {
											echo '<td width="20%" style="padding: 15px; color: #fff" bgcolor="red">E0' . $i .'</td>';
										} else {
											echo '<td width="20%" style="padding: 15px; color: #fff" bgcolor="black">E0' . $i .'</td>';
										}
									}
								?>
								</tr>
								
								<tr>
									<td colspan="5"><br/></td>
								</tr>
							</tbody>
						</table>
						<br />
						<br />
						<table width="100%" class="table-denah">
							<thead>
								<tr>
									<td>LOS</td>
									<td><br /></td>
									<td colspan="3" bgcolor="green"><br /></td>
								</tr>
							</thead>
							<tbody>
								<?php
									//print_r($e);
									for($i=1; $i <= 5; $i++) {
										$data = mysqli_query($koneksi, "SELECT `id_los` FROM `los` WHERE `id_los`='L0" . $i . "'");
										$e = mysqli_fetch_array($data);
										//echo $a
										if(('L0' . $i) == $e[0]) {
											echo '<tr>
											<td width="20%" style="padding: 15px;color: #fff" bgcolor="red">L0' . $i .'</td>
									<td><br /></td>';
											if ($i == 3) {
												echo '<td colspan="3" style="color: #fff" bgcolor="green">PASAR</td></tr>';
											} else {
												echo '<td colspan="3" bgcolor="green"><br /></td></tr>';
											}
											//echo '<td width="20%" style="padding: 15px; color: #fff" bgcolor="red">E0' . $i .'</td>';
										} else {
											echo '<tr>
											<td width="20%" style="padding: 15px;color: #fff" bgcolor="black">L0' . $i .'</td>
									<td><br /></td>';
											if ($i == 3) {
												echo '<td colspan="3" style="color: #fff" bgcolor="green">PASAR</td></tr>';
											} else {
												echo '<td colspan="3" bgcolor="green"><br /></td></tr>';
											}
										}
									}
								?>
							</tbody>
						</table>
						
						</div>
						
						<div class="col-lg-6" style="text-align: center">
						<table width="100%" class="table-denah">
							<thead>
								<tr>
									<td colspan="5">BLOK B</td>
								</tr>
							</thead>
							<tbody>
								<tr>
								<?php
									for($i=1; $i <= 5; $i++) {
										$data = mysqli_query($koneksi, "SELECT `id_blok` FROM `toko` WHERE `id_blok`='B/0" . $i . "'");
										$e = mysqli_fetch_array($data);
										if(('B/0' . $i) == $e[0]) {
											echo '<td width="20%" style="padding: 15px; color: #fff" bgcolor="red">B/0' . $i .'</td>';
										} else {
											echo '<td width="20%" style="padding: 15px; color: #fff" bgcolor="black">B/0' . $i .'</td>';
										}
									}
								?>
								</tr>
								<tr>
								<?php
									for($i=6; $i <= 10; $i++) {
										$data = mysqli_query($koneksi, "SELECT `id_blok` FROM `toko` WHERE `id_blok`='B/0" . $i . "'");
										$e = mysqli_fetch_array($data);
										if(('B/0' . $i) == $e[0]) {
											echo '<td width="20%" style="padding: 15px; color: #fff" bgcolor="red">B/0' . $i .'</td>';
										} else {
											echo '<td width="20%" style="padding: 15px; color: #fff" bgcolor="black">B/0' . $i .'</td>';
										}
									}
								?>
								</tr>
								
								<tr>
									<td colspan="5"><br/></td>
								</tr>
								<tr>
									<td colspan="5"><br/>PETI</td>
								</tr>
								
								<tr>
								<?php
									for($i=11; $i <= 15; $i++) {
										$data = mysqli_query($koneksi, "SELECT `id_peti` FROM `bak` WHERE `id_peti`='E0" . $i . "'");
										$e = mysqli_fetch_array($data);
										if(('E0' . $i) == $e[0]) {
											echo '<td width="20%" style="padding: 15px; color: #fff" bgcolor="red">E0' . $i .'</td>';
										} else {
											echo '<td width="20%" style="padding: 15px; color: #fff" bgcolor="black">E0' . $i .'</td>';
										}
									}
								?>
								</tr>
								<tr>
								<?php
									for($i=16; $i <= 20; $i++) {
										$data = mysqli_query($koneksi, "SELECT `id_peti` FROM `bak` WHERE `id_peti`='E0" . $i . "'");
										$e = mysqli_fetch_array($data);
										if(('E0' . $i) == $e[0]) {
											echo '<td width="20%" style="padding: 15px; color: #fff" bgcolor="red">E0' . $i .'</td>';
										} else {
											echo '<td width="20%" style="padding: 15px; color: #fff" bgcolor="black">E0' . $i .'</td>';
										}
									}
								?>
								</tr>
								
								<tr>
									<td colspan="5"><br/></td>
								</tr>
							</tbody>
						</table>
						<br /><br />
						<table width="100%" class="table-denah">
							<thead>
								<tr>
									<td colspan="3" bgcolor="green"><br /></td>
									<td><br /></td>
									<td>LOS</td>
								</tr>
							</thead>
							<tbody>
								<?php
									for($i=6; $i <= 10; $i++) {
										$data = mysqli_query($koneksi, "SELECT `id_los` FROM `los` WHERE `id_los`='L0" . $i . "'");
										$e = mysqli_fetch_array($data);
										if($i <= 9) {
											if(('L0' . $i) == $e[0]) {
												if ($i == 8) {
													echo '<tr><td colspan="3" style="color: #fff" bgcolor="green">PASAR</td><td><br /></td>';
												} else {
													echo '<tr><td colspan="3" bgcolor="green"><br /></td><td><br /></td>';
												}
												echo '<td width="20%" style="padding: 15px;color: #fff" bgcolor="red">L0' . $i .'</td></tr>';
											} else {
												if ($i == 8) {
													echo '<tr><td colspan="3" style="color: #fff" bgcolor="green">PASAR</td><td><br /></td>';
												} else {
													echo '<tr><td colspan="3" bgcolor="green"><br /></td><td><br /></td>';
												}
												echo '<td width="20%" style="padding: 15px;color: #fff" bgcolor="black">L0' . $i .'</td></tr>';
											}
										} else {
											if(('L' . $i) == $e[0]) {
												if ($i == 8) {
													echo '<tr><td colspan="3" style="color: #fff" bgcolor="green">PASAR</td><td><br /></td>';
												} else {
													echo '<tr><td colspan="3" bgcolor="green"><br /></td><td><br /></td>';
												}
												echo '<td width="20%" style="padding: 15px;color: #fff" bgcolor="red">L' . $i .'</td></tr>';
											} else {
												if ($i == 8) {
													echo '<tr><td colspan="3" style="color: #fff" bgcolor="green">PASAR</td><td><br /></td>';
												} else {
													echo '<tr><td colspan="3" bgcolor="green"><br /></td><td><br /></td>';
												}
												echo '<td width="20%" style="padding: 15px;color: #fff" bgcolor="black">L' . $i .'</td></tr>';
											}
										}
									}
								?>
							</tbody>
						</table>
						</div>
					</div>
					<br />
					<table width="30%">
						<b>Detail Pasar:</b>
						<?php
							//SELECT count(`id_blok`) as `total_blok` FROM `toko` WHERE `id_blok` LIKE 'A%'
							$blok_A = mysqli_query($koneksi, "SELECT count(`id_blok`) as `total_blok` FROM `toko` WHERE `id_blok` LIKE 'A%'");
							$blok_B = mysqli_query($koneksi, "SELECT count(`id_blok`) as `total_blok` FROM `toko` WHERE `id_blok` LIKE 'B%'");
							$los = mysqli_query($koneksi, "SELECT count(`id_los`) as `total_blok` FROM `los`");
							$peti = mysqli_query($koneksi, "SELECT count(`id_peti`) as `total_blok` FROM `bak`");
							$blok_A = mysqli_fetch_assoc($blok_A);
							$blok_B = mysqli_fetch_assoc($blok_B);
							$los = mysqli_fetch_assoc($los);
							$peti = mysqli_fetch_assoc($peti);
							echo "<tr><td>Blok A terisi/sisa</td><td>:</td><td>" . $blok_A['total_blok'] . " / <b>" . (10-$blok_B['total_blok']) . "</b></td></tr>";
							echo "<tr><td>Blok B terisi/sisa</td><td>:</td><td>" . $blok_B['total_blok'] . " / <b>" . (10-$blok_B['total_blok']) . "</b></td></tr>";
							echo "<tr><td>LOS terisi/sisa</td><td>:</td><td>" . $los['total_blok'] . " / <b>" . (20-$los['total_blok']) . "</b></td></tr>";
							echo "<tr><td>Peti terisi/sisa</td><td>:</td><td>" . $peti['total_blok'] . " / <b>" . (10-$peti['total_blok']) . "</b></td></tr>";
						?>
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
<script type="text/javascript">
	$(".setting").addClass("show");
  </script>