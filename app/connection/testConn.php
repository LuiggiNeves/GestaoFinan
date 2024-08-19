<?php

namespace App\connection;
require '../../vendor/autoload.php';


function status(){
    $status = new DataBase;
    echo $status->status();

}

status();