<div id="frame-tambah">
	<a href="<?php echo BASE_URL."index.php?page=my_profile&module=brand&action=form"; ?>" class="tombol-action">+ Add Stock</a>
</div>

<?php 
$query = mysqli_query($koneksi, "SELECT * FROM barang");

if(mysqli_num_rows($query) == 0)
	{
		echo "<h3>Belum ada stock</h3>";
	}
else
	{
		echo "<table class='table-list'>";

		echo "<tr class='baris-title'>
				<th class='kolom-nomor'>No</th>
				<th class='kiri'>Article</th>
				<th class='kiri'>Kategori</th>
				<th class='tengah'>Status</th>
				<th class='tengah'>Action</th>
			</tr>";

		$no=1;
		while($row=mysqli_fetch_assoc($query))

			{echo "<tr
					<td></td>
					<td >$no</td>
					<td >$row[nama_barang]</td>
					<td >$row[harga]</td>
					<td >$row[status]</td>
					<td >
					<a class='tombol-action' href='".BASE_URL."index.php?page=my_profile&module=brand&action=form&barang_id=$row[barang_id]'>Edit</a>
					</td>
					</tr>";
			$no++;
			}
					echo "</table>";	
	}

 ?>