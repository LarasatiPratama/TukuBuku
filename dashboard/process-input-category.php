<?php include("header.php"); if(isset($_SESSION['username'])){
	?>
<div class="content">  
	<?php
include("config/koneksi.php");
$enum= mysql_fetch_array($result);
$result= 
$sql = "ALTER TABLE buku CHANGE COLUMN kategori kategori ENUM ($result) DEFAULT 'mulmed';"; 

mysql_query($sql) or exit("Error query : <b>".$sql."</b>.");
echo "<center><h3>A New Category Added</h3></center>";
header("refresh: 0.25; category.php");

?>
</div>
<?php ;} else {
  echo "<center><h2>Please Sign In <a href='signin.php'>HERE</a></h2></center>";
}
include("footer.php"); ?> 