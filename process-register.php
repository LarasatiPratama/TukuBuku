<?php include("header.php"); ?>
<div class="content">  
	<?php

$sql = "INSERT INTO member (email, username, password, nama, ttl, alamat, kota, provinsi, negara, kodepos, phone) VALUES ('".$_POST['Email']."','".$_POST['Username']."','".$_POST['Password']."','".$_POST['FullName']."','".$_POST['TTL']."','".$_POST['Address']."','".$_POST['City']."','".$_POST['Province']."','".$_POST['Country']."','".$_POST['Postcode']."','".$_POST['Phone']."')";

mysql_query($sql) or exit("Error query : <b>".$sql."</b>.");
echo "<center><h3>A New Member Added</h3></center>";
header("refresh: 0.25; index.php");
?>
</div>
<?php 
include("footer.php"); ?> 