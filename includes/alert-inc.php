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
    

    //MISMATCH PASSOWRD IN REGISTER
    if(isset($_GET["error"]) && $_GET["error"] == "mismatch_password"){
        echo "<div class='alert-1'>
        Mismathc Password~!
        </div>";
        header("refresh:1 ; url=reg.php");
    } 





      //CHECKING THE SAME FIRSTNAME AND LASTNAME IN DATABASE
      if(isset($_GET["error"]) && $_GET["error"] == "firstnameandlastnameALREADYtaken"){
        echo "<div class='alert-1'>
        Firstname and Lastname already taken ~!
        </div>";
        header("refresh:1 ; url=reg.php");
    } 

  
      //CHECKING IF THE LETTER IF ALPHABETICAL
    if(isset($_GET["error"]) && $_GET["error"] == "regixletters"){
        echo "<div class='alert-1'>
         Name must only contain letters!
        
        </div>";
        header("refresh:1 ; url=reg.php");
    } 

    //CHECKING IF THE NUMBER ARE NUMERICAL
    if(isset($_GET["error"]) && $_GET["error"] == "invalidContact"){
        echo "<div class='alert-1'>
         Contact number must only contain numbers!
        </div>";
        header("refresh:1 ; url=reg.php");
    } 

