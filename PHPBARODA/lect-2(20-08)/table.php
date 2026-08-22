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
                    <h4 class="text-center mb-0">Create Table</h4>
                </div>

                <div class="card-body">
   <form method="post">
                    <div class="mb-3">
                        <label class="form-label">First Number</label>
                        <input type="number" class="form-control" id="num1" name="num1"
                               placeholder="Enter first number">
                    </div>

                    

                    <div class="d-flex gap-2">
                         <input type="submit" value="submit" name="submit">
                        
                    </div>
                </form>

                <?php
                    if(isset($_REQUEST['submit'])){
                       
                        $num1=$_REQUEST['num1'];
                        
                        for($i=1;$i<=10;$i++){
                            echo $num1 ."*".$i."=".$num1*$i."<br>";
                        }

                        $flag=0;
                        $half = (int)($num1/2);
                        echo "<br>".$half;
                        for($i=2;$i<=$half;$i++){
                            if($num1%$i==0){
                                $flag=1;
                            }
                        }
                        echo $flag==0?"<h1>Num is Prime</h1>":"<h1>Num is not Prime</h1>";

                        
                    }
                ?>
                   
                </div>
            </div>

        </div>
    </div>
</div>

</body>
</html>