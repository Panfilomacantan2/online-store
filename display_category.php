<?php

require_once 'connection.php';
$sql = "SELECT * FROM product";
$result = mysqli_query($con, $sql);

?>

<?php

	if(isset($_GET['action']) && $_GET['action'] == 'delete'){
		$id = $_GET['id'];
		$sql = "DELETE FROM product WHERE id = $id";
		$result = mysqli_query($con, $sql);
		header('location: display_category.php?page=1');
	}
?>
<?php require_once 'header.php';?>
<body>
	<?php 
	//define total number of results you want per page  
    $results_per_page = 2;  
  
    //find the total number of results stored in the database  
	$query = "SELECT * FROM product";  
    $result = mysqli_query($con, $query);  
    $number_of_result = mysqli_num_rows($result);  
  
    //determine the total number of pages available  
    $number_of_page = ceil($number_of_result / $results_per_page);  
  
    //determine which page number visitor is currently on  
    if (!isset ($_GET['page']) ) {  
        $page = 1;  
    } else {  
        $page = $_GET['page'];  
    }  
  
    //determine the sql LIMIT starting number for the results on the displaying page  
    $page_first_result = ($page-1) * $results_per_page;  
  
    //retrieve the selected results from database   
    $query = "SELECT * FROM product LIMIT " . $page_first_result . ',' . $results_per_page;  
    $result = mysqli_query($con, $query);  

	//next and previous page

	$previous = $page - 1;
	$next = $page + 1;
	?>

	<!-- display all the products  -->
    <section id="home" class="vh-100">

		<!-- this is for the sidenav of all products -->
	<div class="row">
		<div class="col-lg-3">
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
	 </div>

	 <div class="col-lg-9">
		<!-- products table -->

			<table class="table table-striped table-bordered">
				<thead class="thead-dark text-center">
					<tr>
					<th scope="col">Id</th>
					<th scope="col">Product Image</th>
					<th scope="col">Product Name</th>
					<th scope="col">Product Price</th>
					<th scope="col">Actions</th>
					</tr>
				</thead>
				<tbody>
					<!-- display the retrieved result on the webpage   -->
					<?php  while ($row = mysqli_fetch_array($result)) {  ?>
					<tr class="text-center">
						
						<td class="align-middle"><?php echo $row['id'] ?></php></td>
						<td class="align-middle"><img src="./product_images/categories/<?php echo $row['product_image']?>" height="50" width="50"></td>
						<td class="align-middle"><?php echo $row['product_name'] ?></td>
						<td class="align-middle"><?php echo $row['product_price'] ?></td>
						<td class="align-middle"><a href="display_category.php?action=edit&id=<?php echo $row['id']?>" class="btn btn-danger">Edit</a><a href="display_category.php?action=delete&id=<?php echo $row['id']?>" class="btn btn-primary ml-2">Delete</a></td>	
						
					 </tr>
					<?php  }  ?>
				 </tbody>
			  </table>
			</div>
		</div>		
    </section>
		<!-- this is for the pagination -->
		<nav aria-label="" class="align-items-end">
						<ul class="pagination justify-content-end align-self-end px-3">
							<li class="page-item <?= $page <= 1 ? 'disabled': ''; ?>"><a class="page-link" href="display_category.php?page=<?= $previous; ?>" tabindex="-1">Previous</a></li>
							<!-- display the link of the pages in URL   -->
							<?php for($page = 1; $page<=$number_of_page; $page++) {  ?>			
							
						     <li class="page-item"><a class="page-link" href="display_category.php?page=<?= $page; ?>"><?= $page; ?></a></li>
							<?php	} ?>
							<li class="page-item <?= $_GET['page'] == $number_of_page ? 'disabled' : ''; ?>"><a class="page-link" href="display_category.php?page=<?= $next; ?>">Next</a></li>
						</ul>
					</nav> 		
			</body>
	</html>


