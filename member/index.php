<?php include("header.php"); ?>
<div class="content">
<?php if(isset($_SESSION['username'])){?>
<?php echo "<center><h2>Welcome Administrator..</h2> ".$_SESSION['username']."! Sign Out <a href='signout.php'>HERE</a></center>";
} else {
	echo "<center><h2>Please Sign In <a href='signin.php'>HERE</a>.</h2></center>";
}?>

</div>
<?php include("footer.php"); ?>
