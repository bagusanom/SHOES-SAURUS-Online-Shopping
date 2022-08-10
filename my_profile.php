<?php 

// if($user_id)
// 	{
// 		$module = isset($_GET['module']) ? $_GET['module'] : false;
// 		$action = isset($_GET['action']) ? $_GET['action'] : false;
// 		$mode = isset($_GET['mode']) ? $_GET['mode'] : false;
// 		// $level = isset($_GET['level']) ? $_GET['level'] : false;
// 		//$user_id = isset($_SESSION['level']) ? $_SESSION['level'] : false;
// 	}	

// else
// 	{
// 		header("location:".BASE_URL."index.php?page=login");
// 	}

 ?>
<!-- 	<div id="admin">

					<ul>
						<?php 
							if($level == "superadmin"){
						 ?>
						<li><a <?php if($module =="konfirmasipembayaran"){ echo "class='active'";} ?>
							href="<?php echo BASE_URL. "index.php?page=my_profile&module=user&action=list"; ?>">USER</a>
						</li>

						<li><a <?php if($module =="konfirmasipembayaran"){ echo "class='active'";} ?>
							href="<?php echo BASE_URL. "index.php?page=my_profile&module=kota&action=list"; ?>">ALAMAT</a>
						</li>

						<li><a <?php if($module =="konfirmasipembayaran"){ echo "class='active'";} ?>
							href="<?php echo BASE_URL. "index.php?page=my_profile&module=banner&action=list"; ?>">BANNER</a>
						</li>

						<li><a 	<?php if($module =="newarrival"){ echo "class='active'";} ?>
							href="<?php echo BASE_URL. "index.php?page=my_profile&module=newarrival&action=list"; ?>">NEW ARRIVAL </a>
						</li>
						
						<li><a 	<?php if($module =="categories"){ echo "class='active'";} ?>
							href="<?php echo BASE_URL. "index.php?page=my_profile&module=categories&action=list"; ?>">CATEGORIES  </a>
						</li>
						
						<li><a 	<?php if($module =="brand"){ echo "class='active'";} ?>
							href="<?php echo BASE_URL. "index.php?page=my_profile&module=brand&action=list"; ?>">BRAND  </a>
						</li>
						
						<li><a 	<?php if($module =="membership"){ echo "class='active'";} ?>
							href="<?php echo BASE_URL. "index.php?page=my_profile&module=membership&action=list"; ?>">SHOES SAURUS MEMBERSHIP  </a>
						</li>
						
						<li><a <?php if($module =="konfirmasipembayaran"){ echo "class='active'";} ?>
							href="<?php echo BASE_URL. "index.php?page=my_profile&module=konfirmasipembayaran&action=list"; ?>">KONFIRMASI PEMBAYARAN  </a>
						</li>
						<?php 
							}
						 ?>
					</ul>
						
	</div> -->



<?php 

	// $queryPesanan = mysqli_query($koneksi,"SELECT * FROM pesanan JOIN user ON pesanan.user_id=user.user_id 
	// 										ORDER BY pesanan.tanggal_pemesanan DESC");

	// if (mysqli_num_rows ($queryPesanan) == 0)
	// 	{
	// 		echo "<h3><b>Belum Ada Pesanan<b></h3>";
	// 	}
	// else
	// 	{
	// 		echo " <table class='table-list'>
	// 			 	<tr class='baris-title'>
	// 			 		<th class='kiri'>Nomor Pesanan</th>
	// 			 		<th class='kiri'>Status</th>
	// 			 		<th class='kiri'>Nama</th>
	// 			 		<th class='kiri'>Opsi</th>
	// 			 	</tr>";

	// 		while ($row=mysqli_fetch_assoc($queryPesanan)) 
	// 			{
	// 				echo "<tr>
	// 				 		<td class='kiri'>$row[pesanan_id]</td>
	// 				 		<td class='kiri'>$row[status]</td>
	// 				 		<td class='kiri'>$row[nama]</td>
	// 				 		<td class='kiri'>
	// 				 			<a class='tombol-action' href='".BASE_URL."index.php?page=my_profile_pesanan&module=pesanan&action=detail&pesanan_id=$row[pesanan_id]'>
	// 				 			Detail Pesanan</a>
	// 				 		</td>
	// 				 	</tr>";
	// 			}

	// 			echo "</table>";
	// 	}


 ?>

 <?php 

	if ($level == "superadmin") 
		{
			$queryPesanan = mysqli_query($koneksi,"SELECT pesanan.*, user.nama FROM pesanan JOIN user ON pesanan.user_id=user.user_id 
												ORDER BY pesanan.tanggal_pemesanan DESC");
		}
	else
		{
			$queryPesanan = mysqli_query($koneksi,"SELECT pesanan.*, user.nama FROM pesanan JOIN user ON pesanan.user_id=user.user_id WHERE pesanan.user_id='$user_id'
											ORDER BY pesanan.tanggal_pemesanan DESC");
		}
	

	// if (mysqli_num_rows ($queryPesanan) == 0)
	// 	{
	// 		echo "<h3><b>Belum Ada Pesanan<b></h3>";
	// 	}
	// else
	// 	{
			
	// 		if($level == "customer"){
						
	// 		echo " 	<h3>Order List</h3>
	// 				<table class='table-list'>
	// 			 	<tr class='baris-title'>
	// 			 		<th class='kiri'>Invoice</th>
	// 			 		<th class='kiri'>Status</th>
	// 			 		<th class='kiri'>Nama</th>
	// 			 		<th class='kiri'>Opsi</th>
	// 			 	</tr>";

	// 		$adminButton = "";
	// 		while ($row=mysqli_fetch_assoc($queryPesanan)) 
	// 			{
	// 				if ($level == "superadmin") 
	// 					{
	// 						$adminButton ="<a class='tombol-action' href='".BASE_URL."index.php?page=my_profile&module=pesanan&action=status&pesanan_id=$row[pesanan_id]'>
	// 						Update Status </a>";
	// 					}

	// 				$status = $row['status'];
	// 				echo "<tr>
	// 				 		<td class='kiri'>$row[pesanan_id]</td>
	// 				 		<td class='kiri'>$arrayStatusPesanan[$status]</td>
	// 				 		<td class='kiri'>$row[nama]</td>
	// 				 		<td class='kiri'>
	// 				 			<a class='tombol-action' href='".BASE_URL."index.php?page=my_profile&module=pesanan&action=detail&pesanan_id=$row[pesanan_id]'>
	// 				 			Detail Order</a>
	// 				 			$adminButton
	// 				 		</td>
	// 				 	</tr>";}
	// 			}

	// 			echo "</table>";
	// 	}


 ?>


 


	<div id="profile-content">
	<?php 
	
		$file = "module/$module/$action.php";

		if (file_exists($file)) 
		{
			include_once($file);
		}

		else
		{
			include_once("my_profile_admin.php");
			// echo "<h3>Maaf halaman ini tidak dapat diakses</h3>";
		}

	 ?>
	</div>
