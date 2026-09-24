<?php  include('db.php');
   ob_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>My Website</title>

    <!-- Bootstrap CSS -->
    <link 
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" 
        rel="stylesheet">
</head>

<body>

    <!-- Navbar -->
   <?php include('navbar.php')?>


    <!-- Home Section -->
   <div class="container-fluid min-vh-100 d-flex justify-content-center align-items-center bg-light">

    <div class="card shadow" style="width: 400px;">
        <div class="card-body p-5">

            <h2 class="text-center mb-2">Login</h2>
            <p class="text-center text-muted mb-4">
                Welcome back! Please login to your account.
            </p>



            <form method="post">

                <!-- Email -->
                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input 
                        type="email" 
                        class="form-control" 
                        placeholder="Enter email"
                        name="email"
                        value="<?php  
                            if(isset($_COOKIE['email'])){
                                  echo $_COOKIE['email'];
                            }?>"
                    >
                </div>

                <!-- Password -->
                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input 
                        type="password" 
                        class="form-control" 
                        placeholder="Enter password"
                        name="password"
                        value="<?php  if(isset($_COOKIE['password'])){
                                  echo $_COOKIE['password'];
                            }?>"
                    >
                </div>

                <!-- Remember Me -->
                <div class="form-check mb-3">
                    <input 
                        class="form-check-input" 
                        type="checkbox" 
                        id="remember"
                        name="chk"
                    >
                    <label class="form-check-label" for="remember">
                        Remember Me
                    </label>
                </div>

                <!-- Login Button -->
                <input 
                    type="submit" 
                    class="btn btn-primary w-100"
                    value="Login"
                    name="submit"
                >
                   
                

                <!-- Register -->
                <p class="text-center mt-4 mb-0">
                    Don't have an account?
                    <a href="registration.php" class="text-primary text-decoration-none">
                        Register
                    </a>
                </p>

                <?php
                
                     if(isset($_POST['submit'])){
                        $email= $_POST['email'];
                        $password= $_POST['password'];

                        $query="select * from users where email='$email' and password='$password'";
                        $req= $connection->query($query);
                        $row = $req->fetch_object();
                        if($row && $row != []){
                            if(isset($_POST['chk'])){
                                setcookie("email",$email,time()+3600);
                                setcookie("password",$password,time()+3600);
                            }
                             $_SESSION['user']=$row;
                             header("Location:index.php"); 
                        }
                     }
                
                ?>


            </form>

        </div>
    </div>

</div>


    <!-- Bootstrap JS -->
    <script 
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">
    </script>

</body>
</html>