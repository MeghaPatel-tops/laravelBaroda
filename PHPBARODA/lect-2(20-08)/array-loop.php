<?php
   $fruits=['apple','banana','kiwi'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        <?php
            foreach($fruits as $key){
                ?>
                    <li><?php echo $key?></li>
                <?php
            }
        ?>
    </ul>
</body>
</html>