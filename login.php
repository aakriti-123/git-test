<?php

define("DB_HOST", "localhost");
define("DB_USER", "root");
define("DB_PASSWORD", "");
define("DB_DATABASE", "books");

    // $servername = "localhost";
    // $dbname = "books";
    // $username = "root";
    // $password = "";
    
    // Create connection
    $conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);
    
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
    echo "Connected successfully";

    //Select query of username and password from user table 
    $sql = "SELECT username, password FROM user";
    $result = $conn->query($sql);// run the sql query

    if($result->num_rows > 0) {

        //output data of each row
        while($row = $result->fetch_assoc()) {  //it fetch data from each row, php method
            // echo "Username:" . $row["username"]. "Password:". $row["password"]. "<br>";
            $uname = $row["username"];
            $pass = $row["password"];

            echo "$uname";
            echo "$pass";
        }
    } else {
        echo "Data not found!";
    }

    $conn->close();


    // $sql="CREATE DATABASE Books_db";
    // if ($conn->query($sql) === TRUE) {
    //     echo "Database created successfully";
    // } else {
    //     echo "Error creating database: " . $conn->error;
    // }
    // $sql = "CREATE TABLE MyGuests (
    //     id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
    //     firstname VARCHAR(30) NOT NULL,
    //     lastname VARCHAR(30) NOT NULL,
    //     email VARCHAR(50),
    //     reg_date TIMESTAMP
    //     )";
        
    //     if ($conn->query($sql) === TRUE) {
    //         echo "Table MyGuests created successfully";
    //     } else {
    //         echo "Error creating table: " . $conn->error;
    //     }



?>



    
    