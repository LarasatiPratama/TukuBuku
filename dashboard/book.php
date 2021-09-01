<?php
include("header.php"); 
if(isset($_SESSION['username'])){
   ?>

<div class="content">
<h2>Book List</h2><br>

      <center><h4>[<a href="input-book.php">Add New Book</a>] </h4><br>
         <table width="620px" align="center">
         <tr>
            <th width="300px" align="center" valign="middle">Book</th>
            <th width="50px" align="center" valign="middle">Publisher</th>
            <th width="70px" align="center" valign="middle">Action</th>
            <th width="100px" align="center" valign="middle">Price</th>
         </tr>
         <?php
         
         $sql   = "SELECT isbn, judul, penulis, edisi, copyright, deskripsi, penerbit, gambar, harga FROM buku";
         $hasil = mysql_query($sql) or exit("Error query: <b>".$sql."</b>.");
         
         while($data = mysql_fetch_assoc($hasil)){ ?>
            <tr >
    <td style="text-align:left; padding: 20px 20px 20px 20px"><?php include("image.php"); ?><?php echo $data['judul']; ?><br><br>
    ISBN: <?php echo $data['isbn']; ?><br><br>
    Author: <?php echo $data['penulis']; ?></td>
    <td><?php echo $data['penerbit']; ?></td>
    <td><a href="detail-book.php?isbn=<?php echo $data['isbn']; ?>">Detail</a><br><br>
    <a href="edit-book.php?isbn=<?php echo $data['isbn']; ?>">Edit</a><br><br>
    <a href="delete-book.php?isbn=<?php echo $data['isbn']; ?>">Delete</a></td>
    <td>IDR <?php echo $data['harga']; ?></td>
  </tr>
           
         <?php
         }
        ?>
    </table></center>
</div>
<?php ;} else {
  echo "<center><h2>Please Sign In <a href='signin.php'>HERE</a></h2></center>";
}
include("footer.php"); ?>