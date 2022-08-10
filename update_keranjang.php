<?php 


	session_start();

	$keranjang = $_SESSION["keranjang"];
	$barang_id = $_POST["barang_id"];
	$value = $_POST["value"];
	$keranjang[$barang_id]["quantity"] = $value;
	$_SESSION["keranjang"] = $keranjang;


 ?>

 <script>
 	

 	$(".update-quantity").on("input", function(e)
 		{
 			var barang_id = $(this).attr("name");
 			var value = $(this).val();

 			$.ajax({
 					method:"POST",
 					url: "update_keranjang.php",
 					data: "barang_id"+barang_id+"&value="+value
 				})
 			.done(function(data){
 				location.reload();
 			});
 		});


 </script>