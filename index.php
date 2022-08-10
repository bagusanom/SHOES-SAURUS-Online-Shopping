<?php 
	
	session_start();

	include_once("function/koneksi.php");
	include_once("function/helper.php");

	$page = isset($_GET['page']) ? $_GET['page'] : false;
	$kategori_id = isset($_GET['kategori_id']) ? $_GET['kategori_id'] : false;

	$user_id = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : false;
	$nama = isset($_SESSION['nama']) ? $_SESSION['nama'] : false;
	$level = isset($_SESSION['level']) ? $_SESSION['level'] : false;

	$keranjang = isset($_SESSION['keranjang']) ? $_SESSION['keranjang'] : array();
	$totalBarang = count($keranjang);


	

	$module = isset($_GET['module']) ? $_GET['module'] : false;
	$action = isset($_GET['action']) ? $_GET['action'] : false;
	$mode = isset($_GET['mode']) ? $_GET['mode'] : false;
	
?>

<!DOCTYPE html>
<html>
<head>
	<title>shoes.saurus</title>
  <div class="promo " style="color: white; background: black; padding: 1px;">
      
        <center><p>SHOP FROM OUR WEBSTORE : GET FREE FACE MASK, TOTE BAG AND STICKER WORTH 89.000 IDR</p></center>
      
  </div>
	<link href="<?php echo BASE_URL."css/style.css"; ?>" type="text/css"rel="stylesheet"/>
	<link href="<?php echo BASE_URL."css/banner.css"; ?>" type="text/css"rel="stylesheet"/>

	<script src="<?php echo BASE_URL."js/jquery-3.5.1.min.js"; ?>"></script>
	<script src="<?php echo BASE_URL."js/slidesjs-SlidesJS-3/source/jquery.slides.min.js"; ?>"></script>
	<script>
	    $(function() {
	      $('#slides').slidesjs({
	        // width: 550,
	        // height: 350,
	        play: 
	        	{
	        		auto : true,
	        		interval : 3000
	        	},
	        navigation : false
	      });
	    });
 	 </script>

</head>

