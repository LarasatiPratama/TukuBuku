<?php include("header.php"); if(isset($_SESSION['username'])){
	?>
<div class="content"><?php
$sql = "UPDATE admin SET ";
$sql.="uid='".$_POST['uid']."', username='".$_POST['username']."', password='".$_POST['password']."' ";
$sql.="WHERE uid= ".$_POST['uid']; 

mysql_query($sql) or exit("Error query : <b>".$sql."</b>.");
echo "<center><h3>Admin Edited</h3></center>";
header("refresh: 0.25; admin.php");
?>
</div>
<?php ;} else {
  echo "<center><h2>Please Sign In <a href='signin.php'>HERE</a></h2></center>";
}
include("footer.php"); ?>