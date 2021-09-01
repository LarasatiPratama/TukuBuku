<?php include("header.php"); unset($_SESSION['member']);?>
<div class="content">
<h2>Thank You..</h2> 
<?php
	echo "You have signed out from the system.";   
	header("refresh: 0; index.php");   exit(); 
?>
</div>
<?php 
include("footer.php"); ?>