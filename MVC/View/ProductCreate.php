 
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
                   <form action="http://localhost/employeeProject/MVC/index.php/productstore" method="post">
                        <div class="mb-3">
                            <label class="form-label">Product Name</label>
                            <input type="text" class="form-control"
                                   placeholder="Enter product name" name="productname">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Category</label>
                            <select class="form-select" name="category">
                                <option value="">Select Category</option>
                                <option value="Electronics">Electronics</option>
                                <option value="Fashion">Fashion</option>
                                <option value="Footwear">Footwear</option>
                                <option value="Accessories">Accessories</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Price</label>
                            <input type="number" class="form-control"
                                   placeholder="Enter price" name="price">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Stock</label>
                            <input type="number" class="form-control"
                                   placeholder="Enter stock" name="stock">
                        </div>

                        <input type="submit"
                                class="btn btn-primary w-100"
                                data-bs-dismiss="modal"
                            value="Save Product">
                        
                    </form>
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
 
 