
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