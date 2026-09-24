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

                <h1 class="display-4">
                    Welcome to My Website
                </h1>

                <p class="lead">
                    This is the Home section of our Bootstrap website.
                </p>

                <button class="btn btn-primary">
                    Get Started
                </button>

            </div>

        </div>

    </div>


    <!-- Bootstrap JS -->
    <script 
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">
    </script>

</body>
</html>