<?php

$json = file_get_contents('data3.json'); 

$data= json_decode($json);

 echo $data->data->onwardflights[0]->origin;










?>


