<?php include "header.php";
include "koneksi.php";
include"library.php"?>
<script type="text/javascript">
		var s5_taf_parent = windows.location;
		function popup_print(){
		window.open('cetakjpftu.php', 'page','toolbar=0, scrollbars=1,location=0,statusbar=0,menubar=0,risizable=0,width=750,height=600,left=50,top=50,titlebar=yes')
		}
	</script>

    <!-- partial:partials/_navbar.html -->

 
      


        <div class="modal-header">
				 <h1 class="page-header"><table><tr><img src="images/tjg.png" width="100" height="91" style="transparent" /><font size="6">DINAS </font></tr></table></h1>
				
				<hr/>
    <br/>
			</div>
           
                  
                  
				  <div class="table-responsive">
                    <table class="table table-striped table-hover">
                     
                        <tr >
                          <th>No</th>
                          <th>Tanggal</th>
                          <th>Jenis</th>
						  <th>Penyewa</th>
						  <th>Blok</th>
						  <th>Bulan Pembayaran</th>
						  <th>Retribusi</th>
						  <th>Denda</th>
						  <th>Total</th>
						 
                        </tr>
                      
                     
                        <?php
      $tanggal = date('Y-m-d');

        $sql = mysqli_query($koneksi, "SELECT `jpftu`.`id`,`jpftu`.`tgl`,`jpftu`.`jenis_jpftu`,`jpftu`.`id_`,`jpftu`.`idindeks`,`jpftu`.`bulan`,`jpftu`.`retribusi`,`jpftu`.`denda`,`jpftu`.`total`,`toko`.`id_penyewa`,`los`.`id_penyewa`,`bak`.`id_penyewa` FROM `jpftu` LEFT JOIN `toko` ON `jpftu`.`id_` = `toko`.`id_toko`
LEFT JOIN `los` ON `jpftu`.`id_` = `los`.`id_los`
LEFT JOIN `bak` ON `jpftu`.`id_` = `bak`.`id_peti`");
      
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

        </tr>';
		}
      }
    ?>
                     
                    </table>
                  </div>
				  <div style="col-md-4">
		 <tr >
		  <td colspan="6">  <p align="right">Tertanda <b><?php echo date('D d-m-y');?></p></td>
		  </tr><tr>
		  
		  <td colspan="4"></td>
        <td colspan="2"><p align="right">kasir </p>
        </td></tr>
         
          <tr>
          <td>  <p align="right"></p></td>
        <td><p align="right">&nbsp;</p>
        </td></tr>
          <tr>
          <td>        <td><p align="right">&nbsp;</p>
        </td></tr>
          <tr>
		  <td colspan="4"></td>
          <td colspan="2">  <p align="center"></p></td>
       
        </td></tr>
        </table><p>&nbsp;</p>
        
		 </div>
                </div>

     
<script>
var restorepage = document.body.innerHTML;{
window.print();
}
</script>

