 <!DOCTYPE html>
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Aplikasi Pendapatan Daerah Pasar Bauntung Tanjung Kabupaten Tabalong</title>
  <link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.min.css" />
  <link rel="stylesheet" href="node_modules/perfect-scrollbar/dist/css/perfect-scrollbar.min.css" />
  <link rel="stylesheet" href="css/style.css" />
  <link rel="shortcut icon" href="images/004-folder-1.png" />
</head>
	
	<?php
date_default_timezone_set('Asia/Jakarta');
include 'library.php';
				if(isset($_POST['login'])){

					include"koneksi.php";
					$username	= $_POST['user'];
					$password	= md5($_POST['password']);
					
					
					
					$login=mysqli_query($koneksi,"SELECT * FROM `petugas` WHERE `user`='$username'  AND `password` ='$password'");


// Apabila username dan password ditemukan
if(mysqli_num_rows($login) == 0){
	echo '<div class="alert alert-danger" align="center" >Login gagal !!! Silahkan Coba Lagi..</div>';
	}else{
$ketemu =mysqli_num_rows($login);
$r=mysqli_fetch_array($login);					 
session_start();				
$_SESSION['username']     = $r['user'];
$_SESSION['password']     = $r['password'];
$_SESSION['id_petugas']=$r['id_petugas'];
$_SESSION['status_petugas']	;


  $jam = date("H:i:s");
  $tgl = date("Y-m-d");

 	
						if($r['status_petugas'] == 'admin'){
						
							$_SESSION['user']=$username;
							$_SESSION['status_petugas']='admin';
						$_SESSION['id_petugas']=$ketemu['id_petugas'];
							
							 mysqli_query($koneksi, "INSERT INTO `log_login`(`username`,`jam_msk`,`jam_klr`,`tgl_msk`,`tgl_klr`,`status_log`)
                           VALUES('$_SESSION[nama_petugas]','$jam','logged','$tgl','---','online')");	
						   header("Location: /uptd/admin/index.php");
						}else {
							
								
								
							$_SESSION['user']=$username;
							$_SESSION['status_petugas']='<?php echo $data[6];?>';
						$_SESSION['id_petugas']=$ketemu['id_petugas'];							
							  mysqli_query($koneksi, "INSERT INTO `log_login`(`username`,`jam_msk`,`jam_klr`,`tgl_msk`,`tgl_klr`,`status_log`)
                           VALUES('$_SESSION[nama_petugas]','$jam','logged','$tgl','---','online')");	
						   header("Location: /uptd/user/index.php");
						}
					}
				}
				?>
	
<body>
  <div class="container-scroller">
    <div class="container-fluid">
      <div class="row">
        <div class="content-wrapper full-page-wrapper d-flex align-items-center auth-pages">
          <div class="card col-lg-4 mx-auto">
            <div class="card-body px-5 py-5">
              <h3 class="card-title text-center mb-3">Pasar Bauntung Tanjung Kabupaten Tabalong</h3>
			  <h5 class="card-title text-center mb-3 table-success">Silahkan Login Untuk Mengakses</h5>
              <form method="post">
                <div class="form-group">
                  <input type="text" name="user" class="form-control p_input" placeholder="Username">
                </div>
                <div class="form-group">
                  <input type="password" name="password" class="form-control p_input" id="exampleInputPassword1" placeholder="Password">
                </div>
               
                <div class="text-center">
                  <input name="login" type="submit" class="btn btn-primary btn-block enter-btn" value="Login">
                </div>
               </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="node_modules/jquery/dist/jquery.min.js"></script>
  <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
  <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
  <script src="node_modules/perfect-scrollbar/dist/js/perfect-scrollbar.jquery.min.js"></script>
  <script src="js/misc.js"></script>
</body>

</html>
