<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bitnami_wordpress";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
 die("Connection failed: " . $conn->connect_error);
} else {
  echo "conn succeed";
}

$sql = "CREATE TABLE MyTestingTable (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(50),
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";
$result = $conn->query($sql);

/*
//After you insert values in your table you can print them
if ($result->num_rows > 0) {
 // output data of each row
 while($row = $result->fetch_assoc()) {
   echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
 }
} else {
 echo "0 results";
}
*/

$conn->close();
?>
