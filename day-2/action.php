<?php
require 'vendor/autoload.php';
use App\classes\Home;

if(isset($_GET['page'])) {
    if($_GET['page'] == 'home') {
        $home = new Home();
        $students = $home->getAllStudent();
        include 'pages/home.php';
    }
}