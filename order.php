<?php
    
    if (!isset($_SESSION["USERNAME"])){
        header("location:login.php?error=accessdismissed");
        exit();
    }
?>
<div class="order">
        <h1> ORDER DETAILS</h1>
    <div class="table">
            <table>
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <?php
                if (!empty($_SESSION["cart"])) {
                    $result = $_SESSION['cart'];
                    $row = 1;
                    $total = 0;
                    foreach ($result as $key => $value) {
                        echo '<tr>';
                        echo '<td>' . $row . '</td>';
                        echo '<td>' . $value["PROD_NAME"] . '</td>';
                        echo '<td>' . $value["PROD_DESCRIPTION"] . '</td>';
                        echo '<td>' . $value["PROD_PRICE"] . '</td>';
                        echo '<td>' . $value["PROD_QUANTITY"] . '</td>';
                        echo '<td>  
                                    <a href="index.php?page=order&action=remove&id=' . $value["PROD_ID"] . '">Delete</a>
                                </td>';
                        echo '</tr>';
                        $row++;
                        // Computation QUANTITY AND PRICE
                        $total = $total + $value["PROD_QUANTITY"] * $value["PROD_PRICE"];
                        
                    }
                    echo '<tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>Total Price: ₱' . $total . '</td>
                            <td></td>
                            <td></td> 
                        </tr>';
                    echo '</table>';
                    echo '<a href="index.php?page=product&action=purchase">Confirm Purchase </a>';
                } else {
                    echo '<tr>';
                    echo '<td></td>';
                    echo '<td></td>';
                    echo '<td>NO ORDER</td>';
                    echo '<td></td>';
                    echo '<td></td>';
                    echo '<td></td>';
                    echo '</tr>';
                    echo '</table';
                }
                ?>
        </div>

</div>