<?php include("header.php"); if(isset($_SESSION['username'])){

$sql = "DELETE FROM material WHERE idmaterial= ".$_GET['idmaterial'];
mysql_query($sql) or exit("Error query : <b>".$sql."</b>.");
echo "<center><h3>Material berhasil dihapus.</h3></center>";
header("refresh: 0.25; material.php");

 ;} else {
  echo "<center><h2>Please Sign In <a href='signin.php'>HERE</a></h2></center>";
}
include("footer.php"); ?> 