<?php

require 'functions.php';
connect();

//Was it an ajax request? if yes then (do the code for js)
if(isset($_POST['q'])){
    echo json_encode(get_actors_by_last_name($_POST['q'])); return;
}

//Do the code for php if it is not ajax
if(isset($_POST['q'])){
    $actors = get_actors_by_last_name($_POST['q']);
}

if(isset($_POST['actor_id'])){
    $info = get_actor_info($_POST['actor_id']);
    echo json_encode($info);
    return;
}

include 'views/index.tmpl.php';