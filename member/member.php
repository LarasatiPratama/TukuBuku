<?php include("header.php"); 

if(isset($_SESSION['username'])){

 
?>
<div class="content">    
   	<h2>Member List</h2>  <br>
    <center><h4>[<a href="input-member.php">Add New Member</a>] </h4><br>   
   	<table width="600px" border="1">         
   		<tr>            
   			<th width="10%">ID</th>            
   			<th width="35%">Name</th>            
   			<th>Address</th>
        <th>Action</th>         </tr>         
   	<?php 
                   
         $sql   = "SELECT id_member,nama,alamat FROM member";         
         $hasil = mysql_query($sql) or exit("Error query: <b>".$sql."</b>.");                  
         while($data = mysql_fetch_assoc($hasil)){ ?>            
         <tr>               
         	<td align="center"><?php echo $data['id_member']; ?></td>               
         	<td><?php echo $data['nama']; ?></td>               
         	<td><?php echo $data['alamat']; ?></td>
          <td>
              <a href="detail-member.php?id_member=<?php echo $data['id_member']; ?>">   Detail </a>
              <a href="edit-member.php?id_member=<?php echo $data['id_member']; ?>">   Edit </a>
              <a href="delete-member.php?id_member=<?php echo $data['id_member']; ?>">   Delete </a>
            </td>            
         </tr>         
         <?php         
     }         
     ?>      
 </table></center>   
</div>
<?php  ;} else {
  echo "<center><h2>Please Sign In <a href='signin.php'>HERE</a></h2></center>";
}

include("footer.php"); ?> 