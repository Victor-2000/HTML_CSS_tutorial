<?php
    $title = 'scope';

    $guitars =[
        ['name' => 'Vela', 'manufacturer' => 'PRS'],
        ['name' => 'Explorer', 'manufacturer' => 'Gibson'],
        ['name' => 'Strat', 'manufacturer' => 'Fender'],
    ];

    // $guitar_name = array_column($guitars, 'name');
    
    function pluck($arr, $key){
        $results = array_map(
        function ($item) use ($key){
            return $item[$key];
        },$arr);
        return $results;
    }
    
    
    $guitar_names = pluck($guitars, 'name');


    // $greeting = 'hello, world!'; //global

    // function sum($a,$b){
    //     global $greeting;
    //     echo $greeting;
    //     return $a + $b;
    // }

    // $result = sum(1,2);

    function output($value){
        echo '<pre>';
        print_r($value);
        echo '</pre>';
    }

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Fundamentals: <?= $title?></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
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
    <?php 
        output($guitar_names);
    ?>
    </div>
</div>

</body>
</html>
