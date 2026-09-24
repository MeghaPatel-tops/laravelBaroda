<?php ob_start();?>
<?php
  include('db.php');
  $preProduct;
    if(isset($_REQUEST['pid'])){
        $pid=$_REQUEST['pid'];
        $query = "select * from products where pid=$pid";
        $req = $connection->query($query);
        $preProduct=$req->fetch_object();
        
    }
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
    <div class="container mt-5">

        <div class="row">

            <div class="col-md-8 mx-auto text-center">

                 <h1>Update Product</h1>
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
                                value="<?php echo $preProduct->pname?>"
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
                                 value="<?php echo $preProduct->price?>"
                                placeholder="Enter price">
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
                                
                                placeholder="Enter product description"><?php echo $preProduct->description;?></textarea>
                        </div>


                        <!-- Image -->
                        <div class="mb-3">
                            <label class="form-label">
                                Product Image
                            </label>
                            <img src="Images/<?php echo $preProduct->pimage?>" alt="" height="100px" width="100px">
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
                             
                              $desc=$_POST['desc'];
                             
                               $filename="";
                               
                                   if(isset($_FILES['img']['name']) && $_FILES['img']['name']!=""){
                                   $temp=$_FILES['img']['tmp_name'];
                                    $ext = explode('/',$_FILES['img']['type'])[1];
                                   $filename = time().".".$ext;

                                move_uploaded_file($temp,"Images/".$filename);   
                              
                               
                                    
                                   
                              

                             
                               }
                              else{
                                  $filename= $preProduct->pimage;
                              }
                                $query = "update products set pname='$pname',price='$price',description='$desc',pimage='$filename' where pid=$pid";
                                echo $query;
                                  $res = $connection->query($query);
                               
                                    
                                    header("Location: productindex.php");
                                exit;
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