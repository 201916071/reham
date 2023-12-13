<?php 
require_once 'database.php';
 $query="INSERT INTO `doctors`(`doctor_id`, `F_name`, `L_name`) VALUES (8889,'dd','ee')";

mysqli_query($conn,$query );


?>