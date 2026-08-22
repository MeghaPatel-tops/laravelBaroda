<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Marks</title>

    <link 
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" 
        rel="stylesheet"
    >
</head>

<body>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">

            <div class="card shadow">
                <div class="card-header bg-primary text-white">
                    <h4 class="text-center mb-0">Enter Student Marks</h4>
                </div>

                <div class="card-body">

                    <form method="post">

                      

                        <div class="mb-3">
                            <label class="form-label">Maths Marks</label>
                            <input 
                                type="number" 
                                class="form-control" 
                                placeholder="Enter Maths marks"
                                min="0"
                                max="100"
                                name="maths"
                            >
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Physics Marks</label>
                            <input 
                                type="number" 
                                class="form-control" 
                                placeholder="Enter Physics marks"
                                min="0"
                                max="100"
                                name="phy"
                            >
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Chemistry Marks</label>
                            <input 
                                type="number" 
                                class="form-control" 
                                placeholder="Enter Chemistry marks"
                                min="0"
                                max="100"
                                name="chem"
                            >
                        </div>

                        <div class="d-grid">
                            <input type="submit" name="submit" class="btn btn-primary" value="Submit Marks">
                                
                            
                        </div>

                        <?php
                              if(isset($_REQUEST['submit'])){
                                 $m = $_REQUEST['maths'];
                                 $p=$_REQUEST['phy'];
                                 $c=$_REQUEST['chem'];

                                 if($m > 65 && $p > 55 && $c>=50){
                                    $total=$m+$p+$c;
                                    $stotal=$m+$p;
                                    if($total >=190 || $stotal >=140){
                                     echo    "<h1>Eligible for Admision</h1>";
                                    }
                                    else{
                                        echo "<h1>Not eligible for Admision</h1>";
                                    }
                                 }
                                 else{
                                    echo "<h1>Not eligible for Admision</h1>";
                                 }
                              }
                        
                        ?>

                    </form>

                </div>
            </div>

        </div>
    </div>
</div>
<!-- //maths > 65 phy>55 chem>50

//total>= 190 or m+p>=140 -->
</body>
</html>