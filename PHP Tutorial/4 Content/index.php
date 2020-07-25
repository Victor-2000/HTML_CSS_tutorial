<?php

require('./app/app.php');

$view_bag = [
    'title' => 'Glossary List',
    'heading' => 'Glossary', 
];

if(isset($_GET['search'])){
    $search = $_GET['search']; //TODO: validate
    
    $items = search_terms($search);
    
    $view_bag['heading'] = "Search Results for '$search' ";
}else{
    $items = get_terms();
}

view('index', $items);