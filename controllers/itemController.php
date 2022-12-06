<?php
    require_once __DIR__."/../connection.php";
    


    // Code Snippet 2-3
    function getAllItemsFromRestaurant($id) {
        $sqlStatement = "SELECT * from items where restaurant_id=$id";
        return findAll($sqlStatement);
    }
    // End of 2-3

    // Code Snippet 5-3

    // End of 5-3
?>