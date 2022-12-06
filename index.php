<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="stylesheet.css">
</head>
<body>
    <h2>Home</h2>
    <nav>
        <ul>
            <li>
                <a href="Add_product.php">Add Product Page</a>
            </li>
        </ul>
    </nav>
        <h2>
            Welcome to EStore!
            <br>
            These are the products in store now.
            <br>
        </h2>
        <table>
        <tr>
            <th>Product</th>
            <th>Price</th>
            <th>Quantity</th>
</tr>
            <?php

            require_once("dbinfo.php");
            
            $mysqli = new mysqli($hostname,$dbUser,$dbPassword,$db); 
            
            // Check connection
            if ($mysqli -> connect_errno) {
                echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
                exit();
            };
            if(isset($_GET['id'])){
                $sql = "DELETE FROM product_info WHERE id='$_GET[id]'";
                $result = $mysqli->query($sql);
                header('Location: displayProducts.php');
            }
            $sql = "SELECT * FROM product_info";
            $result = $mysqli->query($sql);
            if($result){
                while($record = $result->fetch_row()) {
                    $id = $record[0];
                    $name = $record[1];
                    $price = $record[2];
                    $quantity= $record[3];
                    echo"
                    <tr>
                    <td>$name</td>
                    <td>$$price</td>
                    <td>$quantity</td>
                    </tr>

                ";
                }
            }
            
            ?>
    </table>
</body>
</html>