<?php
include "dbh-inc.php";

if(!isset($_POST["submit"])){
    header("location:../reg.php");
    exit();
}else{


    $userID = $fgmember->generateUserID();
    $username = trim($_POST["username"]);
    $password = $fgmember->Encrypt(trim($_POST["password"]));
    $cpassword = $fgmember->Encrypt(trim($_POST["cpassword"]));

    $cusID = $fgmember->generateCusID();
    $name = strtoupper(trim($_POST["name"]));
    $mname = strtoupper(trim($_POST["mname"]));
    $lname = strtoupper(trim($_POST["lname"]));
    $address = strtoupper(trim($_POST["address"]));
    $contact = trim($_POST["contact"]);


    $fgmember->connect();
    
    // if($fgmember->rowCountCustomer("customer", "CUS_NAME && CUS_LNAME", $name && $lname) > 0){
    //     $fgmember->disconnect();
    //     header("location:../reg.php?error=firstnameandlastnameALREADYtaken");
    //     exit();
    // }
       

        //CHECK USERNAME IF THEY ARE THE SAME IN DB
    if ($fgmember->rowCount("users", "USERNAME", $username) > 0) {
            $fgmember->disconnect();
            header("location:../reg.php?error=usernameALREADYtaken");
            exit();
        //CHECK IF NAME AND LAST ARE ALPABHETICAL
    }elseif (!preg_match ("/^[a-zA-Z\s]+$/",$name)){   
            
            $fgmember->disconnect();
            header("location:../reg.php?error=regixletters");
            exit();
        //CHECK IF THE NUMBER ARE NUMERICAL
    }elseif(!preg_match ('/^[0-9]+$/',$contact)){
            $fgmember->disconnect();
            header("location:../reg.php?error=invalidContact");
            exit();
        //CHECK IF PASSWORD ARE THE SAME
    }elseif ($password != $cpassword){
            $fgmember->disconnect();
            header("location:../reg.php?error=mismatch_password");
            exit();
        
    }
    else {
        $fgmember->insert("users", array($userID, $username, $password));
        $fgmember->insert("customer", array($cusID, $name, $mname,
        $lname, $address,$contact, $userID));
        $fgmember->disconnect();
        header("location:../reg.php?success=registered");
        exit();
    }

  

}