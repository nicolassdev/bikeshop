<?php 

if (!isset($_POST["submit"])) {
    header("location:../login.php?error=accessdismissed");
    exit();
} else {
    require_once "dbh-inc.php";
    $fgmember->connect();

    $username = trim($_POST["username"]);
    $passwordHash = $fgmember->Encrypt(trim($_POST["password"]));

    if ($fgmember->check_login($username, $passwordHash)) {
        session_start();

        $user = $fgmember->getUsers("USERNAME", $username);
        $customer = $fgmember->getCustomer("USER_ID", $user["USER_ID"]);

        $_SESSION["USER_ID"] = $customer["USER_ID"];
        $_SESSION["CUS_ID"] = $customer["CUS_ID"];
        $_SESSION["USERNAME"] = $username;
        
        header("location:../index.php?page=home");
        exit();
    } else {
        header("location:../login.php?error=Xusername||password");
        exit();
    }
}










