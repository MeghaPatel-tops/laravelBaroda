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

            <h2 class="text-center mb-2">Registration</h2>
           

            <form method="POST">

                <!-- Email -->
                <div class="mb-3">
                    <label class="form-label">Username</label>
                    <input 
                        type="text" 
                        class="form-control" 
                        placeholder="Enter Username"
                        name="username"
                    >
                </div>
                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input 
                        type="email" 
                        class="form-control" 
                        placeholder="Enter email"
                        name="email"
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
                    >
                </div>
                 <div class="mb-3">
                    <label class="form-label">Contcat</label>
                    <input 
                        type="text" 
                        class="form-control" 
                        placeholder="Enter Contcat"
                        name="contact"
                    >
                </div>

              

                <!-- Login Button -->
                <input 
                    type="submit" 
                    class="btn btn-primary w-100"
                    value="Submit" name="submit"
                >
                    
               

                <!-- Register -->
                <p class="text-center mt-4 mb-0">
                    Do you  have an account?
                    <a href="login.php" class="text-primary text-decoration-none">
                        Login
                    </a>
                </p>

                <?php
                  
                    if(isset($_POST['submit'])){
                        $username = $_POST['username'];
                        $email=$_REQUEST['email'];
                        $password=$_REQUEST['password'];
                        $contact=$_REQUEST['contact'];

                        $query = "insert into users (username,email,password,contact)values('$username','$email','$password','$contact')";

                        $connection->query($query);
                        header("Location:login.php");
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