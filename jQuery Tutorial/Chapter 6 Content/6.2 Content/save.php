<?php

$f = fopen('data.txt','w');
fwrite($f, $_POST['content']);
fclose($f);

echo 'The info has been saved';