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


?>
    <form action="Add_product.php" method='post'>
        <label for="pname">Product Name:</label>
        <input type="text" id='pname' name='pname' value='<?php echo $_GET['name']?>'>
        <br>
        <label for="product-name">Price:</label>
        <input type="number" id='price' name='price' value='<?php echo $_GET['price']?>'>
        <br>
        <label for="product-name">Quantity:</label>
        <input type="number" id='quantity' name='quantity' value='<?php echo $_GET['quantity']?>'>
        <br>
        <button>Submit</button>
    </form>
</body>
</html>