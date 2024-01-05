<?php 
    session_start();
    
if (!isset($_SESSION["USERNAME"])){
    header("location:login.php?error=accessdismissed");
    exit();
}


include "includes/header.php";
require_once "includes/dbh-inc.php";
require_once "includes/action.php";
?> 
    <div class="home-box">
    <?php
    $page = $_GET["page"];  //page = "home"
    switch($page){
    case "home" : require_once "home.php";break;
    case "about" : require_once 'about.php';break;
    case "product" : require_once 'product.php';break;
    case "prof" : require_once 'prof.php';break;
    case "order" : require_once 'order.php';break;
    default: include "home.php";
    }

    ?>
    </div>

    <!--       // if ($_GET["page"] && $_GET["page"] == "home") {
        //     include "home.php";
        // }
        // if ($_GET["page"] && $_GET["page"] == "about") {
        //     include "about.php";
        // }

        // if ($_GET["page"] && $_GET["page"] == "product") {
        //     include "product.php";
        // }
        // if ($_GET["page"] && $_GET["page"] == "prof") {
        //     include "prof.php";
        // } -->

