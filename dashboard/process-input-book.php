<?php include("header.php"); if(isset($_SESSION['username'])){
	?>
<div class="content">  
	<?php
	$move = false;
 $fileName = $_FILES['gambar']['name'];  
 $fileSize = $_FILES['gambar']['size'];  
 $fileError = $_FILES['gambar']['error'];  
 if($fileSize > 0 || $fileError == 0){  
 move_uploaded_file($_FILES['gambar']['tmp_name'], 'img/'.$fileName);
 $move = true;
 }
 if($move){
  
$sql = "INSERT INTO buku (isbn, judul, penulis, edisi, copyright, deskripsi, penerbit, gambar, harga, kategori) VALUES ";
$sql.= "('".$_POST['isbn']."','".$_POST['title']."','".$_POST['author']."','".$_POST['edition']."','".$_POST['copyright']."','".$_POST['description']."','".$_POST['publisher']."','$fileName','".$_POST['price']."','".$_POST['category']."')"; 
mysql_query($sql) or exit("Error query : <b>".$sql."</b>.");
echo "<center><h3>A New Book Added</h3></center>";
header("refresh: 0.25; book.php");

 }else{   
 echo "<center><h3>Adding Error</h3></center>";
header("refresh: 0.25; book.php");
 } ?>
</div>
<?php ;} else {
  echo "<center><h2>Please Sign In <a href='signin.php'>HERE</a></h2></center>";
}
include("footer.php"); ?>