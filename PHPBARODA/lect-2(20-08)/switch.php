<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Calculator</title>

    <link 
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" 
        rel="stylesheet"
    >
</head>

<body>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-5">

            <div class="card shadow">
                <div class="card-header bg-primary text-white">
                    <h4 class="text-center mb-0">Simple Calculator</h4>
                </div>

                <div class="card-body">
   <form method="post">
                    <div class="mb-3">
                        <label class="form-label">First Number</label>
                        <input type="number" class="form-control" id="num1" name="num1"
                               placeholder="Enter first number">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Second Number</label>
                        <input type="number" class="form-control" id="num2" name="num2"
                               placeholder="Enter second number">
                    </div>

                    <div class="d-flex gap-2">
                         <input type="submit" value="+" name="submit">
                         <input type="submit" value="-" name="submit">
                         <input type="submit" value="/" name="submit">
                         <input type="submit" value="*" name="submit">
                    </div>
                </form>

                <?php
                    if(isset($_REQUEST['submit'])){
                        $ch= $_REQUEST['submit'];
                        $num1=$_REQUEST['num1'];
                        $num2=$_REQUEST['num2'];

                        switch($ch){
                            case '+':
                                echo "<h1>Addition=".$num1+$num2."</h1>";
                            break;  
                             case '-':
                                echo "<h1>Sub=".$num1-$num2."</h1>";
                            break;  
                             case '/':
                                echo "<h1>Division=".$num1/$num2."</h1>";
                            break;  
                             case '*':
                                echo "<h1>Multiplication=".$num1+$num2."</h1>";
                            break;    
                            default:
                                echo "<h1>Invalid choice</h1>";
                            break;    
                        }
                    }
                ?>
                   
                </div>
            </div>

        </div>
    </div>
</div>

</body>
</html>