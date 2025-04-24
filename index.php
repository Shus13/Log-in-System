<?php
$servername = "localhost";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password);

if(!$conn) {
    die("Connection failed : " . mysqli_connect_error());
}

$sql = "CREATE TABLE Students(
id INT(6) UNSIGNED AUTO_INCREAMENT PRIMARY KEY),
studentname VARCHAR(30) NOT NULL,
email VArCHAR(50) NOT NULL)";

if (mysql_query($conn, $sql)) {
    echo"Table created successfully.";
} else {
    echo "Error creating error.";
}

mysqli_close($conn);

?>