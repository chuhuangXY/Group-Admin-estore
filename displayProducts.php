<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <thead>
            <th>Product</th>
            <th>Price</th>
            <th>Quantity</th>
        </thead>
        <tbody>
            <?php

            require_once("dbinfo.php");
            
            $mysqli = new mysqli($hostname,$dbUser,$dbPassword,$db); 
            
            // Check connection
            if ($mysqli -> connect_errno) {
                echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
                exit();
            };

            $sql = "SELECT * FROM product_info";
            $result = $mysqli->query($sql);
            if($result){
                while($record = $result->fetch_row()) {
                    $name = $record[0];
                    $price= $record[1];
                    $quantity = $record[2];
                    echo"
                    <td>$name</td>
                    <td>$price</td>
                    <td>$quantity</td>

                ";
                }
            }
            
            ?>
        </tbody>
    </table>
</body>
</html>