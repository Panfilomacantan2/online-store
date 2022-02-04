<?php
    require_once('connection.php');
    $sql = "SELECT * FROM product";



?>

 <?php require_once('header.php');?>

<body>

    <section class="container-fluid vh-100 m-lg-0 p-5 d-flex justify-content-center align-items-center">
           <a class="nav-link" href="./add_product_category.php"><ion-icon name="add" size="small" class="cart"></ion-icon></a>
            <div class="products w-100 h-100">
                <div class="row w-100 d-flex justify-content-start align-items-center">
                    
                    <?php
                        $result = mysqli_query($con, $sql);
                        if($result){
                            while($row = mysqli_fetch_assoc($result)){ ?>
                                <div class="col-3 flex-column d-flex justify-content-center align-items-center">
						            <img src="./product_images/categories/<?php echo $row['product_image'];?>"
							        class="category_img"
							        alt=""
						            />

						            <p><?php echo $row['product_name']; ?></p>
						            <p>₱<?php echo $row['product_price']; ?></p>

				                </div>
                             <?php } ?>
                        <?php } ?>
                     </div>
                 </div>
            </div>
    </section>

   <?php require_once('footer.php'); ?>
   <script src="./order_product_main.js"></script>
</body>
</html>