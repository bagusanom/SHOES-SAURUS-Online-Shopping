
<?php 

		if ($user_id == false) 
		{
			$_SESSION["proses_pesanan"] = true;
			header("location: ".BASE_URL."index.php?page=login");
			exit;
		}


 ?>


<?php 

if($totalBarang == 0)
	{
		echo "<h3>CART KOSONG</h3>";
	}

else
	{
		$no=1;

		echo "<table class='table-list'>
				<tr class='baris-title'>
					
					<td class='kanan'></td>
					<td class='kanan'></td>
					<th class='tengah'>No</th>
					<th class='kiri'>Image</th>
					<th class='kiri'>Article</th>
					<th class='tengah'>Qty</th>
					<th class='kanan'>Price</th>
					<th class='kanan1'>Total</th>
				</tr>";

		$subtotal = 0;
		foreach ($keranjang AS $key => $value) 
			{
				$barang_id = $key;

				$nama_barang = $value["nama_barang"];
				$quantity = $value["quantity"];
				$gambar = $value["gambar"];
				$harga = $value["harga"];
				
				$total = $quantity * $harga;
				$subtotal = $subtotal + $total;

				echo "<tr>

						<td class='kanan'></td>
					<td class='kanan'></td>



						<td class='tengah'>$no</tdd>
						<td class='kiri'><img src='".BASE_URL."images/barang/$gambar' height='100px'/></thd>
						<td class='kiri'>$nama_barang</thd>
						<td class='tengah'><input type='text name='$barang_id' value='$quantity' class='update-quantity'/></td>
						<td class='kanan'>".rupiah($harga)."</td>
						<td class='kanan delete_item'>".rupiah($total)." <a href='".BASE_URL."delete_item.php?barang_id=$barang_id'>X</td>
					</tr>";
				$no++;
			}


			echo "<tr>
					<td class='kanan'></td>
					<td class='kanan'></td>
					<td class='kanan'></td>
					<td class='kanan'></td>
					<td class='kanan'></td>
					<td class='kanan'></td>
					
					<td colspan='1' class='kanan'><b>Sub Total<b></td>
					<td class='tengah'><b>".rupiah($subtotal)."</b></td>

					</tr>";

			echo "</table>";

			echo "<div id='frame-button-cart'>
					<a id='lanjut-belanja' href='".BASE_URL."index.php'>Lanjut Belanja</a>
					<a id='lanjut-pemesanan' href='".BASE_URL."index.php?page=data_pemesanan'>Lanjut Pemesanan</a>
					<br>
					<br>
					<br>
 					<br>
					</div>";

	}

 ?>


