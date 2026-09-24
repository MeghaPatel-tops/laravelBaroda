<?php
    include('db.php');
    $query = "select * from products";
    $req= $connection->query($query);
    $productArray=[];
    while($row=$req->fetch_object()){
          $productArray[]=$row;
    }
   

    if(isset($_REQUEST['pid'])){
        $pid=$_REQUEST['pid'];
        $q= "delete from products where pid=$pid";
        $connection->query($q);
        header("Location: productindex.php");
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

                  <a href="ProductCreate.php">Create New</a>

            </div>
<div class="container mt-5">
    <h3 class="mb-4">Product List</h3>

    <div class="table-responsive">
        <table class="table table-bordered table-hover align-middle shadow-sm">
            <thead class="table-dark">
                <tr>
                    <th>#</th>
                    <th>Product Image</th>
                    <th>Product Name</th>
                    <th>Price</th>
                    <th>Description</th>
                    <th>Action</th>
                </tr>
            </thead>

            <tbody>
                <?php
                $i=0;
                   foreach($productArray as $key){
                    $i++;
                      ?>
                              <tr>
                    <td><?php echo $i?></td>

                    <td>
                        <img 
                            src="Images/<?php echo $key->pimage?>"
                            alt="Dress Punjabi"
                            width="80"
                            height="80"
                            class="rounded border"
                            style="object-fit: cover;"
                        >
                    </td>

                    <td>
                        <strong><?php echo $key->pname?></strong>
                    </td>

                    <td>
                       <?php echo $key->price?>
                    </td>

                    <td>
                       <?php echo $key->description?>
                    </td>

                    <td>
                        <a class="btn btn-sm btn-primary me-2" href="ProductEdit.php?pid=<?php echo $key->pid?>">
                            Edit
</a>

                        <a href="Productindex.php?pid=<?php echo $key->pid?>" class="btn btn-sm btn-danger">
                            Delete
                        </a>
                    </td>
                </tr>
                      <?php
                   }
                
                ?>
              
            </tbody>
        </table>
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