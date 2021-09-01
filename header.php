<?php
session_start(); 
 

date_default_timezone_set('Asia/Jakarta');


require_once 'dashboard/config/koneksi.php';
//require_once 'dashboard/config/class_paging.php';


?>

<!DOCTYPE html>
<head>
	<title>&copy Tukubuku</title>
	<link rel="stylesheet" href="css/index.css">
	<script language="JavaScript" type="text/javascript" src="css/drag.js"></script>
</head>
<body><div id="wrap">
	<div id="header"><div id="page"><div id="nav">
		<?php if(isset($_SESSION['member'])){?>
Hi,<a href='profile.php?username=<?php echo $_SESSION['member']; ?>'><?php echo $_SESSION['member']?>!</a>
<a href='signout.php'>SIGN OUT</a>
<?php ;} else {
	echo "<a href='signin.php'>SIGN IN</a>
	<a href='register.php'>SIGN UP</a>";
}?>
		 
		<a href="cart.php?IDOrder=<?php echo $_SESSION['transaksi']; ?>">Cart (0)</a> 
	</div>
		<a href="index.php"><img src="image/logo.png" style="padding-left: 20px;"></a> 
		<form id="searchbox" action="">
		<input id="submit" type="submit" value="Search">
    <textarea rows="3" cols="15"id="search"  placeholder="Search"></textarea>
</form><br><br><br>
	<div id="menu">
		<a href="shop.php">SHOP</a> |
		<a href="about.php">ABOUT US</a> | 
		<a href="contact.php">CONTACT US</a>
	</div>
	</div></div>