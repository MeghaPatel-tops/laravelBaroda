<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Calculator</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-5">

            <div class="card shadow">
                <div class="card-body">

                    <h3 class="text-center mb-4">Simple Calculator</h3>
                    <form method="post">
                    <div class="mb-3">
                        <label class="form-label">Enter First Number</label>
                        <input type="text" id="num1" class="form-control" name="num1">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Enter Second Number</label>
                        <input type="text" id="num2" class="form-control" name="num2">
                    </div>

                   

                    <input type="submit" value="Submit" name="submit"  class="btn btn-primary w-100">
                    </form>
                    <h4 class="text-center mt-4">
                       <?php
                            if(isset($_REQUEST['submit'])){
                                
                                 $num1 = $_REQUEST['num1'];
                                 $num2 = $_REQUEST['num2'];
                                   echo "Addition=";
                                   echo $num1+$num2."<br>";
                                   echo "sub=".$num1-$num2."<br>";
                                    echo "mul=".$num1*$num2."<br>";
                                    echo "div=".$num1/$num2."<br>";
                                    echo "module=".$num1%$num2."<br>";
                                     echo "expo=".$num1 ** $num2."<br>";
                            }

                        ?>
                    </h4>

                </div>
            </div>

        </div>
    </div>
</div>



</body>
</html>