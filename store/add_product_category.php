<?php require_once 'connection.php'; ?>
<?php require_once 'header.php'; ?>
<?php
    if(isset($_POST['submit'])){
        $product_name = trim($_POST['product_name']);
        $product_price = trim($_POST['product_price']);
        $product_category = trim($_POST['product_category']);



        if(!empty($product_name) && !empty($product_price) && !empty($product_category)){
            if(isset($_FILES['product_image']) && $_FILES['product_image']['error'] == 0){
                $file_name = $_FILES['product_image']['name'];
                $file_size = $_FILES['product_image']['size'];
                $file_tmp = $_FILES['product_image']['tmp_name'];
                $file_extension = explode('.', $file_name);
                $file_end = strtolower(end($file_extension));
                $extensions = array("jpeg", "jpg", "png");


                if(in_array($file_end, $extensions)){
                    if($file_size < 1000000){
                        
                        $file_new_name = uniqid('', true) . "." . $file_end;
                        $file_destination = "./product_images/categories/".$file_new_name;
                        move_uploaded_file($file_tmp, $file_destination);
                        $query = "INSERT INTO product (product_name, product_price, product_category, product_image) VALUES ('$product_name', '$product_price', '$product_category', '$file_new_name')";
                        $result = mysqli_query($con, $query);
                        if($result){
                            echo '<div class="alert alert-success p-3" role="alert">Categories added successfully.</div>';  
                                
                        }
                    }else{
                        echo '<div class="alert alert-danger p-3" role="alert">Image size is too large.</div>';  

                    }
                }

            }else{
               echo '<div class="alert alert-danger p-3" role="alert">Please select an image.</div>';  

            }
           
            }else{
             echo '<div class="alert alert-danger p-3" role="alert">Please fill all the fields</div>';  
          }  
     
    }
      
?>





<body>
    <a class="nav-link" href="display_category.php?page=1">
        <ion-icon name="add" class="cart"></ion-icon>View Products</a>
    

    <section id="home" class="vh-100 d-flex justify-content-center align-items-center">
            <div class="container w-50 p-3 border">
                <div class="row my-2">
                    <div class="col-12">
                        <h3 class="text-center fs-3">Add Product Category</h3>
                    </div>
                </div>
                <div class="row my-2">
                    <div class="col-12">
                        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST" enctype="multipart/form-data">
                            <div class="row my-2">
                                <div class="col-12">
                                    <input type="text" name="product_name" placeholder="Product Name" class="form-control">
                                </div>
                            </div>
                            <div class="row my-2">
                                <div class="col-12">
                                    <input type="text" name="product_price" placeholder="Product Price" class="form-control">
                                </div>
                            </div>
                            <div class="row my-2">
                                <div class="col-12">
                                    <input type="text" name="product_category" placeholder="Product Category" class="form-control">
                                </div>
                            </div> 

                            <div class="row my-2">
                                <div class="col-12">
                                    <input type="file" name="product_image" class="py-2" accept="jpg|jpeg|png">
                                </div>
                            </div> 
                            <div class="row my-2">
                                <div class="col-12">
                                    <button class="btn btn-dark px-4" name="submit">Add</button>
                                </div>
                            </div>
                    </form>
                </div>
            </div>
    </section>

</body>
</html>

 