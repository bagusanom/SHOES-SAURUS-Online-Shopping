<div id="atas">
	<div id="menu-kategori">
		<ul>
			<?php 
				$query = mysqli_query($koneksi, "SELECT * FROM kategori WHERE status='on'");
				while($row=mysqli_fetch_assoc($query))
					{
						if ($kategori_id == $row['kategori_id']) 
							{
								echo "<li><a href='".BASE_URL."index.php?page=my_profile&module=home&action=form&kategori_id=$row[kategori_id]' class='active'>$row[kategori]</a></li>";
							}
						else
							{
								echo "<li><a href='".BASE_URL."index.php?page=my_profile&module=home&action=form&kategori_id=$row[kategori_id]'>$row[kategori]</a></li>";
							}
				 	}
			 ?>
		</ul>
	</div>
</div>


 <div id="bawah">
	<div id="frame-barang">
		<ul>
			<?php 
				if($kategori_id)
					{
						if($query = mysqli_query($koneksi, "SELECT * FROM barang WHERE status='on' AND kategori_id='$kategori_id' ORDER BY rand() DESC LIMIT 6"))
						{
							$no=1;	
							while($row=mysqli_fetch_assoc($query))
							echo "<li>
										<p class='price'>".rupiah($row['harga'])."</p>

									<a href='".BASE_URL."index.php?page=detail&barang_id=$row[barang_id]'>
				 						<img src='".BASE_URL."images/barang/$row[gambar]'/>
				 					</a>

				 					<div class='keterangan-gambar'>
				 						<p><a href='".BASE_URL."index.php?page=detail&barang_id=$row[barang_id]'>$row[nama_barang]</a><p/>
				 						<span>Stock: $row[stok]</span>
									</div>

				 					<div class='button-add-cart'>
										<a href='".BASE_URL."tambah_keranjang.php?barang_id=$row[barang_id]'>Add to Cart</a>
				 					</div>"
				 					;
						}
					}
				else
					{
						$query = mysqli_query($koneksi, "SELECT * FROM barang WHERE status='on' ORDER BY rand() DESC LIMIT 6");
					}

				// $no=1;	
				// while($row=mysqli_fetch_assoc($query))
				// 	// {
				// 	// 	$style=false;
				// 	// 	if ($no == 6) 
				// 	// 		{
				// 	// 			$style="style='margin-right:30px'";
				// 	// 			$no=0;
				// 	// 		}
				// 	// }
				// {
				// 		echo "<li>
				// 				<p class='price'>".rupiah($row['harga'])."</p>
				// 				<a href='".BASE_URL."index.php?page=detail&barang_id=$row[barang_id]'>
				// 					<img src='".BASE_URL."images/barang/$row[gambar]'/>
				// 				</a>
				// 				<div class='keterangan-gambar'>
				// 					<p><a href='".BASE_URL."index.php?page=detail&barang_id=$row[barang_id]'>$row[nama_barang]</a><p/>
				// 					<span>Stock: $row[stok]</span>
				// 				</div>
				// 				<div class='button-add-cart'>
				// 					<a href='".BASE_URL."tambah_keranjang.php?barang_id=$row[barang_id]'>Add to Cart</a>
				// 				</div>";
				// }
					
			 ?>
		</ul>
		
	</div>	
</div> 