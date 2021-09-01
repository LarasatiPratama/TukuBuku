<?php
include("header.php"); ?>

<div class="content">
     
         <?php
 
      
         
         $sql   = "SELECT * FROM buku WHERE isbn= ".$_GET['isbn'];
         $hasil = mysql_query($sql) or exit("Error query: <b>".$sql."</b>.");
         
         $data = mysql_fetch_assoc($hasil) ?>

		<center><form action="insert-order.php?isbn=<?php echo $data['isbn']; ?>" method="post"><table width="800" border="1">
  			<tr>
  				  <td width="230" rowspan="7"><?php echo $data['judul']; ?><br><br><?php include("image.php"); ?></td>
			    
			
		    <td align="left"><?php echo $data['penulis']; ?></td>
		  </tr>
		  <tr>
		    <td align="left"><?php echo $data['isbn']; ?></td>
		  </tr>
		  <tr>
		    <td align="left"><?php echo $data['edisi']; ?></td>
		  </tr>
		  <tr>
		    <td align="left"><?php echo $data['penerbit']; ?></td>
		  </tr>
		  <tr>
		    <td align="left">IDR <?php echo $data['harga']; ?></td>
		  </tr>
		  <tr>
		    <td align="left"><?php echo $data['deskripsi']; ?></td>
		  </tr>
		<td align="right">

                <input type='submit' value='Order' name='submit' \>
             
            </td>
            

    </table></form></center>
</div>
<?php include("footer.php"); ?>
