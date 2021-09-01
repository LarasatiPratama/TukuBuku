<?php include 'header.php';

if(!isset($_POST['isbn'])){
    echo "error";
} else {
	$sql = "select isbn from buku where isbn=".$_POST['isbn'];
$query = mysql_query($sql) or exit("Error query : <b>".$sql."</b>.");
$data = mysql_fetch_row($query) ;


$tanggal = date("Y-m-d");

$sql ="INSERT INTO order (IDOrder, isbn, jumlah, tanggal) VALUES ";
$sql.="('".$_SESSION['transaksi']."', '".$data['isbn']."','1','$tanggal') ";
$sql.="WHERE isbn=".$_POST['isbn'];
$insert=mysql_query($sql);
if($insert){
echo "Item Added";
header("refresh: 0; shop.php");
}else{
	echo "Adding Error";
header("refresh: 0.25; shop.php");
}
}
include 'footer.php'; ?>