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
    <h2>Add Product</h2>
    <form action="Add_process.php" method='post'>
        <label for="pname">Product Name:</label>
        <input type="text" id='pname' name='pname'>
        <br>
        <label for="product-name">Price:</label>
        <input type="number" id='price' name='price'>
        <br>
        <label for="product-name">Quantity:</label>
        <input type="number" id='quantity' name='quantity'>
        <br>
        <button>Submit</button>
    </form>
</body>
</html>