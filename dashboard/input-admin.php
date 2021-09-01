<?php include("header.php"); if(isset($_SESSION['username'])){
    ?>
<div class="content">
    <h2>Add A New Admin</h2>  <br>
<center><form action="process-input-admin.php" method="POST">
<table width="400px">

    <tr><td align="center" valign="middle">Username</td>
            <td align="center" valign="middle"><input type="text" name="username" ></td></tr>
    <tr><td align="center" valign="middle">Password</td>
            <td align="center" valign="middle"><input type="text" name="password" ></td></tr>
              <input type="hidden" name="uid" value="<?php echo $data['uid'];?>"></tr>
    <tr><td colspan="2" align="right" valign="middle"><input type="submit" value="Submit" name="submit"></td></tr>
</table>
</form></center>
</div>
<?php ;} else {
  echo "<center><h2>Please Sign In <a href='signin.php'>HERE</a></h2></center>";
}
include("footer.php"); ?>