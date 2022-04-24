<?php 

include 'Connection.php';


$name = filter_input(INPUT_POST, 'name',  FILTER_SANITIZE_STRING);
$price = filter_input(INPUT_POST, 'price', FILTER_SANITIZE_NUMBER_INT);
$console = filter_input(INPUT_POST, 'console', FILTER_SANITIZE_STRING);
$genre = filter_input(INPUT_POST, 'genre', FILTER_SANITIZE_STRING);
$available = filter_input(INPUT_POST, 'available', FILTER_SANITIZE_STRING);

//declare the error array
$error =[];

if(!isset($name) || empty($name)){
    $error['name'] = 'Name is required';
}
if(!isset($price) || empty($price)){
  $error['price'] = 'Price is required';
}
// if(!isset($console) || empty($console)){
//     $error['console'] = 'Console is required';
// }
if(!isset($genre) || empty($genre)){
    $error['genre'] = 'Genre is required';
}
if(!isset($available) || empty($available)){
    $error['available'] = 'Availability is required';
}


$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["image"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["image"]["tmp_name"]);
    if($check !== false) {
      echo "File is an image - " . $check["mime"] . ".";
      $uploadOk = 1;
    } else {
      echo "File is not an image.";
      $uploadOk = 0;
    }
  }
  
  // Check if file already exists
  if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
  }
  
  // Check file size
  if ($_FILES["image"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
  }
  
  // Allow certain file formats
  if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
  && $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
  }
  
  // Check if $uploadOk is set to 0 by an error
  if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
  // if everything is ok, try to upload file
  } else {
    if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
      echo "The file ". htmlspecialchars( basename( $_FILES["image"]["name"])). " has been uploaded.";
    } else {
      echo "Sorry, there was an error uploading your file.";
    }
  }

if(empty($error)){

    $sql = "INSERT INTO games (name, price, console, genre, available, image) VALUES (?,?,?,?,?,?)";

    $stmt= $conn->prepare($sql);

    $stmt->bind_param("sdssss",  $name, $price, $console, $genre, $available, $target_file);

    $stmt->execute();
    $conn->close();

    header("Location: index.php");
} else{
    echo '<pre>';
    print_r($error);
    echo '</pre>';
    require_once("NewGame.php");
}