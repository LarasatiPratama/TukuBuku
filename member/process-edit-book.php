<?php include("header.php"); if(isset($_SESSION['username'])){
   ?>
<div class="content"><?php

	$move = false;
 $fileName = $_FILES['gambar']['name'];  
 $fileSize = $_FILES['gambar']['size'];  
 $fileError = $_FILES['gambar']['error'];  
 if($fileSize > 0 || $fileError == 0){  
 move_uploaded_file($_FILES['gambar']['tmp_name'], 'img/'.$fileName);
 $move = true;
 }
 if($move){
$sql = "UPDATE buku SET ";
$sql.="isbn='".$_POST['isbn']."',judul='".$_POST['title']."',penulis='".$_POST['author']."',edisi='".$_POST['edition']."',copyright='".$_POST['copyright']."',deskripsi='".$_POST['description']."',penerbit='".$_POST['publisher']."',gambar='".$fileName."',harga='".$_POST['price']."',kategori='".$_POST['category']."' ";
$sql.="WHERE isbn= ".$_POST['isbn']; 

mysql_query($sql) or exit("Error query : <b>".$sql."</b>.");
echo "<center><h3>Book Edited</h3></center>";
header("refresh: 0.25;book.php");
 }else{   
 echo "<center><h3>Editing Error</h3></center>";
header("refresh: 0.25; book.php");
 }
?>
</div>
<?php ;} else {
  echo "<center><h2>Please Sign In <a href='signin.php'>HERE</a></h2></center>";
}
include("footer.php"); ?>