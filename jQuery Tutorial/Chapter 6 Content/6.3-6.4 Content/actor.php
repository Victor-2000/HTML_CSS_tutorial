<?php

require 'functions.php';
connect();

$info = get_actor_info($_GET['actor_id']);
if($info){
    $info = $info[0];
}

include 'views/actor.tmpl.php';
?>