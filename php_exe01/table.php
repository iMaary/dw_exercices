<?php
    $number = $_GET['number'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table of <?= $number ?></title>
</head>
<body>
    <h1>Table of <?= $number ?></h1>

    <?php 
        for($i = 2; $i <= 10; $i++){
            $product = $number * $i;
            print "$number x $i = $product <br>";
        }
    ?>
</body>
</html>