<?php
include("header.php"); 
$sql   = "SELECT judul,gambar,isbn,harga FROM buku";
         $hasil = mysql_query($sql) or exit("Error query: <b>".$sql."</b>.");
?>

<div class="content">


      <form action="insert-order.php" method="post">
      <center><table align="center" valign="middle" >
         
         <?php         
        
         
         $i=0;
         $column=3;
         while($data = mysql_fetch_assoc($hasil)){ ?>

    <?php

          if ($i>=$column) {
           echo "<tr>";
           $i=0;
          }?>
          <td width="225" style="padding: 5px 5px 5px 5px">
              <a href="detail-book.php?isbn=<?php echo $data['isbn']; ?>"><?php echo $data['judul']; ?><br>
               <?php include("image.php"); ?></a><br>
               ISBN : <?php echo $data['isbn']; ?><br>
              IDR <?php echo $data['harga']; ?><br>
              <input type='hidden' value='<?php echo $data['isbn']; ?>' name='isbn' \>
                <input type='submit' value='Order' name='submit' \>
            </td><?php ;
            $i++;
            ?>
            
         <?php
         }
        ?>
    </table></center></form>
</div>
<?php include("footer.php"); ?>


