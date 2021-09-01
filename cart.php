<?php include 'header.php';?>
<div class="content"><center>
  <form><table width="800">
    <tr>
      <th width="50">No.</th>
      <th width="199">Book(s)</th>
      <th width="53">Q</th>
      <th width="124">Price</th>
      <th width="197">Subtotal</th>
      <th width="151">Action</th>
    </tr>
  <?php  $sql   = "SELECT ID, judul, isbn, penulis, jumlah, harga FROM order WHERE IDOrder=".$_SESSION['transaksi'];
         $hasil = mysql_query($sql) or exit("Error query: <b>".$sql."</b>.");
         
         while($data = mysql_fetch_assoc($hasil)){ ?>
    <tr>
      <td><?php echo $data['ID']?></td>
      <td><?php echo $data['judul']?><br><br>
        ISBN : <?php echo $data['isbn']?><br><br>
        Author : <?php echo $data['penulis']?></td>
      <td><input type="text" value="<?php echo $data['jumlah']?>"></td>
      <td>IDR <?php echo $data['harga']?></td>
      <td><?php echo $data['judul']?></td>
      <td><a href="delete-order.php?ID=<?php echo $data['ID']?>">Delete</a></td>
    </tr>
    <?php }?>
    <tr>
    <td colspan="4" align="right">Total</td>
    <td>Total</td>
    <td>Delete All</td>
    </tr>
  </table></form>
</center>
</div>
<?php include 'footer.php';?>