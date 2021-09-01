<?php include("header.php"); if(isset($_SESSION['username'])){?>
<div class="content"><?php
$sql = "DELETE FROM buku WHERE isbn= ".$_GET['isbn'];
mysql_query($sql) or exit("Error query : <b>".$sql."</b>.");
echo "<center><h3>Book Deleted</h3></center>";
header("refresh: 0.25; book.php");
?>
</div>
<?php ;} else {
  echo "<center><h2>Please Sign In <a href='signin.php'>HERE</a></h2></center>";
}
include("footer.php"); ?> 