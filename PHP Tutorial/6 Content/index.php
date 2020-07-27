<?php

require('./app/app.php');

// use App\Data;

$view_bag = [
    'title' => 'Glossary List',
    'heading' => 'Glossary', 
];

if(isset($_GET['search']) && $_GET['search'] != '' && sanitize($_GET['search'])){
    $search = $_GET['search'];
    
    $items = $config['provider']->search_terms($search);
    
    $view_bag['heading'] = "Search Results for '$search' ";
}else{
    // $items = Data\get_terms();
    $items = $config['provider']->get_terms();
}

view('index', $items);