 <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">

            <!-- Logo -->
            <a class="navbar-brand" href="#">MyWebsite</a>

            <!-- Mobile Toggle Button -->
            <button 
                class="navbar-toggler" 
                type="button" 
                data-bs-toggle="collapse" 
                data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Navbar Links -->
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">

                    <li class="nav-item">
                        <a class="nav-link active" href="Productindex.php">Product</a>
                    </li>

                   

                   

                    <?php
                         session_start();
                         if(isset($_SESSION['user'])){
                             $user = $_SESSION['user'];
                             ?>
                              <li class="nav-item">
                                <span class="text-white">Welcome:<?php echo $user->username?></span><a class="nav-link" href="logout.php">Logout</a>
                                </li>
                                <li class="nav-item">
                                <a class="nav-link" href="Profile.php">Profile</a>
                                </li>
                             <?php
                         }
                         else{
                            ?>
                            <li class="nav-item">
                                 <a class="nav-link" href="login.php">Login</a>
                            </li>     
                            <?php
                         }
                    
                    ?>
                       
                    </li>

                </ul>
            </div>

        </div>
    </nav>