<?php 

if($user_id)
	{
		$module = isset($_GET['module']) ? $_GET['module'] : false;
		$action = isset($_GET['action']) ? $_GET['action'] : false;
		$mode = isset($_GET['mode']) ? $_GET['mode'] : false;
		// $level = isset($_GET['level']) ? $_GET['level'] : false;
		//$user_id = isset($_SESSION['level']) ? $_SESSION['level'] : false;
	}	

else
	{
		header("location:".BASE_URL."index.php?page=login");
	}

 ?>
	<div id="admin">

					<ul>
						<?php 
							if($level == "superadmin"){
						 ?>
						<li><a <?php if($module =="konfirmasipembayaran"){ echo "class='active'";} ?>
							href="<?php echo BASE_URL. "index.php?page=my_profile&module=user&action=list"; ?>">USER</a>
						</li>

						<li><a <?php if($module =="kota"){ echo "class='active'";} ?>
							href="<?php echo BASE_URL. "index.php?page=my_profile&module=kota&action=list"; ?>">SHIPPING</a>
						</li>

						<li><a <?php if($module =="my_profile_pesanan"){ echo "class='active'";} ?>
							href="<?php echo BASE_URL. "index.php?page=my_profile&module=my_profile_pesanan&action=list"; ?>">ORDER LIST</a>
						</li>

						<li><a <?php if($module =="konfirmasipembayaran"){ echo "class='active'";} ?>
							href="<?php echo BASE_URL. "index.php?page=my_profile&module=banner&action=list"; ?>">BANNER</a>
						</li>
						
						<li><a 	<?php if($module =="categories"){ echo "class='active'";} ?>
							href="<?php echo BASE_URL. "index.php?page=my_profile&module=categories&action=list"; ?>">CATEGORIES  </a>
						</li>
						
						<li><a 	<?php if($module =="brand"){ echo "class='active'";} ?>
							href="<?php echo BASE_URL. "index.php?page=my_profile&module=brand&action=list"; ?>">BRAND  </a>
						</li>
						
						<li><a 	<?php if($module =="member"){ echo "class='active'";} ?>
							href="<?php echo BASE_URL. "index.php?page=my_profile&module=member&action=list"; ?>">SHOES SAURUS MEMBERSHIP  </a>
						</li>
					
						<?php 
							}
						 ?>
					</ul>
						
	</div>


<?php 
	if($level == "customer"){
?>

<h2 style="border-bottom: 1px solid; width: 30%; margin-left: 35%;">ODER LIST</h2>
<br>

<?php 
	}
?>

<?php 

if($level == "customer"){
			$queryPesanan = mysqli_query($koneksi,"SELECT pesanan.*, user.nama FROM pesanan JOIN user ON pesanan.user_id=user.user_id WHERE pesanan.user_id='$user_id'
											ORDER BY pesanan.tanggal_pemesanan DESC");
		
	

	if (mysqli_num_rows ($queryPesanan) == 0)
		{
			echo "<h3><b>Belum Ada Pesanan<b></h3>";
		}
	else
		{
			echo " 
					<table class='table-list'>
				 	<tr class='baris-title'>
				 		<th class='kiri'>Invoice</th>
				 		<th class='kiri'>Status</th>
				 		<th class='kiri'>Nama</th>
				 		<th class='kiri'>Opsi</th>
				 	</tr>";

			$adminButton = "";
			while ($row=mysqli_fetch_assoc($queryPesanan)) 
				{
					if ($level == "superadmin") 
						{
							$adminButton ="<a class='tombol-action' href='".BASE_URL."index.php?page=my_profile&module=pesanan&action=status&pesanan_id=$row[pesanan_id]'>
							Update Status </a>";
						}

					$status = $row['status'];
					echo "<tr>
					 		<td class='kiri'>$row[pesanan_id]</td>
					 		<td class='kiri'>$arrayStatusPesanan[$status]</td>
					 		<td class='kiri'>$row[nama]</td>
					 		<td class='kiri'>
					 			<a class='tombol-action' href='".BASE_URL."index.php?page=my_profile&module=pesanan&action=detail&pesanan_id=$row[pesanan_id]'>
					 			Detail Order</a>
					 			$adminButton
					 		</td>
					 	</tr>";
				}

				echo "</table>";
		}

}
 ?>
 <br>
 <br>
 <br>
 <br>
 <br>
 <br>
 <br>


<!-- 	<div id="profile-content">
	<?php 
	
		$file = "module/$module/$action.php";

		if (file_exists($file)) 
		{
		include_once($file);
		}

		 else
		{
			 include_once("module/my_profile_pesanan/list.php");
			echo "<h3>Maaf halaman ini tidak dapat diakses</h3>";
		}

	 ?>
	</div>  -->