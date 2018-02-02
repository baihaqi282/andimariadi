<?php include "koneksi.php";
include "seslogin.php";
?>

<nav class="bg-white sidebar sidebar-offcanvas" id="sidebar">
          <div class="user-info">
            <img src="images/profile.jpg" alt="">
            <p class="name"><?php echo $_SESSION['status_petugas'];?></p>
            <h1><p class="designation">Hy , <?php echo $_SESSION['user'];?></p></h1>
            <span class="online"></span>
          </div>
          <ul class="nav">
            <li class="nav-item active">
              <a class="nav-link" href="index.php">
                <img src="images/icons/1.png" alt="">
                <span class="menu-title">Beranda</span>
              </a>
            </li>
            
            <li class="nav-item active">
			<a class="nav-link" data-toggle="collapse" href="#sub-menu" aria-expanded="false" aria-controls="sub-menu">
                <img src="images/icons/1.png" alt="">
                <span class="menu-title">Transaksi<i class="fa fa-sort-down"></i></span>
              </a>
			  <div class="collapse transaksi" id="sub-menu">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item active">
                    <a class="nav-link" href="lapjpftu.php">
                      JPFTU
                    </a>
                  </li>
                  <li class="nav-item active">
                    <a class="nav-link" href="lapjpfp.php">
                      JPFP
                    </a>
                  </li>
                </ul>
              </div>
            </li>
            
            <li class="nav-item active">
              <a class="nav-link" data-toggle="collapse" href="#sample-pages" aria-expanded="false" aria-controls="sample-pages">
                <img src="images/icons/10.png" alt="">
                <span class="menu-title">Settings<i class="fa fa-sort-down"></i></span>
              </a>
              <div class="collapse setting" id="sample-pages">
                <ul class="nav flex-column sub-menu">
                  
				  <li class="nav-item active">
				  <a class="nav-link" href="denah.php">
					Denah
					</a>
					</li>
                </ul>
              </div>
            </li>
            
          </ul>
        </nav>