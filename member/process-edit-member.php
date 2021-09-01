<?php include("header.php"); if(isset($_SESSION['username'])){
	?>
<div class="content"><?php
$sql = "UPDATE member SET ";
$sql.="email='".$_POST['Email']."', username='".$_POST['Username']."', password='".$_POST['Password']."', nama='".$_POST['FullName']."', ttl='".$_POST['TTL']."', alamat='".$_POST['Address']."', kota='".$_POST['City']."', provinsi='".$_POST['Province']."', negara='".$_POST['Country']."', kodepos='".$_POST['Postcode']."', phone='".$_POST['Phone']."' ";
$sql.="WHERE id_member= ".$_POST['id_member']; 

mysql_query($sql) or exit("Error query : <b>".$sql."</b>.");
echo "<center><h3>Profile Edited</h3></center>";
header("refresh: 0.25; member.php");
?>
</div>
<?php ;} else {
  echo "<center><h2>Please Sign In <a href='signin.php'>HERE</a></h2></center>";
}
include("footer.php"); ?>