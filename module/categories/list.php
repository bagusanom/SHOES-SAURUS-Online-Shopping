<h2 style="border-bottom: 1px solid; width: 30%; margin-left: 35%;">CATEGORI LIST</h2>
<br>
<?php 
$queryCategories = mysqli_query($koneksi,"SELECT * FROM kategori");

if(mysqli_num_rows($queryCategories) == 0)
	{
		echo "<h3>Belum ada nama kategori</h3>";
	}
else
	{
		echo "<table class='table-list'>";

		echo "<tr class='baris-title'>
				<th class='kolom-nomor'>No</th>
				<th class='kiri'>Kategori</th>
				<th class='tengah'>Status</th>
				<th class='tengah'>Action</th>
			</tr>";

		$no=1;
		while($row=mysqli_fetch_assoc($queryCategories))

			{echo "<tr
					<td></td>
					<td >$no</td>
					<td >$row[kategori]</td>
					<td>$row[status]</td>
					<td>
					<a class='tombol-action' href='".BASE_URL."index.php?page=my_profile&module=categories&action=form&kategori_id=$row[kategori_id]'>Edit</a>
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
	<a href="<?php echo BASE_URL."index.php?page=my_profile&module=categories&action=form"; ?>" class="tombol-action">Add Categori</a>
</div>