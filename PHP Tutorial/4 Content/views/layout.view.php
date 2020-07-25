<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHP Fundamentals: 
            <?php 
                if(isset($view_bag['title'])){
                    echo $view_bag['title']; 
                }
            ?>
        </title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <link rel="stylesheet" href="../../css/style.css">
        <link rel="stylesheet" href="../css/style.css">
    </head>
    <body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a href="#" class="navbar-brand">
                PHP Fundamentals: 
                <?php 
                    if(isset($view_bag['title'])){
                        echo $view_bag['title']; 
                    }
                ?>
            </a>
        </div>
    </nav>

    <?php require("$name.view.php"); ?>

    </body>
</html>