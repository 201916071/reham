<?php
session_start()
{
if (isset($_SESSION["doctors"]))
 {
   header("Location:enter.php");
}
require 'database.php';
if (isset($_POST["submit"]))
{
    $name = $_POST["name"];
    $idNumber = $_POST["idNumber"];
    $email = $_POST["email"];
    $job = $_POST["job"];
    $specialty = $_POST["specialty"];
    $IDhospital = $_POST["IDhospital"];

   $errors = array();
   if (empty($name) OR empty($idNumber) OR empty($email) OR empty($job) OR empty($specialty) OR empty($IDhospital)) {
    array_push($errors,"All fields are required");
   }
   if (count($errors)>0) {
    foreach ($errors as  $error) {
        echo "<div class='alert alert-danger'>$error</div>";
    }
   }else{
    
    $query = "INSERT INTO doctors (name, idNumber, email, job, specialty, IDhospital) VALUES ( '','$name','$idNumber','$email','$job','$specialty','$IDhospital')";
    $stmt = mysqli_stmt_init($conn);
    $prepareStmt = mysqli_stmt_prepare($stmt,$query);
    if ($prepareStmt) {
        mysqli_stmt_bind_param($stmt,"sss",$name,$idNumber,$email, $job,$specialty,$IDhospital);
        echo $stmt;
        mysqli_stmt_execute($stmt);
        echo "<div class='alert alert-success'>You are registered successfully.</div>";
        //Closing the statement
        mysqli_stmt_close($stmt);

    }else{
        die("Something went wrong");
    }-
    
   mysqli_query($conn,$query );
   }
   echo
  "
  <script> alert('Data Inserted Successfully'); </script>
   ";

   }   
}
?>
