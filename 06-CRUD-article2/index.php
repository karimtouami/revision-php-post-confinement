<?php
// front controller

// dependencies
require_once "config.php";
require_once "model/connectDB.php";

// DB connection
$db = connectDB();

// connect error
if(!$db){
    // view  connect error
    include "view/errorConnectView.php";
    // stop working
    die();
}

// var_dump($db);

// loading du contrôleur public
require_once "controller/publicController.php";
