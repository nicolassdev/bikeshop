<?php 

    //   ############################### SUCCESS ########################################          
    if (isset($_GET["success"]) && $_GET["success"] == "registered"){
                    echo "<div class='alert-1'>
                    You are <Br>Succesfully <br>Sign up
                    </div>";
                    header("refresh:1 ; url=login.php");
                }
    
    //   ############################### ERROR ########################################          
    //WRONG PASSWORD OR USERNAME
    if (isset($_GET["error"]) && $_GET["error"] == "Xusername||password"){
                    echo "<div class='alert-1'>
                    Incorrect username and password
                    </div>";
                    header("refresh:1 ; url=login.php");
                
                }
    // USERNAME ALREADY TAKEN BY OTHER USER
    if(isset($_GET["error"]) && $_GET["error"] == "usernameALREADYtaken"){
                    echo "<div class='alert-1'>
                    Username already taken
                    </div>";
                    header("refresh:1 ; url=reg.php");
                }
    // CAN'T ASSESS IN
    if(isset($_GET["error"]) && $_GET["error"] == "accessdismissed"){
                    echo "<div class='alert-1'>
                    Can't connect Access Dismissed!
                    </div>";
                    header("refresh:2 ; url=login.php");
                }
    
        