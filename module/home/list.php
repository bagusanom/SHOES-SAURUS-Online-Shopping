<div id="atas">
	<div id="menu-kategori">
		<ul>
			<?php 
				$query = mysqli_query($koneksi, "SELECT * FROM kategori WHERE status='on'");
				while($row=mysqli_fetch_assoc($query))
					{
						if ($kategori_id == $row['kategori_id']) 
							{
								echo "<li><a href='".BASE_URL."index.php?page=my_profile&module=home&action=form&kategori_id=$row[kategori_id]' class='active'>$row[kategori]</a></li>";
							}
						else
							{
								echo "<li>
								<a href='".BASE_URL."index.php?page=my_profile&module=home&action=form&kategori_id=$row[kategori_id]'>
									$row[kategori]
								</a></li>";
							}
				 	}
			 ?>
		</ul>
	</div>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>





