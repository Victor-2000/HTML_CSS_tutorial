<?php

// traditional array
// $guitars = ['Vela','Explorer','Strat'];

// print_r($guitars);

// if(isset($guitars[3])){
//     echo $guitars[3];
// }else{
//     echo 'Guitar does not exist';
// }


$guitars2 = [
    'prs' => 'Vela',
    'gibson' => 'Explorer',
    'fender' => 'Strat',
    'Prs' => 'Single Cut',
];

if(isset($guitars2['Prs'])){
    echo $guitars2['Prs'];
}else{
    echo 'Guitar does not exist';
}

