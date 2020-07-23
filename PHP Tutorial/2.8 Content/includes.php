<?php
    $title = 'includes';

    include('../inc/header.php');

    $guitars =[
        ['name' => 'Vela', 'manufacturer' => 'PRS'],
        ['name' => 'Explorer', 'manufacturer' => 'Gibson'],
        ['name' => 'Strat', 'manufacturer' => 'Fender'],
    ];

    require_once('../inc/functions.php');
    
    $guitar_names = pluck($guitars, 'name');
?>

<div class="container">
    <div class="row">
    <?php 
        output($guitar_names);
    ?>
    </div>
</div>

<?php include('../inc/footer.php');?>
