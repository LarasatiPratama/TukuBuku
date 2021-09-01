<?php
include("header.php"); 
	?>

<div class="content">
<?php
$sql = "SELECT username FROM member "; 
$sql.= "WHERE username='".$_POST['Username']."' "; 
$sql.= "AND password='".$_POST['Password']."' ";
$hasil = mysql_query($sql) or exit("Error query : <b>".$sql."</b>.");
if(mysql_num_rows($hasil)>0){
   $data = mysql_fetch_array($hasil);   
   $_SESSION['member'] = $data['username'];
   echo "<h2>Thank You for Signing In..</h2>";      
   header("refresh: 0.25; profile.php");   exit(); 
} else { ?>   
<h2>Sorry..</h2>   
<p>      
	Invalid Username or Password.      
	Click <a href="signin.php">here</a> to try again.   
	</p>   
	<?php }
?>
</div>
<?php 
include("footer.php"); ?>