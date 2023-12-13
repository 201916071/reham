<!DOCTYPE html>
<html lang="en">
<head>
<style>
            body {
            margin: 0;
            padding: 0;
            background-image: url('logo2.png');
            background-size: cover;
            background-attachment: fixed;
            background-repeat: no-repeat;
            background-position: center center;
            opacity: 0.88; 
        }
        h1{
            text-align: center;
            color: #6D1300;
            font-size: 200%;
            font-family: Times New Roman ;
        }    
        label {
            display: block;
            margin-bottom: 8px;
        }
        input, select {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;}

button {
    background-color: #383131;
    color: #fff;
    padding: 10px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

button:hover {
    background-color: #383131;
}
#logo {
            position: absolute;
            top: -9px;
            right: 1px;
            width: 200px;
            height: auto;
        }
        #EnterForm {
            width: 400px;
            height: 400px;
            padding: 20px;
            margin: 20px;
            background-color: rgba(255, 255, 255, 0.767);
            box-shadow: 3px 3px 3px #888888;
            border-radius: 10px;
            text-align: left;
            color:#292121;
            margin-left:auto;
            margin-right:auto;    
        }  
        header {
            background-color: #F6DAD4;
            color: #6D1300;
            text-align: center;
            padding: 10px;
        } 
        .fa-house {
            position: fixed;
            top: 30px;
            left: 10px;
            font-size: 24px; 
            cursor: pointer;
            color: #6D1300;
        }
</style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<img id="logo" src="logoo.png" alt="logo">
<header> <h1>Patient Fingerprint Authentication System
        (PFAs) </h1> </header>
        <?php
session_start()
{
if (isset($_SESSION["doctors"])) {
   header("Location: enter.php");
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
    
    $query = "INSERT INTO doctors (name, idNumber, email, job, specialty, IDhospital) VALUES ( '$name','$idNumber','$email','$job','$specialty','$IDhospital')";
    $stmt = mysqli_stmt_init($conn);
    $prepareStmt = mysqli_stmt_prepare($stmt,$query);
    if ($prepareStmt) {
        mysqli_stmt_bind_param($stmt,"sss",$name,$idNumber,$email, $job,$specialty,$IDhospital);
        mysqli_stmt_execute($stmt);
        echo "<div class='alert alert-success'>You are registered successfully.</div>";
    }else{
        die("Something went wrong");
    }
    
   mysqli_query($conn,$query );
   }
   echo
  "
  <script> alert('Data Inserted Successfully'); </script>
   ";

   }   
} 
?>

        <a href="http://localhost/project/HomePage.php"><i class="fa-solid fa-house"></i></a>
    <form id= "EnterForm"action="show.php"  method="get ,post">
        <label for="name">Name:</label>
        <input type="text" name="name" required><br>

        <label for="idNumber">ID Number:</label>
        <input type="text" name="idNumber" required><br>

        <label for="email">Email:</label>
        <input type="email" name="email" required><br>

        <label for="job">Job:</label>
        <select name="job" required>
        <option value="   ">   </option>
            <option value="paramedic">Paramedic</option>
            <option value="doctor">Doctor</option>
        </select><br>

        <div id="specialtyField" style="display: none;">
            <label for="specialty">Specialty:</label>
            <input type="text" name="specialty"><br>
        </div>
        <label for="IDhospital">ID of Hospital:</label>
        <select name="IDhospital" required>
        <option value="   ">   </option>
            <option value="2021"> 2021 </option>
            <option value="2022"> 2022 </option>
            <option value="2023"> 2023 </option>
            <option value="2024"> 2024 </option>
            <option value="2025"> 2025 </option>
            <option value="2026"> 2026 </option>
            <option value="2027"> 2027 </option>
            <option value="2028"> 2028 </option>
            <option value="2029"> 2029 </option>
            <option value="2030"> 2030 </option>
        </select><br>
        <script>
            // Show/hide specialty field based on job selection
            document.querySelector('select[name="job"]').addEventListener('change', function() {
                var specialtyField = document.getElementById('specialtyField');
                specialtyField.style.display = (this.value === 'doctor') ? 'block' : 'none';
            });
        </script>
      <button type="submit"id="submit" name="submit">Submit</button>

        <!-- <input type="submit" value="Submit" name="submit"> -->
    </form>
</body>
</html>