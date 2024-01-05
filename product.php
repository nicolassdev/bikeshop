<?php
    
    if (!isset($_SESSION["USERNAME"])){
        header("location:login.php?error=accessdismissed");
        exit();
    }
?>
<div class="prod">
    <div class="prod-detail">
        <h1>PRODUCT AVAILABLE</h1>
        <form action="" method="POST">
            <input type="text" name="name" placeholder="Product name" required>
            <button name="search">Search</button>
            <a href="index.php?page=product">Back</a>
        </form>
    </div>
        <div class="items">
            <?php
            $fgmember->connect();
            if (!isset($_POST["search"])) {
                $result = $fgmember->getItems();
            } else {
                $name = $_POST["name"];
                $result = $fgmember->searchItem($name);
            }
            if (!empty($result)) {
                
                foreach ($result as $row) {
                

                echo '<div class="item">
                            <form action="index.php?page=product&id=' . $row["PROD_ID"] . '" method="POST">
                                <img src="img/' . $row ["PROD_IMG"] . '">
                                <p>Name: '. $row ["PROD_NAME"].'</p>
                                <p>Description: '. $row["PROD_DESCRIPTION"] . '</p>
                                <p>Price: '. $row["PROD_PRICE"] . '</p>
                                <p>Quantity:  <input type="number"  min="1" max="10"  name="quantity" value=1></p>
                                <input type="hidden" name="itemname" value="' . $row["PROD_NAME"] . '">
                                <input type="hidden" name="price" value="' . $row["PROD_PRICE"] . '">
                                <input type="hidden" name="description" value="' . $row["PROD_DESCRIPTION"] . '">
                                <button name="add_to_cart">Add to Cart</button>
                            </form>
                        </div>';
            
                    
                }
            }else{
                echo'<h4>NO ITEM FOUND</h4>';
            }
            $fgmember->disconnect();
            ?>

        </div>

</div>
