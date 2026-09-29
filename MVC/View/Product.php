 
<!DOCTYPE html>
<html lang="en">
<?php include('Template/Header.php')?>

<body>

    <!-- SIDEBAR -->
    <?php include('Template/Aside.php')?>


    <!-- MAIN CONTENT -->
    <div class="main-content">
      <?php include('Template/Header1.php')?>
        


        <!-- PAGE CONTENT -->
        <main class="content">

            <!-- Dashboard Title -->
            <div class="mb-4">
                <h2>Dashboard</h2>
                <p class="text-secondary">Welcome back, Admin!</p>
            </div>

            <div class="row">
                  <div class="card shadow-sm mb-4" id="products">

                <div class="card-header bg-white py-3">
                    <div class="d-flex flex-wrap justify-content-between align-items-center gap-2">
                        <h5 class="mb-0">
                            <i class="bi bi-box-seam me-2"></i>
                            Products
                        </h5>

                        <button class="btn btn-primary"
                                data-bs-toggle="modal"
                                data-bs-target="#addProduct">
                            <i class="bi bi-plus-lg"></i>
                            Add Product
                        </button>
                    </div>
                </div>

                <div class="card-body">

                    <!-- Search -->
                    <div class="row mb-3">
                        <div class="col-md-4 ms-auto">
                            <input type="text"
                                   class="form-control"
                                   placeholder="Search products...">
                        </div>
                    </div>

                    <div class="table-responsive">
                        <table class="table table-bordered table-hover align-middle">

                            <thead class="table-light">
                                <tr>
                                    <th>ID</th>
                                    <th>Product</th>
                                    <th>Category</th>
                                    <th>Price</th>
                                    <th>Stock</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>

                         
                            <tbody>
                              
   <?php
        $i=1;
        foreach($productArray as $key){
             ?>
              <tr>
                                    <td><?php echo $i;?></td>
                                    <td>
                                        
                                        <?php echo $key->productname?>
                                    </td>
                                    <td> <?php echo $key->productname?></td>
                                    <td> <?php echo $key->price?></td>
                                    <td> <?php echo $key->category?></td>
                                    <td>
                                        <span class="badge bg-success">
                                            <?php echo $key->stock?>
                                        </span>
                                    </td>
                                    <td>
                                        <button class="btn btn-sm btn-warning">
                                            <i class="bi bi-pencil"></i>
                                        </button>
                                       <form action="http://localhost/employeeProject/MVC/index.php/productdelete" method="post">
                                        <input type="hidden" name="pid" value="<?php echo $key->pid?>">
                                            <button class="btn btn-sm btn-danger">
                                            <i class="bi bi-trash" type="submit"></i>
                                        </button>
                                       </form>
                                    </td>
                                </tr>

    <?php
    $i++;
        }
   
   ?>

                            </tbody>
                        </table>
                    </div>

                </div>
            </div>

            </div>
          
        </div>
    </div>

            


          
        </main>


        <!-- FOOTER -->
       <?php include('Template/Footer.php')?>

    </div>


    <!-- ADD PRODUCT MODAL -->
   


    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        function toggleSidebar() {
            document.getElementById("sidebar").classList.toggle("show");
        }
    </script>

</body>
</html>
 
 