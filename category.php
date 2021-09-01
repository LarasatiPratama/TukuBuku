$strsql="SELECT * FROM categories"; 
$query=mysql_query($strsql,$koneksi); 
//membuat table 
echo "<table align=center bgcolor=#F1F2F3 width=600 border=1 cellspacing=0 
cellpadding=10> 
 <tr> 
 <th colspan=2>DAFTAR KATEGORI BUKU</th> 
 </tr> 
 <tr><td>Silahkan Pilih Kategori : <br>"; 