<?php
session_start();
require('../app/app.php');

ensure_user_is_authenticated();

if(is_get()){
    $id = sanitize($_GET['id']);
    
    if(empty($id)){
        $view_bag = [
            'title' => "Not Found"
        ];
        view('not_found');
        die();
    }
    
    $term = $config['provider']->get_term($id);
    
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
    $term = sanitize($_POST['id']);

    if(empty($term)){
        //TODO: display message
    }else{
        $config['provider']->delete_term($term);
        redirect('index.php');
    }
}