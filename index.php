<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
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
    <form action="index.php" method='post'>
        <label for="pname">Product Name:</label>
        <input type="text" id='pname' name='pname'>
        <label for="product-name">Price:</label>
        <input type="text" id='price' name='price'>
        <label for="product-name">Quantity:</label>
        <input type="number" id='quantity' name='quantity'>
        <button>Submit</button>
    </form>
</body>
</html>