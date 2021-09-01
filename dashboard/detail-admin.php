<?php include("header.php"); ?>
<div class="content">
    <h2>Detail Admin</h2><br>
<?php $sql   = "SELECT uid, username, password FROM admin WHERE uid= ".$_GET['uid'];

$hasil = mysql_query($sql) or exit("Gagal query : <b>".$sql."</b>.");
$data  = mysql_fetch_assoc($hasil); ?>

<center><h4>[<a href="edit-admin.php?uid=<?php echo $data['uid']; ?>">Edit</a>] [<a href="delete-admin.php?uid=<?php echo $data['uid']; ?>">Delete</a>]</h4><br>
	<form>


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
<?php include("footer.php"); ?>