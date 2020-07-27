<?php
session_start();
require('../app/app.php');

ensure_user_is_authenticated();

if(is_get()){
    $key = sanitize($_GET['key']);

    
    if(empty($key)){
        $view_bag = [
            'title' => "Not Found"
        ];
        view('not_found');
        die();
    }
    
    $term = $config['provider']->get_term($key);
    
    if($term === false){
        $view_bag = [
            'title' => "Not Found"
        ];
        view('not_found');
        die();
    }

    view('admin/edit', $term);
}

if(is_post()){
    $term = sanitize($_POST['term']);
    $definition = sanitize($_POST['definition']);
    $original_term = sanitize($_POST['original-term']);

    if(empty($term) || empty($definition) || empty($original_term)){
        //TODO: display message
    }else{
        $config['provider']->update_term($original_term,$term,$definition);
        redirect('index.php');
    }
}