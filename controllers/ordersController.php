<?php
    require_once __DIR__."/../connection.php";
    require_once __DIR__."/../config.php";
    require_once "customerController.php";

    // Code Snippet 4-5

    // End of 4-5

    // Code Snippet 4-7

    // End of 4-7

    // Code Snippet 4-6

    // End of 4-6

    // Code Snippet 2-4
    function getOrderSummary($item_id) {
        $sqlStatement = "SELECT sum(quantity) as totalQuantity, sum(amount) as totalAmount from order_details where item_id=$item_id";
        return findOne($sqlStatement);
    }
    // End of 2-4

    // Code Snippet 2-6
    //Retrieve all the order details and join with the items table.
    function getOrderDetailsById($order_id) {
        $sqlStatement = "SELECT od.*, i.name from order_details od INNER JOIN items i on od.item_id=i.id where od.order_id=$order_id";
        return findAll($sqlStatement);
    }


    //Retrieve all the orders which have been checked_out. Recall that this field is to indicate if the customer has checked out the orders.
    function getAllOrders() {
        $sqlStatement = "SELECT * FROM orders where checked_out=1 order by order_date DESC";
        return findAll($sqlStatement);
    }

    // End of 2-6

?>