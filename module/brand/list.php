<h2 style="border-bottom: 1px solid; width: 30%; margin-left: 35%;">BRAND LIST</h2>
<br>
<?php 
$query = mysqli_query($koneksi, "SELECT barang.*, kategori.kategori FROM barang JOIN kategori ON barang.kategori_id=kategori.kategori_id ORDER BY nama_barang");

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
				<th class='kiri'>Price</th>
				<th class='tengah'>Status</th>
				<th class='tengah'>Stok</th>
				<th class='tengah'>Action</th>
			</tr>";

		$no=1;
		while($row=mysqli_fetch_assoc($query))

			{echo "<tr
					<td></td>
					<td class='kolom-nomor'>$no</td>
					<td class='kiri'>$row[nama_barang]</td>
					<td class='kiri'>$row[kategori]</td>
					<td class='tengah'> ".rupiah($row["harga"])." </td>
					<td class='tengah'>$row[status]</td>
					<td class='tengah'>$row[stok]</td>
					<td>
					<a class='tombol-action' href='".BASE_URL."index.php?page=my_profile&module=brand&action=form&barang_id=$row[barang_id]'>Edit</a>
					</td>
					</tr>";
			$no++;
			}
					echo "</table>";	
	}

 ?>
<br>
<br>
 <div id="frame-tambah">
	<a href="<?php echo BASE_URL."index.php?page=my_profile&module=brand&action=form"; ?>" class="tombol-action">Add Stock</a>
</div>