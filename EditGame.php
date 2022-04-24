<?php

echo '<pre>';

print_r($_POST);


//connect to the database
include 'Connection.php';

// set up the sql string with prepared statements
$sql = "UPDATE games
        SET name=?, 
            price=?,
            console=?,
            genre=?,             
            available=?               
        WHERE id=?";

//set up the variables
$id = $_POST["id"];
$name = $_POST["name"];
$price = $_POST["price"];
$console = $_POST["console"];
$genre = $_POST["genre"];
$available = $_POST["available"];

$stmt= $conn->prepare($sql);


    $stmt->bind_param("sdsssi", $name, $price, $console, $genre, $available, $id);

    $stmt->execute();
    $conn->close();






echo '<pre>';

print_r($conn);
echo '</pre>';

//redirect back to index page
header("Location: index.php");


?>