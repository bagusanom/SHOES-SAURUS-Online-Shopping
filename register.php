<?php 
if ($user_id)
	{
		header("location:". BASE_URL);
	}

 ?>

<div id="container-user-akses">
	<form action="<?php echo BASE_URL."proses_register.php"; ?>" method="POST">

		<?php
			$notif = isset($_GET['notif']) ? $_GET['notif'] : false;
			$nama = isset($_GET['nama']) ? $_GET['nama'] : false;
			$email = isset($_GET['email']) ? $_GET['email'] : false;
			$phone = isset($_GET['phone']) ? $_GET['phone'] : false;
			$alamat = isset($_GET['alamat']) ? $_GET['alamat'] : false;

			if($notif == "require")
				{
					echo "<div class='notif'>Isi dengan lengkap form dibawah!</div>";
				}

			else if($notif == "password")
				{
					echo "<div class='notif'>Password yang anda masukan tidak sama.</div>";
				}

			else if($notif == "email")
				{
					echo "<div class='notif'>Email yang anda gunakan sudah terdaftar.</div>";
				}
		 ?>
		<div class="element-form">
			<label>Nama</label>
			<span><input type="text" name="nama" value="<?php echo $nama; ?>" /></span>
		</div>

		<div class="element-form">
			<label>Email</label>
			<span><input type="text" name="email" value="<?php echo $email; ?>"/></span>
		</div>

		<div class="element-form">
			<label>Telefon</label>
			<span><input type="text" name="phone" value="<?php echo $phone; ?>"/></span>
		</div>

		<div class="element-form">
			<label>Alamat</label>
			<span><textarea name="alamat"><?php echo $alamat; ?></textarea></span>
		</div>

		<div class="element-form">
			<label>Password</label>
			<span><input type="password" name="password"/></span>
		</div>

		<div class="element-form">
			<label>Retype Password</label>
			<span><input type="password" name="re_password"/></span>
		</div>

		<div class="element-form">
			<span><input type="submit" value="Register"/></span>
		</div>
	</form>
</div>