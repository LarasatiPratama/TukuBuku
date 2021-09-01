<?php include("header.php"); if(isset($_SESSION['username'])){
    ?>
<div class="content">
    <h2>Edit Member</h2><br>
<?php $sql   = "SELECT id_member, email, username, password, nama, ttl, alamat, kota, provinsi, negara, kodepos, phone FROM member WHERE id_member= ".$_GET['id_member'];

$hasil = mysql_query($sql) or exit("Gagal query : <b>".$sql."</b>.");
$data  = mysql_fetch_assoc($hasil); ?>

<center><form action="process-edit-member.php" method="POST">


<table width="400px">
    <tr><td align="center" valign="middle">Full Name</td>
            <td align="center" valign="middle"><input type="text" name="FullName" value="<?php echo $data['nama']?>"></td></tr>
    <tr><td align="center" valign="middle">Date of Birth</td>
            <td align="center" valign="middle"><input type="text" name="TTL" value="<?php echo $data['ttl']?>"></td></tr>
    <tr><td align="center" valign="middle">Email Address</td>
            <td align="center" valign="middle"><input type="text" name="Email" value="<?php echo $data['email']?>"></td></tr>
    <tr><td align="center" valign="middle">Username</td>
            <td align="center" valign="middle"><input type="text" name="Username" value="<?php echo $data['username']?>"></td></tr>
    <tr><td align="center" valign="middle">Password</td>
            <td align="center" valign="middle"><input type="password" name="Password" value="<?php echo $data['password']?>"></td></tr>
    <tr><td align="center" valign="middle">Re-type Password</td>
            <td align="center" valign="middle"><input type="password" name="Password" value="<?php echo $data['password']?>"></td></tr>
    <tr><td align="center" valign="middle">Address</td>
          <td align="center" valign="middle"><textarea name="Address" cols="16" rows="5" value="<?php echo $data['alamat']?>"></textarea></td></tr>
    <tr><td align="center" valign="middle">Country</td>
            <td align="center" valign="middle"><input type="text" name="Country" value="<?php echo $data['negara']?>"></td></tr>
    <tr><td align="center" valign="middle">Province</td>
            <td align="center" valign="middle"><input type="text" name="Province" value="<?php echo $data['provinsi']?>"></td></tr>
    <tr><td align="center" valign="middle">City</td>
            <td align="center" valign="middle"><input type="text" name="City" value="<?php echo $data['kota']?>"></td></tr>
    <tr><td align="center" valign="middle">Postcode</td>
            <td align="center" valign="middle"><input type="text" name="Postcode" value="<?php echo $data['kodepos']?>"></td></tr>
    <tr><td align="center" valign="middle">Mobile Phone</td>
            <td align="center" valign="middle"><input type="text" name="Phone" value="<?php echo $data['phone']?>"></td>
              <input type="hidden" name="id_member" value="<?php echo $data['id_member'];?>"></tr>
    <tr><td colspan="2" align="right" valign="middle"><input type="submit" value="Submit" name="submit"></td></tr>
</table>
</form></center>
</div>
<?php ;} else {
  echo "<center><h2>Please Sign In <a href='signin.php'>HERE</a></h2></center>";
}
include("footer.php"); ?>