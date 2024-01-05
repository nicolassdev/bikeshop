<?php
include "dbh-inc.php";

if(!isset($_POST["submit"])){
    header("location:../reg.php");
    exit();
}else{


    $userID = $fgmember->generateUserID();
    $username = trim($_POST["username"]);
    $password = $fgmember->Encrypt(trim($_POST["password"]));

    $cusID = $fgmember->generateCusID();
    $name = strtoupper(trim($_POST["name"]));
    $mname = strtoupper(trim($_POST["mname"]));
    $lname = strtoupper(trim($_POST["lname"]));
    $address = strtoupper(trim($_POST["address"]));
    $contact = trim($_POST["contact"]);


    $fgmember->connect();
    

    if ($fgmember->rowCount("users", "USERNAME", $username) > 0) {
        $fgmember->disconnect();
        header("location:../reg.php?error=usernameALREADYtaken");
        exit();
    } else {
        $fgmember->insert("users", array($userID, $username, $password));
        $fgmember->insert("customer", array($cusID, $name, $mname,
        $lname, $address,$contact, $userID));
        $fgmember->disconnect();
        header("location:../reg.php?success=registered");
        exit();
    }
}