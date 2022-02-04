
<?php require_once('connection.php'); ?>

<?php
session_start();

    if ($_SESSION['user_status'] == 'invalid' || empty($_SESSION['username'])) {
        /* Set Default Invalid */
        $_SESSION['user_status'] = 'invalid';
    }

    if($_SESSION['user_status'] == 'valid'){
        header('location: ./index.php');
    }



    #login user
    if(isset($_POST['login'])){
        $username = mysqli_real_escape_string($con, trim($_POST['username']));
        $password = mysqli_real_escape_string($con, trim($_POST['password']));
        $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
        $result = mysqli_query($con, $sql);
        if(!empty($username) && !empty($password)){
            
            if(mysqli_query($con, $sql)){
               //if there is a match account
                if(mysqli_num_rows($result) > 0){
                    $row = mysqli_fetch_assoc($result);
                     echo '<div class="alert alert-success p-3" role="alert">Successfully logged in.</div>';

                     //set the session
                        $_SESSION['user_status'] = "valid";
                        $_SESSION['username'] = $row['username'];
                        $_SESSION['first_name'] = $row['first_name'];
                        $_SESSION['last_name'] = $row['last_name'];
                        print_r($_SESSION); 

                        if($row['role'] == "admin"){
                            header("location: admin.php");
                        }elseif($row['role'] == "user"){
                            header('Location: ./index.php');
                        }
                        
                }else{
                    $_SESSION['user_status'] = "invalid";
                        print_r($_SESSION); 
                echo '<div class="alert alert-danger p-3" role="alert">Password does not match.</div>';
            }
        }
        }else{
            echo '<div class="alert alert-danger p-3" role="alert">Please fill all the fields</div>';   
    }
    
 }

?>
<?php require_once('header.php'); ?>
<body>
    <div class="container vh-100 d-flex align-items-center justify-content-center">
         <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST" class="d-flex flex-column p-4 w-50 border">
             <div class="row form-group">
                <div class="col-12">
                    <label for="username">Username<span class="text-danger">*</span></label>
                    <input type="text" name="username" id="username" placeholder="Username" class="form-control">
                </div>
            </div>
            <div class="row form-group">
                <div class="col-12">
                    <label for="username d-block">Password<span class="text-danger">*</span></label>
                    <input type="password" name="password" id="password" placeholder="Password" class="form-control">
                </div>
            </div>
            <div class="row form-group">
                <div class="col-12">
                    <button name="login" id="btn_login" class="form-control btn btn-dark">LOGIN</button>
                </div>
            </div>
        </form>
    </div>
</body>
</html>