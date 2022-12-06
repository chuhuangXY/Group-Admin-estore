<?php
    require_once __DIR__."/../connection.php";

    // Code Snippet 3-1

    // End of 3-1

    // Code Snippet 3-2

    // End of 3-2

    // Code Snippet 3-3

    // End of 3-3


    // Code Snippet 2-2
    function getAllRestaurants() {
        $sqlStatement = "SELECT r.*, c.name as cuisine from restaurants r INNER JOIN cuisines c on c.id=r.cuisine_id";
        return findAll($sqlStatement);
    }
    // End of 2-2

    // Code Snippet 4-11

    // End of 4-11

    // Code Snippet 3-8

    // End of 3-8

    // Code Snippet 3-4

    // End of 3-4
?>