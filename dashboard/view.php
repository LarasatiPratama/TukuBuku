
      <h2>Book List</h2>
      [ <a href="add.php">Add</a> ]
      <table width="600px" border="1">
         <tr style="background:#ccc">
            <th width="10%">ID</th>
            <th width="25%">Nama</th>
            <th width="25%">Alamat</th>
            <th>Aksi</th>
         </tr>
         <?php
 
         include("koneksi.php");
       

         $sql   = "SELECT b.isbn, b.judul, b.penulis, b.edisi, b.deskripsi, b.gambar, b.harga, p.nama FROM buku b, penerbit p WHERE b.IDPenerbit=p.IDPenerbit";
         $hasil = mysql_query($sql) or exit("Error query: <b>".$sql."</b>.");
         
         while($data = mysql_fetch_assoc($hasil)){ ?>
            <tr>
               <td align="center"><?php echo $data['id']; ?></td>
               <td><?php echo $data['nama']; ?></td>
               <td><?php echo $data['alamat']; ?></td>
               <td>
                  <a href="../ShowProductDetail.php?id=<?php echo $data['id']; ?>">Detail</a>
                  <a href="change-buku.php?id=<?php echo $data['id']; ?>">Change</a>
                  <a href="delete-buku.php?id=<?php echo $data['id']; ?>">Delete</a>
               </td>
            </tr>
            </tr>
         <?php
         }
         ?>
      </table>
