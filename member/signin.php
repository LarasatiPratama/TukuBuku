<?php include("header.php"); ?>
<div class="content">
<h2>Sing In</h2><br>
<center><form action="process-signin.php" method="POST">
<table align="center" width="270">
<tr>
<td>Username</td><td> <input type="text" value="" name="Username" /></td>
</tr>
<tr>
<td>Password</td><td> <input type="password" value="" name="Password" /></td>
</tr>
<tr>
<td colspan="2" align="right"><input type="submit" value="Sign In" name="login" /></td>
</tr>
</table>
</form></center>

</div>
<?php include("footer.php"); ?>
