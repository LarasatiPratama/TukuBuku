<?php 
$idtransaksi = $_SESSION['transaksi'];
$sql="SELECT * FROM order WHERE IDOrder='$idtransaksi'";

$order=mysql_fetch_row($sql);



if($order)
{
	
	echo $order;
	
}
else {
	echo '0';
}
?>
