<?php
class Fsite{

    private $hostname;          //localhost
    private $username;         //root
    private $password;       //  
    private $dbname;        //bikeshop_db
    private $con;

    function __construct($hostname, $username, $password, $dbname){
        $this->hostname = $hostname;
        $this->username = $username;
        $this->password = $password;
        $this->dbname = $dbname;
    }
        //DB CONNECTION FUNCTION
        function connect(){
            if(!$this->con){
                $this->con = mysqli_connect($this->hostname, $this->username, $this->password, $this->dbname);
                return false;
            }else{
                return true;
            }
        }

        //GENERATE RANDOM USER ID TO USERS
    function generateUserID(){
        $num = "1234567890";
        $rand = "";

        for($i = 0; $i < 5; $i++){
            if($i == 0){
                $rand.= "USER-";
            }else{
                $rand.= $num[rand(0,strlen($num))];
            }
        }
        return $rand;
    }

        //GENERATE RANDOM CUSTOMER ID 
    function generateCusID(){
        $num = "1234567890";
        $rand = "";

        for($i = 0; $i < 5; $i++){
            if($i == 0){
                $rand.= "CUS-";
            }else{
                $rand.= $num[rand(0,strlen($num)-1)];
            }
        }
        
        return $rand;
    }

        // RANDOM ORDER ID
    function randomOrderID(){
        $num = "1234567890";
        $rand = "";

        for ($i = 0; $i < 6; $i++) {
            if ($i == 0) {
                $rand = "ORDER-";
            }
            $rand = $rand . $num[rand(0, strlen($num) - 1)];
            }
        return $rand;
    }

        //ENCRPYT PASSWORD TO GENERATE ANY CHARACTER
    function Encrypt($password){
        $hash = sha1($password);
        return $hash;
    }

         // DATABASE DISCONNECTION FUNCTION
    function disconnect() 
        {
            if ($this->con) {
                if (mysqli_close($this->con)) {
                $this->con = false; 
                    return true;
            } else {
            return false;
                }
            }
        }

        //CHECK ORIG PASSWORD

    

        //INSERT INTO TABLE
    function insert($table, $values){
        for($i = 0; $i < count($values); $i++){
            $values[$i] = mysqli_real_escape_string($this->con, $values[$i]);
            if(is_string($values[$i])){
                $values[$i] = "'". $values[$i] . "'";
            }
        }
        $values = implode(" , ", $values);

        $query = "INSERT INTO `$table` VALUES($values)";
        $result = $this->con->query($query);

        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    
    // CHECK TABLE COUNT
    function rowCount($table, $row = null, $value = null)
    {
        if ($row != null &&  $value != null) {
            $query = "SELECT * FROM `$table` WHERE `$row` = '$value'";
        } else {
            $query = "SELECT * FROM `$table`";
        }

        $result = $this->con->query($query);

        if (mysqli_num_rows($result) > 0) {
            return mysqli_num_rows($result);
        } else {
            return false;
        }
    }


        // CHECK TABLE COUNT ROW CUSTOMER
    function rowCountCustomer($name,$lname)
    {
        if ($name && $lname  ) {
            $query = "SELECT * FROM `customer` WHERE `CUS_NAME` = '$name'";
            
            $query = "SELECT * FROM `customer` WHERE `CUS_LNAME` = '$lname'";
        } else {
            $query = "SELECT * FROM `customer`";
        }

        $result = $this->con->query($query);

        if (mysqli_num_rows($result) > 0) {
            return mysqli_num_rows($result);
        } else {
            return false;
        }
    }

    
   

      //CHECK USER LOGIN
    function check_login($username, $password){
        $username = mysqli_real_escape_string($this->con, $username);
        $password = mysqli_real_escape_string($this->con, $password);

        $query = "SELECT * FROM `users` WHERE `USERNAME` = '$username' AND `PASSWORD` = '$password'"; 
        $result = $this->con->query($query);

        if(mysqli_num_rows($result) > 0){
            return true;
        } else{
            return false;
        }
    
    }

    // UPDATE CUSTOMER BY ID
    function cusUpdate($row, $value, $where)
    {
        $value = mysqli_real_escape_string($this->con, $value);
        if (is_string($value)) {
            $value = "'" . $value . "'";
        }
        $sql = "UPDATE `customer` SET `$row` =  $value WHERE `CUS_ID` = '$where'";
        $result = $this->con->query($sql);

        if ($result) {
            return true;
        } else {
            return false;
        }
    }
        // GET 
    function getUsers($row, $value)
    {
        $sql = "SELECT * FROM `users` WHERE `$row` = '$value'";
        $stored = ($this->con->query($sql))->fetch_assoc();
        return $stored;
    }
    

       // GET CUSTOMER ID
    function getCustomer($row, $value)
    {
        $sql = "SELECT * FROM `customer` WHERE `$row` = '$value'";
        $stored = ($this->con->query($sql))->fetch_assoc();
        return $stored;
    }
  

        // GET CUSTOMER ORDER
    function getCustomerOrder($row, $value)
    {
        $sql = "SELECT ORDER_NUM, PROD_NAME, PROD_PRICE
        FROM orders INNER JOIN product
        ON orders.PROD_ID = product.PROD_ID
        WHERE `$row` = '$value'";
        $stored = ($this->con->query($sql))->fetch_all(MYSQLI_ASSOC);
        return $stored;
        }

        // SEARCH ITEM TABLE
    function searchItem($value)
    {
        $value = mysqli_real_escape_string($this->con, $value);

        $sql = "SELECT * FROM `product` WHERE `PROD_NAME` LIKE '$value%' ORDER BY `PROD_NAME`";
        $result = $this->con->query($sql);

        if (mysqli_num_rows($result) > 0) {
            return $result->fetch_all(MYSQLI_ASSOC);
        } else {
            return false;
        }
    }

        //GET ITEMS
    function getItems($row = null, $value = null)
        {
            if ($row != null &&  $value != null) {
                $sql = "SELECT * FROM `product` WHERE `$row` = '$value'";
                $stored = ($this->con->query($sql))->fetch_assoc();
                return $stored;
            } else {
                $sql = "SELECT * FROM `product`";
                $stored = ($this->con->query($sql))->fetch_all(MYSQLI_ASSOC);
    
                return $stored;
            }
        }
}





