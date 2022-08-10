<h2 style="border-bottom: 1px solid; width: 30%; margin-left: 35%;">ORDER LIST</h2>
<br>
<br>
<?php 

	if ($level == "superadmin") 
		{
			$queryPesanan = mysqli_query($koneksi,"SELECT pesanan.*, user.nama FROM pesanan JOIN user ON pesanan.user_id=user.user_id 
												ORDER BY pesanan.tanggal_pemesanan DESC");
		}
	else
		{
			$queryPesanan = mysqli_query($koneksi,"SELECT pesanan.*, user.nama FROM pesanan JOIN user ON pesanan.user_id=user.user_id WHERE pesanan.user_id='$user_id'
											ORDER BY pesanan.tanggal_pemesanan DESC");
		}
	

	if (mysqli_num_rows ($queryPesanan) == 0)
		{
			echo "<h3><b>Belum Ada Pesanan<b></h3>";
		}
	else
		{
			echo " 
					<table class='table-list'>
				 	<tr class='baris-title'>
				 		<th class='kiri'>Invoice</th>
				 		<th class='kiri'>Status</th>
				 		<th class='kiri'>Nama</th>
				 		<th class='kiri'>Opsi</th>
				 	</tr>";

			$adminButton = "";
			while ($row=mysqli_fetch_assoc($queryPesanan)) 
				{
					if ($level == "superadmin") 
						{
							$adminButton ="<a class='tombol-action' href='".BASE_URL."index.php?page=my_profile&module=pesanan&action=status&pesanan_id=$row[pesanan_id]'>
							Update Status </a>";
						}

					$status = $row['status'];
					echo "<tr>
					 		<td class='kiri'>$row[pesanan_id]</td>
					 		<td class='kiri'>$arrayStatusPesanan[$status]</td>
					 		<td class='kiri'>$row[nama]</td>
					 		<td class='kiri'>
					 			<a class='tombol-action' href='".BASE_URL."index.php?page=my_profile&module=pesanan&action=detail&pesanan_id=$row[pesanan_id]'>
					 			Detail Order</a>
					 			$adminButton
					 		</td>
					 	</tr>";
				}

				echo "</table>";
		}


 ?>
 <br>
 <br>
 <br>
