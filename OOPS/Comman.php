<?php
include('ArrayMethod.php');
include('StringMethod.php');
class Comman  {
    use ArrayMethod;
    use StringMethod;
    public function test(){
        echo "<h1>".$this->stringUpperConvert('john')."</h1>";
        $sumOfArray = $this->findSumofArray([12,34,56]);
        echo "<h2>sum of all array element =$sumOfArray</h2>";
    }
}

$c1 = new Comman();
$c1->test();


?>