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

    view('admin/delete', $term);
}

if(is_post()){
    $term = sanitize($_POST['term']);

    if(empty($term)){
        //TODO: display message
    }else{
        $config['provider']->delete_term($term);
        redirect('index.php');
    }
}