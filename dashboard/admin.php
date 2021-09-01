<?php include("header.php"); 

if(isset($_SESSION['username'])){

 
?>
<div class="content">    
   	<h2>Admin List</h2>  <br>
    <center><h4>[<a href="input-admin.php">Add New Admin</a>] </h4><br>   
   	<table width="600px" border="1">         
   		<tr>            
   			<th width="10%">ID</th>            
   			<th width="35%">Username</th>            
   			<th>Password</th>
        <th>Action</th>         </tr>         
   	<?php 
                   
         $sql   = "SELECT uid,username,password FROM admin";         
         $hasil = mysql_query($sql) or exit("Error query: <b>".$sql."</b>.");                  
         while($data = mysql_fetch_assoc($hasil)){ ?>            
         <tr>               
         	<td align="center"><?php echo $data['uid']; ?></td>               
         	<td><?php echo $data['username']; ?></td>               
         	<td><?php echo $data['password']; ?></td>
          <td>
              <a href="detail-admin.php?uid=<?php echo $data['uid']; ?>">   Detail </a>
              <a href="edit-admin.php?uid=<?php echo $data['uid']; ?>">   Edit </a>
              <a href="delete-admin.php?uid=<?php echo $data['uid']; ?>">   Delete </a>
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