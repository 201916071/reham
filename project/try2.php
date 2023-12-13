<?php

$hostName = '127.0.0.1';
$dbUser = "root";
$dbPassword="";
$dbName = "pfa";
$conn = mysqli_connect($hostName, $dbUser, $dbPassword, $dbName);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM doctors name, idNumber, email, job, specialty, IDhospital";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<br> name: ". $row["name"]. " - idNumber: ". $row["idNumber"]. "- email:" . $row["email"] ."- job:" . $row["job"] ."- specialty:" . $row["specialty"] ."- IDhospital:" . $row["IDhospital"] . "<br>";
    }
} else {
    echo "0 results";
}

$conn->close();
?>
