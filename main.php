<div id="slides">

      <?php 

      		$queryBanner = mysqli_query($koneksi,"SELECT * FROM banner WHERE status='on' ORDER BY banner_id DESC LIMIT 3");
      		while ($rowBanner=mysqli_fetch_assoc($queryBanner)) 
      			{
      				echo "<img src='".BASE_URL."images/slide/$rowBanner[gambar]'/>";
      			}

       ?>

</div>


<img src="images/card1/1.jpg"

style="width:100%;">


<img src="images/b123rand/brand.jpg"

style="width: 50%;">


<img src="images/catalog/1.jpg"

style="width: 100%;">




<!-- <div id="atas">
	<div id="menu-kategori">
		<ul>
			<?php 
				$query = mysqli_query($koneksi, "SELECT * FROM kategori WHERE status='on'");
				while($row=mysqli_fetch_assoc($query))
					{
						echo "<li><a href='".BASE_URL."index.php?page=my_profile&module=home&action=form&kategori_id=$row[kategori_id]'>$row[kategori]</a></li>";	
				 	}
			 ?>
		</ul>
	</div>
</div> -->



<div id="bawah">
	<br>
	<br> 
	<h3>VANS</h3>
	<h1>S/S20 COLLECTION</h1>
	<br>
	<br>
	<div id="frame-barang">
		<ul>
			<?php 
				$query = mysqli_query($koneksi, "SELECT * FROM barang WHERE kategori_id<=6 ORDER BY rand() DESC LIMIT 6");
	
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
		<div class="element-form">
			<span>
				
				<a 	style="background: blue;
						    padding: 10px 5px;
						    text-decoration: none;
						    color: white;
						    border-radius: 3px;
						    font-size: 20px;
						    :hover{background:black;}

						    };
						    "
				href="<?php echo BASE_URL. "index.php?page=my_profile&module=brandd&action=form"; ?>">View All Vans Shoes</a>

			</span>
		</div>
		<br>
		<br>
		<br>
	</div>	
</div> 



<img src="images/catalog/2.jpg"

style="width: 100%;">



<div id="bawah">
	<br>
	<br>
	<h1>CONVERSE</h1>
	<br>
	<br>
	<div id="frame-barang">
		<ul>
			<?php 
				$query = mysqli_query($koneksi, "SELECT * FROM barang WHERE kategori_id='7' or kategori_id='8' or kategori_id='9'  ORDER BY rand() DESC LIMIT 6");
	
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
		<br>
		<br>
		<br>
		<div class="element-form">
			<span>
				<a 	style="background: blue;
						    padding: 10px 5px;
						    text-decoration: none;
						    color: white;
						    border-radius: 3px;
						    font-size: 20px;
						    :hover{background:black;}

						    };
						    "
				href="<?php echo BASE_URL. "index.php?page=my_profile&module=brandd&action=form1"; ?>">View All Converse Shoes</a>
			</span>
		</div>
		<br>
		<br>
		<br>
	</div>	
</div> 

<img src="images/slide/3.jpg"

style="width: 100%;">