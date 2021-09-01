<?php 
$fileGambar="dashboard/img/".$data['gambar'] ; 
if(file_exists($fileGambar)){
?><img src="dashboard/img/<?php echo $data['gambar'] ?>" style=" padding:10px 10px 10px 10px;width: 150px; height: 200px; " >
<?php
}else{
?>
No Image Available
<?php
}
?>