<body>
	<div id="container">
		<div id="header">

		<div id="menu">
				<div id="user">
					<?php 
							if($user_id)
							{	
								echo" Hi <b>$nama</b>! <br><a href='".BASE_URL."index.php?page=my_profile&module=my_profile_admin&action=list'>My Profile</a>
								<a href= '".BASE_URL."logout.php'>Logout<a/>";

								// if($module =="my_profile_pesanan")
								// 	{ echo "<a href='".BASE_URL."index.php?page=my_profile&module=my_profile_pesanan&action=list'>My Profile</a>";}

							}
					?>

					<div id="kiri">
						<a  id="kanan">IDR</a>
						<a href="<?php echo BASE_URL. "index.php?page=login"; ?>">ACCOUNT</a>
						<a href="<?php echo BASE_URL. "index.php?page=register"; ?>">REGISTER</a>
						<a href="<?php echo BASE_URL. "index.php?page=cart"; ?>">CART
							<?php 

							if ($totalBarang != 0) 
								{
									echo "<span class='total-barang'>($totalBarang)</span>";
								}

							 ?>
						</a>
					</div>

					<div id="logo">
						<a href="<?php echo BASE_URL."index.php?page=home"; ?>">
							<img src="<?php echo BASE_URL."images/logo.jpg"; ?>" />
						</a>
					</div>


					<div id="tengah">

						<a 	<?php if($module =="newarrival"){ echo "class='active'";} ?>
							href="<?php echo BASE_URL. "index.php?page=my_profile&module=newarrival&action=list"; ?>">NEW ARRIVAL </a>
						
						<a 	<?php if($module =="home"){ echo "class='active'";} ?>
							href="<?php echo BASE_URL. "index.php?page=my_profile&module=home&action=list"; ?>">CATEGORIES  </a>
						
						<a 	<?php if($module =="brandd"){ echo "class='active'";} ?>
							href="<?php echo BASE_URL. "index.php?page=my_profile&module=brandd&action=list"; ?>">BRAND  </a>
						
						<a 	<?php if($module =="member"){ echo "class='active'";} ?>
							href="<?php echo BASE_URL. "index.php?page=my_profile&module=member&action=list"; ?>">SHOES SAURUS MEMBERSHIP  </a>
						
						<a <?php if($module =="konfirmasi"){ echo "class='active'";} ?>
							href="<?php echo BASE_URL. "index.php?page=my_profile&module=konfirmasi&action=list"; ?>">KONFIRMASI PEMBAYARAN  </a>
						

					</div>

				</div>
			</div>
		</div>

		<div id="content">
			 <?php 
			 	$filename = "$page.php";
			 	if(file_exists($filename))
			 	{
			 		include_once($filename);
			 	}
			 	else
			 	{
			 		include_once("main.php");
			 	}
			  ?>
		</div>

    <div class="logo bg-light" style="background: #353a40; color: white; font-family: sans-serif;">
        <div class="row" style="display: flex;">
          <p style="display: block; width: 2000px; text-align: justify; margin-left: 50px;">
			            <br>SHOES SAURUS HISTORY <br><br>SHOES SAURUS est 2018 opened our first door in Denpasar, Bali Indonesia. We supply the finest international streetwear/urbanwear available in the market to satisfy our beloved customers. Our products are curated carefully and we only supply the best and original guaranteed.</p><br>

          <div class="col-sm-4 text-center" style="text-align: center; " > 
          	<br>
          	<br>
          	<br>

            <a href="https://lin.ee/hoKWIey" style="padding: 3% ; text-decoration: none;">
            	<img style="width: 7%; " src="images/logo/line.png">
            </a>

            <a href="https://www.instagram.com/shoes.saurus/" style="text-decoration: none;">
            	<img style="width: 7%;" src="images/logo/igg.png">
            </a>

            <a href="https://api.whatsapp.com/send?phone=6285738838477" style="padding: 3%; text-decoration: none;">
            	<img style="width: 7%; " src="images/logo/wa.png">
            </a>

          </div>

             <p style="display: block; width: 2000px; text-align: justify; margin-right: 30px;">
			            <br><br>NEWSLETTER <br><br>Subscribe to receive updates, access to exclusive deals, and more.</p>
          

        </div>
    </div>

		<!-- <div id="footer" style="background: #353a40; color: white; font-family: sans-serif;">
			 <div class="row">
			 	
		        <div class="col-md-3" style="display: flex;">
		            
			            <p style="display: block; width: 600px; ">
			            <br>SHOES SAURUS HISTORY <br><br>SHOES SAURUS est 2018 opened our first door in Denpasar, Bali Indonesia. We supply the finest international streetwear/urbanwear available in the market to satisfy our beloved customers. Our products are curated carefully and we only supply the best and original guaranteed.</p>


			         <div style="  display:contents; " >
				        <img style="width: 5%; height: 5%; text-align: center;" src="images/logo/line.png">
				        <img style="width: 5%; height: 5%;" src="images/logo/igg.png">
				        <img style="width: 5%; height: 5%;" src="images/logo/wa.png">
		        	</div>

					<div class="col-md-3" style=" width: 400px; margin-left: 1050px; position: inherit;">
		            	<p> <br><br>NEWSLETTER <br><br>Subscribe to receive updates, access to exclusive deals, and more.</p>
		        	</div>

		        	

		        </div>

			

		        <div class="col-md-3 mx-auto" style="color: #343a40;">
		            <h5>ET CETERA</h5>
		            <ul>
		                <li>Konfirmasi Pembayaran</li>
		                <li>Store Location</li>
		                <li>Terms and Conditions</li>
		                <li>Return Policy</li>
		                <li>Sizing Chart</li>
		                <li>Contact Us</li>
		                <li>HOW TO ORDER MANUAL</li>
		            </ul>
		        </div>
		         </div> -->

		        

   
	</div>
</body>
</html>