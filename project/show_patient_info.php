<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        body{
            margin: 0;
            padding: 0;
            background-image: url('logo2.png');
            background-size: cover;
            background-attachment: fixed;
            background-repeat: no-repeat;
            background-position: center center;
            opacity: 0.88; 
        }
        
        p {
                font-family: verdana;
                font-size: 100%;
            }
        #displayData {
                border: 2px solid ;
                padding: 20px;
                margin: 20px;
                background-color: rgba(255, 255, 255, 0.7);
                border: 1px solid #F8DCF6 ;
                border-radius: 5px;
                text-align: left;
            }
        .patient-info {
            text-align: left;
            padding: 10px;
        }
        #editButton{
            text-align: center;
            font-family: verdana;
            font-size: 100 ;
        }
        #logo {
            position: absolute;
            top: -10px;
            right: 1px;
            width: 200px;
            height: auto;
        }
        header {
    background-color: #F6DAD4;
    color: #6D1300;
    text-align: center;
    padding: 10px;
}
h2{
            color: #6D1300;
            font-family: Tw Cen MT;
            font-size: 250%;
            text-align: center;
        }

        .fa-house {
            position: fixed;
            top: 30px;
            left: 10px;
            font-size: 24px; 
            cursor: pointer;
            color: #6D1300;
        }
        .fa-user {
            position: fixed;
            top: 30px;
            left: 50px;
            font-size: 24px; 
            cursor: pointer;
            color: #6D1300;
        }
    </style>    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Showing Patient Information</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
<header>
<h1>Patient Fingerprint Authentication system
        (PFAs)</h1>
    </header>
    <img id="logo" src="logoo.png" alt="logo">
    <a href="http://localhost/project/HomePage.php"><i class="fa-solid fa-house"></i></a>
    <a href="http://localhost/project/enter.php"> <i class="fa-solid fa-user"></i></a>
    <form id="displayData">
    <h2>Patient </h2>
    <?php
        $fingerprint = $_GET['fingerprint'];
        $patientName = $_GET['patientName'];
        $patientID = $_GET['patientID'];
        $birthday = $_GET['birthday'];
        $bloodType = $_GET['bloodType'];
        $gender = $_GET['gender'];
        $diagnosis = $_GET['diagnosis'];

        // Calculate age from birthday
        $birthdate = new DateTime($birthday);
        $today = new DateTime('today');
        $age = $birthdate->diff($today)->y;

        // Display patient information
        echo "<p><strong>Fingerprint ID:</strong> $fingerprint</p>";
        echo "<p><strong>Patient Name:</strong> $patientName</p>";
        echo "<p><strong>Patient ID:</strong> $patientID</p>";
        echo "<p><strong>Birthday:</strong> $birthday (Age: $age years)</p>";
        echo "<p><strong>Blood Type:</strong> $bloodType</p>";
        echo "<p><strong>Gender:</strong> $gender</p>";
        echo "<p><strong>Diagnosis:</strong> $diagnosis</p>";
    ?>
    
    <a href="http://localhost/project/enter_patient_info.php">
        <button type="button" id="editButton">Edit</button>
    </a>
    </form>

</body>
</html>
