<?php

require_once("dbinfo.php");

$mysqli = new mysqli($hostname,$dbUser,$dbPassword,$db); 

// Check connection
if ($mysqli -> connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
    exit();
};

if(isset($_POST['pname'])){
    $sql = "INSERT INTO product_info(name,price,quantity) VALUES ('$_POST[pname]','$_POST[price]','$_POST[quantity]')";
    $result = $mysqli->query($sql);
    if($result){
        $last_id = $mysqli->insert_id;
}
header('Location: displayProducts.php');

}

?>