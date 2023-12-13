
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Page Title</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
        .content {
            text-align: center;
            padding: 50px;
            font-size: 12px;
            color: #fff;
        }
        header {
            background-color: #F6DAD4;
            color: #6D1300;
            text-align: center;
            padding: 10px;
        }
        #logo {
            position: absolute;
            top: -10px;
            right: 1px;
            width: 200px;
            height: auto;
        }
         
        .fa-lock {
            position: fixed;
            top: 30px;
            left: 10px;
            font-size: 24px; 
            cursor: pointer;
            color: #6D1300;
        }          
         .fa-house {
            position: fixed;
            top: 30px;
            left: 50px;
            font-size: 24px; 
            cursor: pointer;
            color: #6D1300;
        }
        .center
        {
            margin-left:auto;
            margin-right:auto;
            background-color: rgba(255, 255, 255, 0.7);
                border: 1px solid #F8DCF6 ;
                border-radius: 5px;
        }
        h2{
            text-align: center;
            color: #6D1300;
        }
    </style>
</head>
<body>
    <header>
<img id="logo" src="logoo.png" alt="logo">
<h1>Patient Fingerprint Authentication system
        (PFAs)</h1>
    </header>
    <br><br>
    <h2>Hospital Data in Sultanate of Oman: <span id="Hospital Data in Sultanate of Oman"></span></h2>
            <table class="center" border='1'>
            <div class="container">
    <tr>
        <th>ID Number</th>
        <th>Hospital Name</th>
        <th>City</th>
        <th>Emergency Number</th>
    </tr>

    <?php
    // Hospital data array
    $hospitalData = array(
        array('2021','Royal Hospital', 'Bosher', '24599000'),
        array('2022','Sultan Qaboos Hospital', 'Seeb','24141111'),
        array('2023','Police Hospital', ' Qurum', '24603988'),
        array('2024','Al Nahdha Hospital', ' Ruwi', '24837800'),
        array('2025','Sur Hospital', 'Sur', ' 25561372'),
        array('2026','Tanam Hospital', ' Ibri', '25699033'),
        array('2027','Samail Hospital', 'Samail', '25350055'),
        array('2028','Rustaq Hospital', 'Rustaq', '26877186'),
        array('2029','Khasab Reference Hospital', 'Khasab', '26830187'),
        array('2030','Sohar Hospital', 'Sohar', '36840399'),

    );

    // Display hospital data in a table
    foreach ($hospitalData as $hospital) {
        echo '<tr>';
        echo '<td>' . $hospital[0] . '</td>';
        echo '<td>' . $hospital[1] . '</td>';
        echo '<td>' . $hospital[2] . '</td>';
        echo '<td>' . $hospital[3] . '</td>';
        echo '</tr>';
    }
    ?>
    </p></div>
</table>
<a href="http://localhost/project/LoginPage.php"><i class="fa-solid fa-lock"></i></a>
<a href="http://localhost/project/HomePage.php"><i class="fa-solid fa-house"></i></a>
</body>
</html>
