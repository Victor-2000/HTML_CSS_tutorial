<?php

require('./app/app.php');

if(!isset($_GET['term'])){
    redirect('index.php');
}

$data = get_term($_GET['term']); // TODO: validate input

if($data == false){
  $view_bag = [
    'title' => "Not Found"
  ];
  view('not_found');
  die();
}

$view_bag = [
    'title' => 'Detail for ' . $data->term
];

view('detail', $data);