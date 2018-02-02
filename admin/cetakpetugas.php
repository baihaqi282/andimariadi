<?php include "header.php";
include "koneksi.php";
include"library.php"?>
<script type="text/javascript">
		var s5_taf_parent = windows.location;
		function popup_print(){
		window.open('cetakpetugas.php', 'page','toolbar=0, scrollbars=1,location=0,statusbar=0,menubar=0,risizable=0,width=750,height=600,left=50,top=50,titlebar=yes')
		}
	</script>

    <!-- partial:partials/_navbar.html -->
	<BODY onkeydown="myFunction()">
<script>
function myFunction(){
	if (event.keyCode == 122) {
		event.preventDefault()
		alert('cetak data');
	}
}
</script>
<script>
function Function(){
	if (event.keyCode == 120) {
		event.preventDefault()
		alert('cetak data');
	}
}
</script>
 
      


          <h2>Laporan Data Petugas</h2>
   <hr/>
    <br/>
           
                  
                  
				  <div class="table-responsive">
                    <table class="table table-striped table-hover">
                     
                        <tr >
                          <th>No</th>
                          <th>Nama</th>
						  <th>Tempat Lahir</th>
						  <th>Tanggal Lahir</th>
						  <th>Jabatan</th>
						  <th>Alamat</th>
						  <th>Status</th>
						 
                        </tr>
                      
                     
                        <?php
      $tanggal = date('Y-m-d');

        $sql = mysqli_query($koneksi, "SELECT * FROM `petugas` order by `id_petugas` asc");
      
      if (mysqli_num_rows($sql) == 0) {
       
      } else {
        $no = 0;
        while ($data = mysqli_fetch_array($sql)) {
          $no++;
          echo '
        <tr bgcolor="#fff">
           
          <td>'.$data[0].'</td>
          <td>'.$data[1].'</td>
		  <td>'.$data[2].'</td>
		  <td>'.$data[3].'</td>
		  <td>'.$data[4].'</td>
		  <td>'.$data[5].'</td>
		  <td>'.$data[6].'</td>

        </tr>';
		}
      }
    ?>
                     
                    </table>
                  </div>
                </div>
</body>

    

<script>
var restorepage = document.body.innerHTML;{
window.print();
}
</script>
