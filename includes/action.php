<?php
// IF IS SET TO ADD TO CART, STORE IT IN $_SESSION['cart']
if (isset($_POST["add_to_cart"])) {
    $session_array = array(
        "PROD_ID" => $_GET["id"],
        "PROD_NAME" => $_POST["itemname"],
        "PROD_DESCRIPTION" => $_POST["description"],
        "PROD_PRICE" => $_POST["price"],
        "PROD_QUANTITY" => $_POST["quantity"],
    );
    $_SESSION['cart'][] = $session_array;
    header("location:index.php?page=product&success=added");
    exit();
}
// DELETE ITEM IN THE PURCHASE ITEM
if (isset($_GET["action"]) && $_GET["action"] == "remove") {
    
    ?>
    <script>
          const response = confirm("Are you sure you want to delete that?");
                    
          
                        if ($value["PROD_ID"] == $_GET["id"]) {
                        alert("Item was deleted");
                  
                    } else {
                        alert("Cancel was pressed");
                        
                    }
                    

            </script>
    <?php

    // foreach ($_SESSION['cart'] as $key => $value) {
    //     if ($value["PROD_ID"] == $_GET["id"]) {
    //         unset($_SESSION['cart'][$key]);
    //     }
    // }
     
    
    // header("location:index.php?page=order&remove=deleted");
    // exit();
}

if (isset($_GET["remove"])) {
    if ($_GET["remove"] == "deleted") {
        echo '<div class="box-message">
        <div class="alert-success">
            <p>Order Deleted</p><br>
        </div> 
    </div>';
        header("Refresh:1; url=index.php?page=order");
    }
}




// INSERT TO DATABASE
if (isset($_GET["action"]) && $_GET["action"] == "purchase") {
    $fgmember->connect();
    foreach ($_SESSION['cart'] as $key => $value) {
        $fgmember->insert("orders", array($fgmember->randomOrderID(), date("Y-m-d"),
         $_SESSION["CUS_ID"], $value["PROD_ID"], $value["PROD_QUANTITY"],($value["PROD_PRICE"] * $value["PROD_QUANTITY"])));
    }
    unset($_SESSION['cart']);
    header("location:index.php?page=order&success=purchaseSuccesfully");
    exit();
}

if (isset($_GET["success"])) {
    if ($_GET["success"] == "purchaseSuccesfully") {
        echo '<div class="box-message">
        <div class="alert-success">
            <p>Order Purchased<span> !</span></p><br>
        </div> 
    </div>';
        header("Refresh:1; url=index.php?page=order");
    }
    if ($_GET["success"] == "added") {
        echo '<div class="box-message">
        <div class="alert-success">
            <p>Item Added<span> !</span></p><br>
        </div> 
    </div>';
        header("Refresh:0.5; url=index.php?page=product");
    }
}
