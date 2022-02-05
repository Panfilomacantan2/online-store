<?php
require_once 'connection.php';
    if(isset($_GET['action']) && $_GET['action'] == 'edit'){
        $id = $_GET['id'];
        $sql = "SELECT * FROM product WHERE id = $id";
        $result = mysqli_query($con, $sql);
        $row = mysqli_fetch_assoc($result);
    }

    if(isset($_POST['update'])){
            $id = $_POST['updated_product_id'];
            $update_product_name = $_POST['update_product_name'];
            $update_product_price = $_POST['update_product_price'];
            $update_product_category = $_POST['update_product_category'];
            $update_product_image = $_FILES['update_product_image'];
            $product_image_tmp = $_FILES['update_product_image']['tmp_name'];
            $product_image_name = $_FILES['update_product_image']['name'];
            $product_folder_path = './product_images/categories/'.$product_image_name;
            $sql = "UPDATE product SET product_name = '$updated_product_name', product_price = '$updated_product_price', product_category = '$updated_product_category', product_image = '$updated_product_image' WHERE id = $id";
            if(!empty($update_product_name) || !empty($update_product_price) || !empty($update_product_category) || !empty($update_product_image)){
                move_uploaded_file($product_image_tmp, $product_folder_path);
                
                $result = mysqli_query($con, $sql);

                header('location: display_category.php?page=1');
            }else{
                echo "Please fill in all the fields";
        }      
    }
?>

<?php require_once 'header.php';?>
<body>

<section class="vh-100 d-flex justify-content-center align-items-center">
          <div class="container w-50">
                <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST" enctype="multipart/form-data" class="border p-4 rounded">
                         <div class="row my-2">
                                <div class="col-12">
                                    <label class="font-weight-bold">Product name</label>
                                    <input type="hidden" name="updated_product_id" value="<?= $row['id']?>">
                                    <input type="text" name="update_product_name" placeholder="Product Name" class="form-control" value="<?= $row['product_name'] ?>">
                                </div>
                            </div>
                            <div class="row my-2">
                                <div class="col-12">
                                <label class="font-weight-bold">Product price</label>
                                    <input type="text" name="update_product_price" placeholder="Product Price" class="form-control" value="<?= $row['product_price'] ?>">
                                </div>
                            </div>
                            <div class="row my-2">
                                <div class="col-12">
                                <label class="font-weight-bold">Product category</label>
                                    <input type="text" name="update_product_category" placeholder="Product Category" class="form-control" value="<?= $row['product_category'] ?>">
                                </div>
                            </div> 

                            <div class="row my-2">
                                <div class="col-12">
                                <label class="font-weight-bold">Product image</label>
                                    <input type="file"  class="form-control border-0 p-0" name="update_product_image" class="py-2" accept="jpg|jpeg|png">
                                </div>
                            </div> 
                                 <div class="row my-2">
                                <div class="col-12">
                                    <button class="btn btn-dark px-4" name="update">UPDATE</button>
                            </div>
                    </div>
             </form>
        </div>
    </section>
<?php require_once 'footer.php';?>
</body>
</html>
