<div id="bawah"> 
			<?php
				$barang_id = $_GET['barang_id'];

				$query = mysqli_query($koneksi, "SELECT * FROM barang WHERE barang_id='$barang_id' AND status='on'");
				$row = mysqli_fetch_assoc($query);
	
									echo 
									"<div id='detail-barang'>

									<div id='detail-barang1'>

										 <div id='frame-barang'>
										 <img src='".BASE_URL."images/barang/$row[gambar]'/>
										 </div>
									</div>

									<div id='detail-barang2'>
										 

										 <div id='keterangan'>
										 <h2>$row[nama_barang]</h2>
											$row[spesifikasi]
					 					
					 					
					 					
										 <div id='frame-harga'>
					 						<span>".rupiah ($row['harga'])."</span>
										</div>

					 					<a href='".BASE_URL."add_cart.php?barang_id=$row[barang_id]'>Add to cart</a>
					 					</div>
					 				</div>

					 				</div>";
					 				
					
			 ?>
</div> 