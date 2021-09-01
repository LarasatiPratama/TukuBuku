<?php include("header.php"); if(isset($_SESSION['username'])){
    ?>
<div class="content">
    <h2>Book Detail</h2><br>
<?php $sql   = "SELECT * FROM buku WHERE isbn= ".$_GET['isbn'];

$hasil = mysql_query($sql) or exit("Gagal query : <b>".$sql."</b>.");
$data  = mysql_fetch_assoc($hasil); ?>

<center><h4>[<a href="edit-book.php?isbn=<?php echo $data['isbn']; ?>">Edit</a>] [<a href="delete-book.php?isbn=<?php echo $data['isbn']; ?>">Delete</a>]</h4><br>
    <form>
<table width="400px">
    <tr><td align="center" valign="middle">ISBN</td>
        <td align="center" valign="middle"><input type="text" name="isbn" value="<?php echo $data['isbn']?>"></td></tr>
    <tr><td align="center" valign="middle">Title</td>
        <td align="center" valign="middle"><input type="text" name="title" value="<?php echo $data['judul']?>"></td></tr>
    <tr><td align="center" valign="middle">Author</td>
        <td align="center" valign="middle"><input type="text" name="author" value="<?php echo $data['penulis']?>"></td></tr>
    <tr><td align="center" valign="middle">Edition</td>
        <td align="center" valign="middle"><input type="text" name="edition" value="<?php echo $data['edisi']?>"></td></tr>
    <tr><td align="center" valign="middle">Copyright</td>
        <td align="center" valign="middle"><input type="text" name="copyright" value="<?php echo $data['copyright']?>"></td></tr>
    <tr><td align="center" valign="middle">Description</td>
        <td align="center" valign="middle"><textarea name="description" cols="16" rows="5" value="<?php echo $data['deskripsi']?>"></textarea></td></tr>
    <tr><td align="center" valign="middle">Publisher</td>
        <td align="center" valign="middle"><input type="text" name="publisher" value="<?php echo $data['penerbit']?>"></td></tr>
    <tr><td align="center" valign="middle">Price</td>
        <td align="center" valign="middle"><input type="text" name="price" value="<?php echo $data['harga']?>"></td></tr>
    <tr><td align="center" valign="middle">Category</td>
        <td align="center" valign="middle"><input type="text" name="category" value="<?php echo $data['kategori']?>"></td></tr>
    <tr><td align="center" valign="middle">Image</td>
        <td align="center" valign="middle"><?php include("image.php"); ?></td></tr>
    
</table>
</form></center>
</div>
<?php ;} else {
  echo "<center><h2>Please Sign In <a href='signin.php'>HERE</a></h2></center>";
}
include("footer.php"); ?>