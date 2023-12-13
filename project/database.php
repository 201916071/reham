<?php

$hostName = '127.0.0.1';
$dbUser = "root";
$dbPassword="";
// $dbidNumber = "";
// $dbemail = "";
// $dbjob ="";
// $dbspecialty = "";
// $dbIDhospital= "";
$dbName = "pfas";
$conn = mysqli_connect($hostName, $dbUser, $dbPassword, $dbName);
if (!$conn) {
    die("Something went wrong;");
}
// mysqli_select_db($conn ,$dbName );

?>

