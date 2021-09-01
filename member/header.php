<?php
session_start();
date_default_timezone_set('Asia/Jakarta');
//$SessionId=session_id();
require_once 'config/koneksi.php';
//require_once 'dashboard/config/class_paging.php';

 ?>





<!DOCTYPE html>
<head>
	<title>&copy Tukubuku</title>
	<link rel="stylesheet" href="../css/index.css">
	<script language="JavaScript" type="text/javascript" src="css/drag.js"></script>
</head>
<body><div id="wrap">
	<div id="header"><div id="page"><div id="nav">
		<?php if(isset($_SESSION['username'])){?>
<?php echo "<a href='signout.php'>SIGN OUT</a>";
} else {
	echo "<a href='signin.php'>SIGN IN</a>";
}?>  
		<a href="wishlist.php">Wishlist</a> 

	</div>
		<a href="../index.php"><img src="../image/logo.png" style="padding-left: 20px;"></a> 
		<form id="searchbox" action="">
		<input id="submit" type="submit" value="Search">
    <textarea rows="3" cols="15"id="search"  placeholder="Search"></textarea>
</form><br><br><br>
	<div id="menu">
		<a href="index.php">HOME</a> |
		<a href="book.php">BOOK</a> | 
		<a href="category.php">CATEGORY</a> |
		<a href="order.php">ORDER</a> | 
		<a href="member.php">MEMBER</a> |
		<a href="admin.php">ADMIN</a>
	</div>
	</div></div>

