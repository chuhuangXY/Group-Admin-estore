<?php
    // __DIR__ refers to the current directory this file is in. 
    // so no matter which php file requires this file, it will always be able to find the relative path to connection.php
    require_once __DIR__."/../connection.php";
    require_once __DIR__ . "/../config.php";
    
    // Code Snippet 1-4
    //to handle form submissions
    if(isset($_GET["function"])) {
        $function = $_GET["function"];
        switch($function) {
            case "register":
                registerCustomer();
                break;
        }
    }

    function registerCustomer() {
        if(!empty($_POST)) {
            session_start();
            $name = $_POST["name"];
            $email = $_POST["email"];
            $password = $_POST["password"];
            $mobileNumber = $_POST["mobileNumber"];
            $address = $_POST["address"];       

            $sqlStatement = "INSERT into users(name,email,password,role) values ('$name','$email',MD5('$password'),'customer')";
            $last_id = executeQuery($sqlStatement);

            $sqlStatement = "INSERT into customers(user_id,mobileNumber,address) values ($last_id,$mobileNumber,'$address')";
            executeQuery($sqlStatement);


            //to obtain the registered user info to put into session
            $sqlStatement = "SELECT * from users where id=$last_id";
            $_SESSION["loggedInUser"] = findOne($sqlStatement);

            header("Location: $GLOBALS[path]");
        }
    }

    // End of 1-4

    // Code Snippet 4-9

    // End of 4-9

    // Code Snippet 4-14

    // End of 4-14
?>