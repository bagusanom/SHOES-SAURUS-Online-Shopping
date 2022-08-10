<?php 
$kategori_id = isset($_GET['kategori_id']) ? $_GET['kategori_id'] : false;

$kategori = "";
$status = "";
$button = "Add";

if($kategori_id)
	{
		$queryCategories = mysqli_query($koneksi, "SELECT * FROM kategori WHERE kategori_id='$kategori_id'");
		$row = mysqli_fetch_assoc($queryCategories);

		$kategori = $row['kategori'];
		$status = $row['status'];
		$button = "Update";
	}

 ?>

<h2 style="border-bottom: 1px solid; width: 30%; margin-left: 35%;">EDIT/ADD CATEGORIES</h2>
<br>
<form action="<?php echo BASE_URL."module/categories/action.php?kategori_id=$kategori_id"; ?>" method="POST">
	
	<div class="element-form" style="width:50%; margin-left: 25%;">
			<label>Categories</label>
			<span><input type="text" name="kategori" value="<?php echo $kategori; ?>" /></span>
	</div>

	<div class="element-form">
			<label>Status</label>
			<span>
					<input type="radio" name="status" value="on" <?php if ($status == "on") {echo "checked='true'";} ?> /> On
					<input type="radio" name="status" value="off" <?php if ($status == "off") {echo "checked='true'";} ?> /> Off
			</span>
	</div>

	<div class="element-form">
			<span><input type="submit" name="button" value="<?php echo $button; ?>" /></span>
		</div>
	
</form>