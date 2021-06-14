<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = 'instagramclone';
// Create connection
$conn = new mysqli($servername, $username, $password,$database);


// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Create a table in MySql database
// $sql = "CREATE TABLE `instagramclone`.`stories` ( `name` VARCHAR(12) NOT NULL , `email` VARCHAR(12) NOT NULL ) ENGINE = InnoDB;";
// $result = $conn->query($sql);
// if($result === TRUE){
//     echo 'Table Created';
// }

//adding data to instagram db into users table
$email = $_POST['email'];
$name = $_POST['name'];
$adding_data = "INSERT INTO users (`name`,`email`)
VALUES ('$name', '$email')";
$addedData = $conn->query($adding_data);
if ($addedData === TRUE) {
    echo 'Data Added';
    header("Location: home.php");
}
$conn->close();
?>


