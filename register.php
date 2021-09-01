<?php include("header.php"); 



 
?>
<div class="content">    
   	<h2>Register</h2>  <br>
    <center><form action="process-register.php" method="post"> 
   	<table width="400px">
    <tr><td align="center" valign="middle">Full Name</td>
            <td align="center" valign="middle"><input type="text" name="FullName" value=""></td></tr>
    <tr><td align="center" valign="middle">Date of Birth</td>
            <td align="center" valign="middle"><input type="text" name="TTL" value=""></td></tr>
    <tr><td align="center" valign="middle">Email Address</td>
            <td align="center" valign="middle"><input type="text" name="Email" value=""></td></tr>
    <tr><td align="center" valign="middle">Username</td>
            <td align="center" valign="middle"><input type="text" name="Username" value=""></td></tr>
    <tr><td align="center" valign="middle">Password</td>
            <td align="center" valign="middle"><input type="password" name="Password" value=""></td></tr>
    <tr><td align="center" valign="middle">Re-type Password</td>
            <td align="center" valign="middle"><input type="password" name="Password" value=""></td></tr>
    <tr><td align="center" valign="middle">Address</td>
          <td align="center" valign="middle"><textarea name="Address" cols="16" rows="5" value=""></textarea></td></tr>
    <tr><td align="center" valign="middle">Country</td>
            <td align="center" valign="middle"><input type="text" name="Country" value=""></td></tr>
    <tr><td align="center" valign="middle">Province</td>
            <td align="center" valign="middle"><input type="text" name="Province" value=""></td></tr>
    <tr><td align="center" valign="middle">City</td>
            <td align="center" valign="middle"><input type="text" name="City" value=""></td></tr>
    <tr><td align="center" valign="middle">Postcode</td>
            <td align="center" valign="middle"><input type="text" name="Postcode" value=""></td></tr>
    <tr><td align="center" valign="middle">Mobile Phone</td>
            <td align="center" valign="middle"><input type="text" name="Phone" value=""></td>
              </tr>
              <tr><td colspan="2" align="right" valign="middle"><input type="submit" value="Submit" name="submit"></td></tr>
</table></form> </center>   
</div>
<?php 
include("footer.php"); ?> 