<?php
$str = "welcome to php tutorial";

$wCount=1;
for($i=0;$i<strlen($str)-1;$i++){
  
    if($str[$i]==" "){
        $wCount++;
    }
}

echo $wCount;


?>