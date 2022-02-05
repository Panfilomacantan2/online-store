<?php
    session_start();

    require_once('connection.php');
?>

<?php require_once('header.php'); ?>
<style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
<!-- script for tooltip -->
<script src="https://unpkg.com/@popperjs/core@2/dist/umd/popper.min.js"></script>
<script src="https://unpkg.com/tippy.js@6/dist/tippy-bundle.umd.js"></script>
<!-- Bootstrap core CSS -->
<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="sidebars.css">
<body>
    <header class="bg-light d-flex justify-content-between align-items-center px-5">
    <a class="navbar-brand" href="#home">
      <img src="./assets/shopify_logo.png" class="nav_bar_logo" alt=""/>
    </a>

    <ul class="navbar-nav mt-2 mt-lg-0 flex-row">
					<li class="nav-item active d-flex justify-content-center align-items-center m-2">
						<a class="nav-link"  href="./logout.php">
							<ion-icon id="login" name="log-in" size="small" class="login"></ion-icon>
						</a>
					</li>
					<li class="nav-item d-flex justify-content-center align-items-center m-2">
						<a class="nav-link"   href="#"
							><ion-icon id="cart" name="cart" size="small" class="cart"></ion-icon
						></a>
					</li>
					<li class="nav-item d-flex justify-content-center align-items-center m-2">
						<a class="nav-link"   href="./add_product_category.php"
							><ion-icon id="add_cart" name="add" size="small" class="cart"></ion-icon
						></a>
					</li>
					<li class="nav-item d-flex justify-content-center align-items-center m-2">
						<a class="nav-link"   href="#" style="position: relative;">
						<span id="notification_count"  class="lh-1 bg-danger text-light rounded-circle text-center" style="font-size: 12px;z-index:10;display:block;width: 20px;height: 20px;position: absolute;top: -5px;left:15px;">0</span>
							<ion-icon id="notification" name="notifications" size="small" class="notification"></ion-icon>
							
						</a>
					</li>
					<li class="nav-item ml-2">
						<a class="nav-link" id="account" href="#"
							><img id="account" src="./assets/user_profile.jpg" style="width: 30px;height:30px;border-radius:50%;" alt="">
						</a>
					</li>
				</ul>
    </header>
    
    <section class="container-fluid  vh-100 p-0" id="admin_section">
     <!-- This is for the admin side nav -->
          <main>
            <div class="d-flex flex-column flex-shrink-0 p-3 text-white bg-dark" style="width: 280px;">
              <img src="./assets/user_profile.jpg" alt="">
              <hr>
              <ul class="nav nav-pills flex-column mb-auto">
                <li class="nav-item">
                  <a href="#" class="nav-link active" aria-current="page">
                    <svg class="bi me-2" width="16" height="16"><use xlink:href="#home"/></svg>
                    Home
                  </a>
                </li>
                <li>
                  <a href="#" class="nav-link text-white">
                    <svg class="bi me-2" width="16" height="16"><use xlink:href="#speedometer2"/></svg>
                    Dashboard
                  </a>
                </li>
                <li>
                  <a href="#" class="nav-link text-white">
                    <svg class="bi me-2" width="16" height="16"><use xlink:href="#table"/></svg>
                    Orders
                  </a>
                </li>
                <li>
                  <a href="#" class="nav-link text-white">
                    <svg class="bi me-2" width="16" height="16"><use xlink:href="#grid"/></svg>
                    Products
                  </a>
                </li>
                <li>
                  <a href="#" class="nav-link text-white">
                    <svg class="bi me-2" width="16" height="16"><use xlink:href="#people-circle"/></svg>
                    Customers
                  </a>
                </li>
              </ul>
              <hr>
              <div class="dropdown">
                <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                  <img src="https://github.com/mdo.png" alt="" width="32" height="32" class="rounded-circle me-2">
                  <strong>mdo</strong>
                </a>
                <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
                  <li><a class="dropdown-item" href="#">New project...</a></li>
                  <li><a class="dropdown-item" href="#">Settings</a></li>
                  <li><a class="dropdown-item" href="#">Profile</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Sign out</a></li>
                </ul>
              </div>
            </div>
     </main>       
</section>

    

<?php require_once('footer.php'); ?>
<script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
<script src="sidebars.js"></script>
<script src="admin.js"></script>
</body>
</html>