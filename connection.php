<?php
    $mysqli = new mysqli("localhost","root","123","fooddelivery");

    if($mysqli->connect_errno)
    {
        echo "Failed to connect to MYSQL: ".$mysqli->connect_error;
        exit();
    }
    
    /**
     * Executes a query to find multiple results from the database. 
     * @param string $sqlStatement The SQL query to execute
     * @return array All results from the database or false if there are errors in SQL query.
     */
    function findAll($sqlStatement) {
        global $mysqli;
        if ($result = $mysqli->query($sqlStatement)){
            return $result->fetch_all(MYSQLI_ASSOC);
        } else {
            echo "<font color='red'><b>Error:</b> " . $sqlStatement . "<br>" . $mysqli->error."</font>";
            return false;
        }
    }

    /**
     * Executes a query to find a single result from the database.
     * @param string $sqlStatement The SQL query to execute
     * @return mysqli_result A single record from the database or false if there are errors in SQL query.
     */
    function findOne($sqlStatement) {
        global $mysqli;

        if ($result = $mysqli->query($sqlStatement)){
            return $result->fetch_assoc();
        } else {
            echo "<font color='red'><b>Error:</b> " . $sqlStatement . "<br>" . $mysqli->error."</font>";
            return false;
        }
    }

    /**
     * Execute a INSERT/UPDATE/DELETE SQL query
     * @param string $sqlStatement The SQL query to execute
     * @return int 0 or the last updated ID for Auto_Increment field
     */
    function executeQuery($sqlStatement) {
        global $mysqli;
        if (!$mysqli->query($sqlStatement)){
            echo "<font color='red'><b>Error:</b> " . $sqlStatement . "<br>" . $mysqli->error."</font>";
        }
        /*
         An integer that represents the value of the AUTO_INCREMENT field updated by the last query.
         Returns zero if there were no update or no AUTO_INCREMENT field
         Reference: https://www.w3schools.com/php/func_mysqli_insert_id.asp 
        */
        return $mysqli->insert_id;
    }
