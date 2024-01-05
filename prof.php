<?php
$fgmember->connect();
$cus = $fgmember->getCustomer("CUS_ID", $_SESSION["CUS_ID"]);
$fgmember->disconnect();


if (isset($_POST["update_cus_info"])) {
    $name = strtoupper(trim($_POST["name"]));
    $mname = strtoupper(trim($_POST["mname"]));
    $lname = strtoupper(trim($_POST["lname"]));
    $address = strtoupper(trim($_POST["address"]));
    $contact = (trim($_POST["contact"]));

    $fgmember->connect();
    $fgmember->cusUpdate("CUS_NAME", $name, $_SESSION["CUS_ID"]);
    $fgmember->cusUpdate("CUS_MNAME", $mname, $_SESSION["CUS_ID"]);
    $fgmember->cusUpdate("CUS_LNAME", $lname, $_SESSION["CUS_ID"]);
    $fgmember->cusUpdate("CUS_ADDRESS", $address, $_SESSION["CUS_ID"]);
    $fgmember->cusUpdate("CUS_CONTACT", $contact, $_SESSION["CUS_ID"]);
    $fgmember->disconnect();
    
    
    echo '<div class="message-alert-box">
            <div class="alert-success">
                <p>Successfuly Updated</p>
            </div> 
        </div>';
    header("Refresh:2; url=index.php?page=prof");
} 
?>

    <div class="prof">
        <div class="customer-prof">
            <form action="index.php?page=prof" method="POST">
                <h1>PROFILE ID: <?php echo $_SESSION["CUS_ID"] ?> </h1>
                <label> First Name</label></br>
                <input type="text" name="name" value="<?php echo $cus["CUS_NAME"] ?>"><br>
                <label>Middle Name</label> </br>
                <input type="text" name="mname" value="<?php echo $cus["CUS_MNAME"] ?>"><br>
                <label>Last Name</label> </br>
                <input type="text" name="lname" value="<?php echo $cus["CUS_LNAME"]; ?>"><br>
                <label>Address</label></br>
                <input type="text" name="address" value="<?php echo $cus["CUS_ADDRESS"] ?>"><br>
                <label>Contact Number </label></br>
                <input type="numeric" name="contact" value="<?php echo $cus["CUS_CONTACT"] ?>"><br>
                <button name="update_cus_info">Update Information</button>
            </form>
        </div>  
    </div>


