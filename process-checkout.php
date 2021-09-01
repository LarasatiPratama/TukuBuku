<?php 
include 'header.php';
//insert member 
$query = "insert into member values 
 ('', '$name','$address','$city','$state','$zip','$country')"; 
 $result = mysql_query($query); 
 if (!$result){ 
 echo "Something Error! ".mysql_error(); 
 exit; 
 } 
//insert order 
$query = "select id_member from member where 
 nama = '$name' and alamat = '$address' 
 and kota = '$city' and provinsi = '$state' 
 and postcode = '$zip' and negara = '$country'"; 
$result = mysql_query($query); 
if(mysql_numrows($result)>0) 
 $id_member = mysql_result($result, 0, 'id_member'); 
 else{ 
 echo "Something Error! ".mysql_error(); 
 exit; 
 } 
 $date = date('Y-m-d'); 
$query = "insert into order (id_member,jumlah,tanggal) 
 values ($id_member, $total, '$date')"; 
$result = mysql_query($query); 
if (!$result){ 
 echo "Something Error! ".mysql_error(); 
 exit; 
 } 
$query = "select IDOrder from order where 
 id_member = $id_member and 
 tanggal = '$date'"; 
$result = mysql_query($query); 
if(mysql_numrows($result)>0) 
$IDOrder = mysql_result($result, 0, 'IDOrder'); 
// insert order items 
for($i=0;$i<sizeof($cart_isbn);$i++) 
{ 
 $query = "insert into order_items values 
 ('$IDOrder', '$cart_isbn[$i]', '$cart_harga[$i]' , '$cart_qty[$i]')"; 
$result = mysql_query($query);
if(!$result){ 
 echo "Something Error! ".mysql_error(); 
 exit; 
 } 
} 
session_unregister("cart_isbn"); 
session_unregister("cart_judul"); 
session_unregister("cart_gambar"); 
session_unregister("cart_harga"); 
session_unregister("cart_qty"); 
session_unregister("cart_subtotal"); 
session_unregister("total"); 
session_destroy(); 
echo "<center><h2>Thank You for visiting..</h2></center>"; 
echo "<center><h2>.::: Your Order ID is $IDOrder ::.</h2></center>"; 
include 'footer.php';
?>