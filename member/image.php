<?php 
$fileGambar="img/".$data['gambar'] ; 
if(file_exists($fileGambar)){
?><img  src="img/<?php echo $data['gambar'] ?>" style=" padding-right:10px; float:left; width: 150px; height: 200px; " >
<?php
}else{
?>
No Image Available
<?php
}
?>