<?php

    require_once 'connection.php';
    require_once 'header.php';

    $sql = "SELECT * FROM product";
    $result = mysqli_query($con, $sql);

    ?>

    <body>
        <section id="home" class="vh-100 p-2 d-flex justify-content-center align-items-center">
            <div class="container p-5 vh-100 d-flex  align-items-center  flex-column mt-5">
                
                <div class="row w-100">
                      <?php while($row = mysqli_fetch_array($result)){ ?>
                    <div class="col-3 flex-column d-flex justify-content-center align-items-center">
                        <img src="./product_images/categories/<?php echo $row['product_image'];?>"
                            class="category_img"
                            alt=""
                        />

                        <p><?php echo $row['product_name']; ?></p>
                    </div>
                         <?php } ?>
                   </div>
                 
             </div>
         </section>

     

    </body>

?>