<?php 
if ($user_id)
	{
		header("location:".BASE_URL);
	}

 ?>



<div id="container-user-akses">
	<form action="<?php echo BASE_URL."proses_login.php"; ?>" method="POST">

		<?php
			$notif = isset($_GET['notif']) ? $_GET['notif'] : false;

			if($notif == true)
				{
					echo "<div class='notif'>Email atau Password yang anda masukan salah!</div>";
				}
		 ?>

		<div class="element-form">
			<label>Email</label>
			<span><input type="text" name="email"/></span>
		</div>

		<div class="element-form">
			<label>Password</label>
			<span><input type="password" name="password"/></span>
		</div>

		<div class="element-form">
			<span><input type="submit" value="Login"/></span>
		</div>

	</form>
</div>
<p>Belum punya akun? <br>
	Silahkan Melakukan Proses Registrasi</p>
<div class="element-form">
			<span>
				<a href="<?php echo BASE_URL. "index.php?page=register"; ?>">
				<input type="submit" value="Register"/></a>
			</span>
		</div>