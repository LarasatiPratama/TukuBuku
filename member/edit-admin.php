<?php include("header.php"); if(isset($_SESSION['username'])){
    ?>
<div class="content">
    <h2>Edit Admin</h2><br>
<?php $sql   = "SELECT uid, username, password FROM admin WHERE uid= ".$_GET['uid'];

$hasil = mysql_query($sql) or exit("Gagal query : <b>".$sql."</b>.");
$data  = mysql_fetch_assoc($hasil); ?>

<center><form action="process-edit-admin.php" method="POST">


<table width="400px">
    <tr><td align="center" valign="middle">ID</td>
            <td align="center" valign="middle"><input type="text" name="uid" value="<?php echo $data['uid']?>"></td></tr>
    <tr><td align="center" valign="middle">Username</td>
            <td align="center" valign="middle"><input type="text" name="username" value="<?php echo $data['username']?>"></td></tr>
    <tr><td align="center" valign="middle">Password</td>
            <td align="center" valign="middle"><input type="text" name="password" value="<?php echo $data['password']?>"></td></tr>
              <input type="hidden" name="uid" value="<?php echo $data['uid'];?>"></tr>
    <tr><td colspan="2" align="right" valign="middle"><input type="submit" value="Submit" name="submit"></td></tr>
</table>
</form></center>
</div>
<?php ;} else {
  echo "<center><h2>Please Sign In <a href='signin.php'>HERE</a></h2></center>";
}
include("footer.php"); ?>