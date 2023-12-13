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
            
            h2 {
                color: #6D1300;
                font-family: Tw Cen MT;
                font-size: 150%;
                text-align:center;}
                p {
                font-family: verdana;
                font-size: 70%;
            }
                form {
                font-family: verdana;
                font-size: 100%;
            }

        #logo {
            position: absolute;
            top: -10px;
            right: 1px;
            width: 200px;
            height: auto;
        }
        #displayData {
                border: 2px solid #000;
                padding: 20px;
                margin: 20px;
                background-color: rgba(255, 255, 255, 0.7);
                box-shadow: 5px 5px 5px hsl(0, 29%, 73%);
                border-radius: 10px;
                text-align: left;
            }
            #patientForm {
            
            padding: 20px;
            margin: 20px;
            background-color: rgba(255, 255, 255, 0.767);
            box-shadow: 5px 5px 5px #888888;
            border-radius: 10px;
            text-align: center;
            color:#292121;
            
        }
            
            textarea {
                width: 100%;
                height: 150px;
                border: 1px solid #888888 ;
                border-radius: 5px;
                padding: 5px;
                resize: none;}
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
    <title>Entering Patient Information</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
<a href="http://localhost/project/HomePage.php"><i class="fa-solid fa-house"></i></a>
<header>
<h1>Patient Fingerprint Authentication system
        (PFAs)</h1>
    </header>
<img id="logo" src="logoo.png" alt="logo">
    <br><br>
    <form id="patientForm"action="show_patient_info.php" method="get">
        <label for="fingerprint">Fingerprint ID:</label>
        <input type="text" id="fingerprint" name="fingerprint" required><br>

        <label for="patientName">Patient Name:</label>
        <input type="text" id="patientName" name="patientName" required><br>

        <label for="patientID">Patient ID:</label>
        <input type="text" id="patientID" name="patientID" required><br>

        <label for="birthday">Birthday:</label>
        <input type="date" id="birthday" name="birthday" required><br>

        <label for="bloodType">Blood Type:</label>
        <input type="text" id="bloodType" name="bloodType" required><br>

        <label for="gender">Gender:</label>
        <select id="gender" name="gender" required>
            <option value="male">Male</option>
            <option value="female">Female</option>
            <option value="other">Other</option>
        </select><br>

        <label for="diagnosis">Diagnosis:</label>
        <textarea id="diagnosis" name="diagnosis" rows="4" required></textarea><br>

        <input type="submit" value="Save">
    </form>
</body>
</html>
