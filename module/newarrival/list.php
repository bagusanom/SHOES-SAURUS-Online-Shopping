
<div id="bawah">
	<div style="margin-right:  40px;">
	<h3>VANS</h3>
	<h1>S/S20 COLLECTION</h1>
	</div>
	<br>
	<br>
	<div id="frame-barang">
		<ul>
			<?php 
				$query = mysqli_query($koneksi, "SELECT * FROM barang WHERE kategori_id<=6 ORDER BY barang_id desc ");
	
							while($row=mysqli_fetch_assoc($query))
								{
									echo 
									"<li>
									<p class='price'>".rupiah($row['harga'])."</p>

									<a href='".BASE_URL."index.php?page=detail&barang_id=$row[barang_id]'>
				 						<img src='".BASE_URL."images/barang/$row[gambar]'/>
				 					</a>

				 					<div class='keterangan-gambar'>
				 						<p><a href='".BASE_URL."index.php?page=detail&barang_id=$row[barang_id]'>$row[nama_barang]</a><p/>
				 						<span>Stock: $row[stok]</span>
									</div>

				 					<div class='button-add-cart'>
										<a href='".BASE_URL."add_cart.php?barang_id=$row[barang_id]'>Add to Cart</a>
				 					</div>";
								}
					
			 ?>
		</ul>
		
	</div>	
</div> 

<div id="bawah">
	<br>
	<br>
	<h1>CONVERSE</h1>
	<br>
	<br>
	<div id="frame-barang">
		<ul>
			<?php 
				$query = mysqli_query($koneksi, "SELECT * FROM barang WHERE kategori_id='7' or kategori_id='8' or kategori_id='9' ORDER BY barang_id desc");
	
							while($row=mysqli_fetch_assoc($query))
								{
									echo 
									"<li>
									<p class='price'>".rupiah($row['harga'])."</p>

									<a href='".BASE_URL."index.php?page=detail&barang_id=$row[barang_id]'>
				 						<img src='".BASE_URL."images/barang/$row[gambar]'/>
				 					</a>

				 					<div class='keterangan-gambar'>
				 						<p><a href='".BASE_URL."index.php?page=detail&barang_id=$row[barang_id]'>$row[nama_barang]</a><p/>
				 						<span>Stock: $row[stok]</span>
									</div>

				 					<div class='button-add-cart'>
										<a href='".BASE_URL."add_cart.php?barang_id=$row[barang_id]'>Add to Cart</a>
				 					</div>";
								}
					
			 ?>
		</ul>
	</div>	
</div> 