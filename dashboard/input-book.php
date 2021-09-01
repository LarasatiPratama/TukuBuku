<?php include("header.php"); if(isset($_SESSION['username'])){?>
<div class="content">
    <h2>Add A New Book</h2>  <br>
<center><form action="process-input-book.php" method="POST" enctype="multipart/form-data">
<table width="400px">
    <tr><td align="center" valign="middle">ISBN</td>
        <td align="center" valign="middle"><input type="text" name="isbn"></td></tr>
    <tr><td align="center" valign="middle">Title</td>
        <td align="center" valign="middle"><input type="text" name="title"></td></tr>
    <tr><td align="center" valign="middle">Author</td>
        <td align="center" valign="middle"><input type="text" name="author"></td></tr>
    <tr><td align="center" valign="middle">Edition</td>
        <td align="center" valign="middle"><input type="text" name="edition"></td></tr>
    <tr><td align="center" valign="middle">Copyright</td>
        <td align="center" valign="middle"><input type="text" name="copyright"></td></tr>
    <tr><td align="center" valign="middle">Description</td>
        <td align="center" valign="middle"><textarea name="description" cols="16" rows="5" ></textarea></td></tr>
    <tr><td align="center" valign="middle">Publisher</td>
        <td align="center" valign="middle"><input type="text" name="publisher"></td></tr>
    <tr><td align="center" valign="middle">Price</td>
        <td align="center" valign="middle"><input type="text" name="price"></td></tr>
    <tr><td align="center" valign="middle">Category</td>
        <td align="center" valign="middle"><input type="text" name="category"></td></tr>
    <tr><td align="center" valign="middle">Image</td>
        <td align="center" valign="middle"><input type="file" name="gambar"></td></tr>
    <tr><td colspan="2" align="right" valign="middle">
        <input type="submit" value="Submit" name="submit"></td></tr>
</table>
</form></center>
</div>
<?php ;} else {
  echo "<center><h2>Please Sign In <a href='signin.php'>HERE</a></h2></center>";
}
include("footer.php"); ?>