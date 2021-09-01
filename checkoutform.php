<?php 
include 'header.php';
if ((sizeof($cart_isbn)<1) && (empty($isbn))){ 
 echo "<center><h2>Your cart is empty..</h2></center>"; 
 include 'footer.php'; 
 exit; 
} 
if (sizeof($cart_isbn)>0){ 
echo "<table align=center  width=600  cellspacing=0 
cellpadding=0> 
 <tr> 
 <th>No.</th> 
 <th>Book</th> 
 <th>Q</th> 
 <th>Price</th> 
 <th>Subtotal</th> 
 </tr>"; 
for($i=0;$i<sizeof($cart_isbn);$i++){ 
 //mengambil field judul 
 //dari tabel buku 
 $strsql="SELECT judul 
 FROM buku 
 WHERE isbn='$cart_isbn[$i]'"; 
 $query=mysql_query($strsql); 
 while($data=mysql_fetch_array($query)){ 
 $cart_judul[$i]=$data[0]; 
 } 
 echo "<tr> 
 <td><br>".++$nomor."</td> 
 <td>$cart_isbn[$i]<br>$cart_judul[$i]</td> 
 <td>$cart_qty[$i]</td> 
 <td>$cart_harga[$i]</td> 
 <td>".$cart_qty[$i]*$cart_harga[$i]."</td> 
 </tr>"; 
} 
//menampilkan total Pembelian 
echo "<tr> 
 <td colspan=4>Total</td> 
 <td colspan=3>Rp $total</td> 
 </tr>"; 
echo "</table>"; 
} 
//form pemesanan 
echo "<form name=formCheckout method=post action=process-checkout.php>"; 
echo "<table align=center width=600 cellspacing=0 
cellpadding=0> 
 <tr> 
 <td colspan=2>Data Pemesan</td> 
 </tr>"; 
 echo "<tr> 
 <td>Name</td> 
 <td><input name=name type=text size=25></td> 
 </tr> 
 <tr> 
 <td>Address</td> 
 <td><input name=address type=text size=50></td> 
 </tr> 
 <td>City</td> 
 <td><input name=city type=text size=20></td> 
 </tr> 
 <td>Province</td> 
 <td><input name=state type=text size=20></td> 
 </tr> 
 <td>Postcode</td> 
 <td><input name=zip type=text size=5></td> 
 </tr> 
 <td>Country</td> 
 <td><input name=country type=text size=20></td> 
 </tr> 
 <td><input name=Send type=submit id=Send value=Send></td> 
 <td><input name=Clear type=reset id=Clear value=Clear></td> 
 </tr> 
 "; 
echo "</table>"; 
echo "</form>"; 
include 'footer.php';
?>