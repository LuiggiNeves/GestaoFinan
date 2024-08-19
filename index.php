<?php

include_once 'global.php';
require 'vendor/autoload.php';
use Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable(__DIR__) ;
$dotenv->load();

include 'app/view/acess.php';

