<?php 
define ("BASE_URL", "http://localhost/shoes.saurus/"); 

$arrayStatusPesanan[0] = "Menunggu Pembayaran";
$arrayStatusPesanan[1] = "Pembayaran Sedang Di Validasi";
$arrayStatusPesanan[2] = "Lunas";
$arrayStatusPesanan[3] = "Pembayaran Di Tolak";

function rupiah($nilai = 0)
{
	$string = "IDR ".number_format($nilai);
	return $string;
}
?>