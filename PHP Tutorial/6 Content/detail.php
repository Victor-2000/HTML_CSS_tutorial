<?php

require('./app/app.php');

if(!isset($_GET['term'])){
    redirect('index.php');
}

$term_data = filter_var($_GET['term'], FILTER_SANITIZE_NUMBER_INT);

$data = $config['provider']->get_term($term_data); // TODO: validate input


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