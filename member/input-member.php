<?php include("header.php"); if(isset($_SESSION['username'])){
    ?>
<div class="content">
    <h2>Add A New Member</h2>  <br>
<center><form action="process-input-member.php" method="POST">
<table width="400px">
    <tr><td align="center" valign="middle">Full Name</td>
        <td align="center" valign="middle"><input type="text" name="FullName"></td></tr>
    <tr><td align="center" valign="middle">Date of Birth</td>
        <td align="center" valign="middle"><input type="text" name="TTL"></td></tr>
    <tr><td align="center" valign="middle">Email Address</td>
        <td align="center" valign="middle"><input type="text" name="Email"></td></tr>
    <tr><td align="center" valign="middle">Username</td>
        <td align="center" valign="middle"><input type="text" name="Username"></td></tr>
    <tr><td align="center" valign="middle">Password</td>
        <td align="center" valign="middle"><input type="password" name="Password"></td></tr>
    <tr><td align="center" valign="middle">Re-type Password</td>
        <td align="center" valign="middle"><input type="password" name="Password"></td></tr>
    <tr><td align="center" valign="middle">Address</td>
        <td align="center" valign="middle"><textarea name="Address" cols="16" rows="5" ></textarea></td></tr>
    <tr><td align="center" valign="middle">Country</td>
        <td align="center" valign="middle"><input type="text" name="Country"></td></tr>
    <tr><td align="center" valign="middle">Province</td>
        <td align="center" valign="middle"><input type="text" name="Province"></td></tr>
    <tr><td align="center" valign="middle">City</td>
        <td align="center" valign="middle"><input type="text" name="City"></td></tr>
    <tr><td align="center" valign="middle">Postcode</td>
        <td align="center" valign="middle"><input type="text" name="Postcode"></td></tr>
    <tr><td align="center" valign="middle">Mobile Phone</td>
        <td align="center" valign="middle"><input type="text" name="Phone"></td></tr>
    <tr><td colspan="2" align="right" valign="middle">
        <input type="submit" value="Submit" name="submit"></td></tr>
</table>
</form></center>
</div>
<?php ;} else {
  echo "<center><h2>Please Sign In <a href='signin.php'>HERE</a></h2></center>";
}
include("footer.php"); ?>