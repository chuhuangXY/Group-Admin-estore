<?php
     $conn = mysqli_connect("localhost","root","","product");

     if(isset($_GET["function"])) {
        $function = $_GET["function"];
        switch($function) {
            case "add":
                add();
            break;
            case "delete":
                delete();
            break;
            case "update":
                update();
            break;
        }
     }

    function getAllProducts() {
        global $conn;
        /* Perform SQL query to retrieve all products and return */
     }

    function add() {
        global $conn;
        if(!empty($_POST)) {
            /* Retrieve fields from form using $_POST["..."] */
            /* Perform SQL query to insert product */
            /* Redirect to homepage using header(".....") */
        }
     }

    function delete() {   }

    function getProductById($id) {    }

    function update() {    }

?>
