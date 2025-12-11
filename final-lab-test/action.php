<?php
require_once 'vendor/autoload.php';
use App\classes\MQuery;

if(isset($_GET['page'])) {
    if ($_GET['page'] == 'home'){
        include 'pages/home.php';
    }
}