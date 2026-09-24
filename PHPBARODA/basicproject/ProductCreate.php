<?php ob_start();?>
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
    <div class="container mt-5">

        <div class="row">

            <div class="col-md-8 mx-auto text-center">

                 <h1>Create New Product</h1>
                 <div class="container mt-5">

    <div class="row justify-content-center">

        <div class="col-md-7">

            <div class="card shadow">

                <div class="card-header bg-primary text-white">
                    <h3 class="mb-0">Create Product</h3>
                </div>

                <div class="card-body">

                    <form method="post" enctype="multipart/form-data">

                        <!-- Product Name -->
                        <div class="mb-3">
                            <label class="form-label">
                                Product Name
                            </label>

                            <input 
                                type="text" 
                                class="form-control"
                                name="pname"
                                placeholder="Enter product name">
                        </div>

                        


                        <!-- Price -->
                        <div class="mb-3">
                            <label class="form-label">
                                Price
                            </label>

                            <input 
                                type="number" 
                                class="form-control"
                                name="price"
                                placeholder="Enter price">
                        </div>


                        <!-- Category -->
                        <div class="mb-3">
                            <label class="form-label">
                                Category
                            </label>

                            <select class="form-select" name="category">

                                <option value="">
                                    -- Select Category --
                                </option>

                                <option value="electronics">
                                    Electronics
                                </option>

                                <option value="clothing">
                                    Clothing
                                </option>

                                <option value="shoes">
                                    Shoes
                                </option>

                                <option value="books">
                                    Books
                                </option>

                            </select>
                        </div>


                        <!-- Description -->
                        <div class="mb-3">
                            <label class="form-label">
                                Description
                            </label>

                            <textarea 
                                class="form-control"
                                name="desc"
                                rows="4"
                                placeholder="Enter product description"></textarea>
                        </div>


                        <!-- Image -->
                        <div class="mb-3">
                            <label class="form-label">
                                Product Image
                            </label>

                            <input 
                                type="file"
                                class="form-control"
                                name="img"
                                accept="image/*">
                        </div>


                        <!-- Buttons -->
                        <div class="d-flex gap-2">

                            <input 
                                type="submit" 
                                class="btn btn-primary"
                                 value="Add Product"
                                 name="submit"
                            >

                           

                        </div>

                    </form>

                    <?php
                       include('db.php');
                          if(isset($_POST['submit'])){
                              $pname = $_POST['pname'];
                              $price= $_POST['price'];
                              $category = $_POST['category'];
                              $desc=$_POST['desc'];
                             
                              
                              if(isset($_FILES['img']['name'])){
                                   $temp=$_FILES['img']['tmp_name'];
                                    $ext = explode('/',$_FILES['img']['type'])[1];
                                   $filename = time().".".$ext;

                                move_uploaded_file($temp,"Images/".$filename);   
                                 $query = "insert into products(pname,price,description,pimage)values('$pname','$price','$desc','$filename')";

                                $res = $connection->query($query);
                               
                                    
                                    header("Location: productindex.php");
                                exit;
                              

                              }

                          }
                    
                    ?>

                </div>

            </div>

        </div>

    </div>

</div>


            </div>

        </div>

    </div>


    <!-- Bootstrap JS -->
    <script 
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">
    </script>

</body>
</html>