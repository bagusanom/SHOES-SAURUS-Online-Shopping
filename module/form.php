<?php 
$barang_id = isset($_GET['barang_id']) ? $_GET['barang_id'] : false;

 $nama_barang = "";
 // $kategori_id = "";
 $spesifikasi = "";
 // $gambar = "";
 $stok = "";
 $harga = "";
 $status = "";
 // $keterangan_gambar = "";
 $button = "Add";


	// if($barang_id)
	// {
		// $query = mysqli_query($koneksi, "SELECT * FROM barang WHERE barang_id='$barang_id'");
		// $row = mysqli_fetch_assoc($query);

		// $nama_barang = $row['nama_barang'];
		// $kategori_id = $row['kategori_id'];
		// $spesifikasi = $row['spesifikasi'];
		// $gambar = $row['gambar'];
		// $harga = $row['harga'];
		// $stok = $row['stok'];
		// $status = $row['status'];
		// $button = "Update";

		// $keterangan_gambar = "(Klik pilih gambar untuk mengganti foto)";
		// $gambar = "<img src='".BASE_URL."images/barang/$gambar' style= 'vertical-align: middle;width: 20%;' />";
	// }

?>


<form action="<?php echo BASE_URL."module/brand/action.php?brand=$kategori_id"; ?>" method="POST" enctype="multipart/form-data">
	
	<div class="element-form">
			<label>Categories</label>
			<span>
				<select name="kategori_id">
					<?php

						$query = mysqli_query($koneksi, "SELECT kategori_id, kategori FROM kategori WHERE status='on' ORDER BY kategori ASC");
						while ($row=mysqli_fetch_assoc($query)) 
							{ echo "<option value='$row[kategori_id]'>$row[kategori]</option>";
								// if ($kategori_id == $row['kategori_id'])
								// 	{}

								// else
								// 	{
								// 		echo "<option value='$row[kategori_id]'>$row[kategori]</option>";
								// 	}
								
							}

					 ?>
				</select>
			</span>
	</div>

	<div class="element-form">
			<label>Nama Barang</label>
			<span><input type="text" name="nama_barang" value="<?php echo $nama_barang; ?>" /></span>
	</div>

	<div class="element-form">
			<label>Detail</label>
			<span><textarea name="spesifikasi"><?php echo $spesifikasi; ?></textarea></span>
	</div>

	<div class="element-form">
			<label>Stock</label>
			<span><input type="text" name="stok" value="<?php echo $stok; ?>" /></span>
	</div>

	<div class="element-form">
			<label>Price</label>
			<span><input type="text" name="harga" value="<?php echo $harga; ?>" /></span>
	</div>

	<div class="element-form">
			<label>Foto Produk <!-- <?php echo $keterangan_gambar; ?> --></label> 
			<span>
				<input type="file" name="file" /><!-- <?php echo $gambar; ?> -->
			</span>
	</div>

	<div class="element-form">
		<label>Status</label>
			<span>
					<input type="radio" name="status" value="on" <?php if ($status == "on") {echo "checked='true'";} ?> /> On
					<input type="radio" name="status" value="off" <?php if ($status == "off") {echo "checked='true'";} ?> /> Off
			</span>
	</div>

	<div class="element-form">
			<span>
				<input type="submit" name="button" value="<?php echo $button; ?>"/>
			</span>
	</div>
	
</form>