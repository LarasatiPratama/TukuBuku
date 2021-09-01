<?php include("header.php"); if(isset($_SESSION['member'])){?>
<div class="content">
	<h2>Profile</h2><br>
<center>
<?php $sql   = "SELECT nama, ttl, alamat, kota, provinsi, negara, kodepos, phone FROM member WHERE username='".$_SESSION['member']."'";

$hasil = mysql_query($sql) or exit("Gagal query : <b>".$sql."</b>.");
$data  = mysql_fetch_assoc($hasil); ?>
<h4>[<a href="edit-profile.php?username=<?php echo $_SESSION['member']?>">Edit Profile</a>]</h4><br>
<table width="600" border="1">
  <tr>
    <td>Name</td>
    <td align="left"><?php echo $data['nama']?></td>
  </tr>
  <tr>
    <td>Date of Birth</td>
    <td align="left"><?php echo $data['ttl']?></td>
  </tr>
  <tr>
    <td>Address</td>
    <td align="left"><?php echo $data['alamat'];?><br><br>
    	<?php echo $data['kota']; echo ", "; echo $data['kodepos'];?><br><br>
    	<?php echo $data['provinsi'];?><br><br>
    	<?php echo $data['negara'];?>
    	</td>
  </tr>
  <tr>
    <td>Phone</td>
    <td align="left"><?php echo $data['phone']?></td>
  </tr>

</table>
</center></div>
<?php ;} else {
  echo "<center><h2>Please Sign In <a href='signin.php'>HERE</a></h2></center>";
}
include("footer.php"); ?>