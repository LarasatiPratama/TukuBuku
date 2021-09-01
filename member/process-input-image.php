<?php
 $move = false;
 $fileName = $_FILES['gambar']['name'];  
 $fileSize = $_FILES['gambar']['size'];  
 $fileError = $_FILES['gambar']['error'];  
 if($fileSize > 0 || $fileError == 0){  
 move_uploaded_file($_FILES['gambar']['tmp_name'], '../img/'.$fileName);
 $move = true;
 }
 if($move){
include("../config/koneksi.php");
$sql = "INSERT INTO buku(nama,harga,id_kategori,gambar,deskripsi) ";
$sql.= "VALUES ('".$_POST['nama']."','".$_POST['harga']."','".$_POST['id_kategori']."','".$fileName."','".$_POST['deskripsi']."')";
mysql_query($sql) or exit("Error query : <b>".$sql."</b>.");
?>
<script language="JavaScript">
	alert("Data berhasil ditambahkan.");
	window.location='admin-products.php';
</script>
 <?php
 }else{ ?>   
 <script language="JavaScript">
	alert("file gagal diupload atau belum dimasukkan");
	window.location='admin-products-add-form.php';
</script> 
<?php } ?>