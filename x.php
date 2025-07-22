<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "users";

$Name = $_POST ['name']; 
$Age = $_POST ['Age']; 

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO users_table (Name, Age) VALUES ('$Name', '$Age')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
