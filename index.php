		<?php
		 require_once 'connection.php';
		 require_once ('session.php');

		 ?>
		<?php require_once 'header.php'; ?>
		<script src="https://unpkg.com/@popperjs/core@2/dist/umd/popper.min.js"></script>
		<script src="https://unpkg.com/tippy.js@6/dist/tippy-bundle.umd.js"></script>
 
	<body>
		<nav
			class="navbar navbar-expand-lg navbar-light bg-light fixed-top flex-lg-row justify-content-center px-lg-5"
		>
			<button
				class="navbar-toggler"
				type="button"
				data-toggle="collapse"
				data-target="#navbarToggler"
				aria-controls="navbarToggler"
				aria-expanded="false"
				aria-label="Toggle navigation"
			>
				<span class="navbar-toggler-icon"></span>
			</button>

			<div
				class="collapse navbar-collapse d-flex align-items-center justify-content-between no-gutters"
				id="navbarToggler"
			>
				<a class="navbar-brand" href="#home"
					><img src="./assets/shopify_logo.png" class="nav_bar_logo" alt=""
				/></a>

				<form class="form-inline my-lg-0 d-none d-lg-flex p-1" id="form_search_product">
					<input
						class="form-control mr-1"
						type="search"
						placeholder="Search"
						aria-label="Search"
						id="nav_search_input"
					/>
					<button class="btn btn-outline-dark my-2 my-sm-0 px-3 py-2" id="nav_search" type="submit">
						<ion-icon name="search" class="search_icon"></ion-icon>
					</button>
				</form>
				<ul class="navbar-nav mt-2 mt-lg-0 ">
					
					<li class="nav-item d-flex justify-content-center align-items-center">
						<a class="nav-link" href="#"
							><ion-icon id="cart" name="cart" size="small" class="cart"></ion-icon
						></a>
					</li>
					
					<li class="nav-item d-flex justify-content-center align-items-center">
						<a class="nav-link" href="#" style="position: relative;">
						<span id="notification_count"  class="lh-1 bg-danger text-light rounded-circle text-center" style="font-size: 12px;z-index:10;display:block;width: 20px;height: 20px;position: absolute;top: -5px;left:15px;">0</span>
							<ion-icon id="notification"  name="notifications" size="small" class="notification"></ion-icon>
							
						</a>
					</li>
					<li class="nav-item active d-flex justify-content-center align-items-center">
						<a class="nav-link" href="./logout.php">
							<ion-icon id="login" name="log-in" size="small" class="login"></ion-icon>
						</a>
					</li>
					<li class="nav-item d-flex justify-content-center align-items-center mb-3">
						<a class="nav-link" id="account" href="#"
							><img src="./assets/user_profile.jpg" style="width: 30px;height:30px;border-radius:50%;" alt="">
							<span><?php echo $_SESSION['first_name'].' '.$_SESSION['last_name'];?></span>
						</a>
					</li>
				</ul>
			</div>
		</nav>

		<section id="home" class="vh-100 d-flex justify-content-center align-items-center">
			<div class="container  d-flex justify-content-center align-items-center  flex-column">
				<div class="row w-100 mb-2">
					<div class="col">
						<h3 class="text-start">Category</h3>
					</div>
				</div>
				<div class="row w-100 justify-content-start">
					<div class="col-lg-3 col-sm-12 flex-column d-flex justify-content-center align-items-center">
						<img
							src="https://cf.shopee.ph/file/25936be031f917470cb8c8ad9f311413_tn"
							class="category_img"
							alt=""
						/>

						<p>Laptops & Computers</p>
					</div>
					<div class="col-3 flex-column d-flex justify-content-center align-items-center">
						<img
							src="https://cf.shopee.ph/file/0e6683c898fca05fbb5297fa271367dc_tn"
							class="category_img"
							alt=""
						/>

						<p>Gaming</p>
					</div>
					<div class="col-3 flex-column d-flex justify-content-center align-items-center">
						<img
							src="https://cf.shopee.ph/file/e96e55c299602c20d369183378887a86_tn"
							class="category_img"
							alt=""
						/>

						<p>Home & Living</p>
					</div>
					<div class="col-3 flex-column d-flex justify-content-center align-items-center">
						<img
							src="https://cf.shopee.ph/file/2e9bfe13ce9cecfbfad8010b843651f6_tn"
							class="category_img"
							alt=""
						/>

						<p>Men's Apparel</p>
					</div>
				</div>
				<div class="row w-100 justify-content-start">
					<div class="col-3 flex-column d-flex justify-content-center align-items-center">
						<img
							src="https://cf.shopee.ph/file/5a9d9bb1c39229501a6acec4f89fdc5c_tn"
							class="category_img"
							alt=""
						/>

						<p>Cameras</p>
					</div>

					<div class="col-3 flex-column d-flex justify-content-center align-items-center">
						<img
							src="https://cf.shopee.ph/file/b3ae45e4ea16d61f0f6cf98ed623bb67_tn"
							class="category_img"
							alt=""
						/>

						<p>Mobiles & gadgets</p>
					</div>
					<div class="col-3 flex-column d-flex justify-content-center align-items-center">
						<img
							src="https://cf.shopee.ph/file/dbb635a304e225aee32af8018b9d3646_tn"
							class="category_img"
							alt=""
						/>

						<p>Home Entertainment</p>
					</div>
					<div class="col-3 flex-column d-flex justify-content-center align-items-center">
						<img
							src="https://cf.shopee.ph/file/fbf1d6707dac5f09db46e60b87aae351_tn"
							class="category_img"
							alt=""
						/>

						<p>Babies & Kids</p>
					</div>
				</div>

				<div class="row w-100 justify-content-start">
					<div class="col-3 flex-column d-flex justify-content-center align-items-center">
						<img
							src="https://cf.shopee.ph/file/d31d29d2f160baeb7592964cd9090a52_tn"
							class="category_img"
							alt=""
						/>

						<p>Home Appliances</p>
					</div>
					<div class="col-3 flex-column d-flex justify-content-center align-items-center">
						<img
							src="https://cf.shopee.ph/file/f2423bdc8e19310ece9cf70c81e58897_tn"
							class="category_img"
							alt=""
						/>

						<p>Groceries</p>
					</div>

					<div class="col-3 flex-column d-flex justify-content-center align-items-center">
						<img
							src="https://cf.shopee.ph/file/34e01853a846ee2280853aa6792effca_tn"
							class="category_img"
							alt=""
						/>

						<p>Motors</p>
					</div>
                  
						<div class="col-3 flex-column d-flex justify-content-center align-items-center">
							<img
								src="https://cf.shopee.ph/file/f12cfed5944ad868e181c6583a5a4426_tn"
								class="category_img"
								alt=""
							/>

							<p>Sports & Travel</p>
						</div>
					</div>

					<div class="row w-100 justify-content-start">
						<div class="col-3 flex-column d-flex justify-content-center align-items-center">
							<img
								src="https://cf.shopee.ph/file/aff648bd1cc6d00de3d908457de3e128_tn"
								class="category_img"
								alt=""
							/>

							<p>Toys</p>
						</div>
					
					<div class="col-3 flex-column d-flex justify-content-center align-items-center">
						<img
							src="https://cf.shopee.ph/file/9ab43516f83df1b1bc400edf56bccac7_tn"
							class="category_img"
							alt=""
						/>

						<p>Womens Accessories</p>
					</div>

					<div class="col-3 flex-column d-flex justify-content-center align-items-center">
						<img
							src="https://cf.shopee.ph/file/15bcf95dddc19a5fb0fb0f9e777761a2_tn"
							class="category_img"
							alt=""
						/>

						<p>Makeup & Fragrances</p>
					</div>
			  </div>
			</div>
		</section>
		<!-- End of Category -->
		<?php require_once 'footer.php'; ?>
		
		<script src="./notification.js"></script>
		<script src="index.js"></script>
	</body>
</html>
