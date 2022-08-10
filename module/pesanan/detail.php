<?php 


$pesanan_id = $_GET["pesanan_id"];

$query = mysqli_query($koneksi,"SELECT pesanan.nama_penerima, pesanan.nomor_telepon, pesanan.alamat, pesanan.tanggal_pemesanan, user.nama,
										kota.kota, kota.tarif FROM pesanan JOIN user ON pesanan.user_id=user.user_id JOIN kota ON kota.kota_id=pesanan.kota_id
										WHERE pesanan.pesanan_id='$pesanan_id'");

$row=mysqli_fetch_assoc($query);

$tanggal_pemesanan = $row['tanggal_pemesanan'];
$nama_penerima = $row['nama_penerima'];
$nomor_telepon = $row['nomor_telepon'];
$alamat = $row['alamat'];
$tarif = $row['tarif'];
$nama = $row['nama'];
$kota = $row['kota'];


 ?>

 <div id="frame-faktir">
 	
 	<h2 style="border-bottom: 1px solid; width: 30%; margin-left: 35%;">DETAIL ORDER</h2>
 	<br>
 	<br>

 	<hr/>

 	<table style="margin-left: 800px;">

 		<tr>
 			<td>INVOICE</td>
 			<td>:</td>
 			<td><?php echo $pesanan_id; ?></td>
 		</tr>

 		<tr>
 			<td>Pemesan</td>
 			<td>:</td>
 			<td><?php echo $nama; ?></td>
 		</tr>

 		<tr>
 			<td>Nama Penerima</td>
 			<td>:</td>
 			<td><?php echo $nama_penerima; ?></td>
 		</tr>

 		<tr>
 			<td>Alamat</td>
 			<td>:</td>
 			<td><?php echo $alamat; ?></td>
 		</tr>

 		<tr>
 			<td>Telepon</td>
 			<td>:</td>
 			<td><?php echo $nomor_telepon; ?></td>
 		</tr>

 		<tr>
 			<td>Tanggal Pemesanan</td>
 			<td>:</td>
 			<td><?php echo $tanggal_pemesanan; ?></td>
 		</tr>

 	</table>
<br>
<hr/>
 </div>


 <table class="table-list" style="width: 80%; margin-left: 12%;">
 	
 	<tr class="baris-title">
 		<th class="no">NO</th>
 		<th class="kiri">Article</th>
 		<th class="tengah">Qty</th>
 		<th class="kanan">Price</th>
 		<th class="kanan">Total</th>
 	</tr>

 	<?php 


 	$queryDetail = mysqli_query($koneksi, "SELECT pesanan_detail.*,barang.nama_barang FROM pesanan_detail JOIN barang ON
 											pesanan_detail.barang_id=barang.barang_id WHERE pesanan_detail.pesanan_id='$pesanan_id'");

 	$no = 1;
 	$subtotal = 0;
 	while ($rowDetail=mysqli_fetch_assoc($queryDetail)) 
 		{
 			$total = $rowDetail ["harga"] * $rowDetail ["quantity"];
 			$subtotal = $subtotal + $total;
 			echo "<tr>
			 		<td class='no'>$no</td>
			 		<td class='kiri'>$rowDetail[nama_barang]</td>
			 		<td class='tengah'>$rowDetail[quantity]</td>
			 		<td class='kanan'>".rupiah($rowDetail["harga"])."</td>
			 		<td class='kanan'>".rupiah($total)."</td>
			 	</tr>";

			 	$no++;
 		}

 		$subtotal = $subtotal + $tarif;

 	 ?>


 	 <tr >
 	 	<td class="kanann"></td>
 	 	<td class="kanann"></td>
 	 	<td class="kanann"></td>
 	 	<td class="kanann" colspan="1">Shipping</td>
 	 	<td class="kanan"><?php echo rupiah($tarif); ?></td>
 	 </tr>

 	 <tr>
 	 	<td class="kanann"></td>
 	 	<td class="kanann"></td>
 	 	<td class="kanann"></td>
 	 	<td class="kanann" colspan="1"><b>Sub Total</b></td>
 	 	<td class="kanan"><b><?php echo rupiah($subtotal); ?></b></td>
 	 </tr>

 </table>
 <br>
 <br>
<hr/>
<br>

<?php 
	if($level == "customer"){
?>

 <div id="frame-keterangan-pembayaran">
 	
 	<p>Silahkan melakukan pebayaran ke Bank BNI <br>
 		Nomor Rekening : 4543645 A/N I Gede Bagus Anom. <br>
 		Mohon lakukan Konfirasi Pembayaran setelah melakukan transaksi <br>
 		<br> 
 		<a class="tombol-action" href="<?php echo BASE_URL."index.php?page=my_profile&module=konfirmasi&action=list&pesanan_id=$pesanan_id" ?>">Konfirmasi Pembayaran</a><br>
 																		<!-- page=my_profile&module=konfirmasi&action=list -->	
 		</p>


 </div>

 <?php 
	}
?>