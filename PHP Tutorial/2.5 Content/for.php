
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<link rel="stylesheet" href="./css/style.css">

<?php
    $title = 'for Loop';

    $favoriteGuitars = [
        'Vela',
        'Explorer',
        'Strat',
    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Fundamentals: <?= $title?></title>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <a href="#" class="navbar-brand">
            PHP Fundamentals: <?= $title?>
        </a>
    </div>
</nav>

<div class="container">
    <div class="row">
        <div class="col-lg-12 text-center">
        <h1 class="mt-5">My Favourite Guitars</h1>
        </div>
    </div>
    <div class="row">
    <table class = 'table table-striped'>
        <?php

            for($i = 0; $i < count($favoriteGuitars); $i++){
                $guitar = $favoriteGuitars[$i];
                echo "<tr><td>$guitar</td></tr>";
            }

            // foreach($favoriteGuitars as $guitar){
            //     echo "<tr><td>$guitar</td></tr>";
            // }

        ?>
    </table>
    </div>
</div>

</body>
</html>
