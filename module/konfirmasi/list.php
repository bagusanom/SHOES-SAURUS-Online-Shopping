<?php 

	// $pesanan_id = $_GET["pesanan_id"];

 ?>

<h2 style="border-bottom: 1px solid; width: 30%; margin-left: 35%;">KONFIRMASI PEMBAYARAN</h2>
<br>
 <table class="table-list">
 	

 	<form action="<?php echo BASE_URL."module/pesanan/action.php?pesanan_id=$pesanan_id"; ?>" method="POST">
 		
 		<div class="element-form">
 			<label>Nomor Rekening Pengirim</label>
 			<span><input type="text" name="nomor_rekening"/></span>
 		</div>

 		<div class="element-form">
 			<label>Nama Account</label>
 			<span><input type="text" name="nama_account"/></span>
 		</div>

 		<div class="element-form">
 			<label>Tanggal Transaksi <br>(format: yyyy-mm-dd)</label>
 			<span><input type="text" name="tanggal_transfer"/></span>
 		</div>

 		<div class="element-form">
 			<span><input type="submit" value="Konfirmasi" name="button"/></span>
 		</div>

 	</form>


 </table>