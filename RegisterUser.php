<?php 

include 'Connection.php';
if(isset($_SESSION)){
    session_destroy();
}

$username = $_POST['username'];
$password = $_POST['password'];
$confirmPassword = $_POST['confirmPassword'];
$email = $_POST['email'];

if ($password === $confirmPassword){
    //encrypt the password
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
}

$sql = "INSERT INTO users (username, password, email) VALUES (?,?,?)";
$stmt = $conn->prepare($sql);



$stmt->bind_param("sss", $username, $hashedPassword, $email);

//send to database
$stmt->execute();
//check to see if we have an id
if($stmt->insert_id){
    $error['username'] = 'UserName already Exists';
}

session_start();
$_SESSION['username'] = $username;
$_SESSION['id'] = $stmt->insert_id;
$_SESSION['email'] = $email;

$conn->close();



header("Location: index.php");



?>