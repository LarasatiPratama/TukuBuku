<?php include("header.php"); if(isset($_SESSION['username'])){?>
<div class="content"><?php
$sql = "DELETE FROM member WHERE id_member= ".$_GET['id_member'];
mysql_query($sql) or exit("Error query : <b>".$sql."</b>.");
echo "<center><h3>Member Deleted</h3></center>";
header("refresh: 0.25; member.php");
?>
</div>
<?php ;} else {
  echo "<center><h2>Please Sign In <a href='signin.php'>HERE</a></h2></center>";
}
include("footer.php"); ?> 