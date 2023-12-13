
<!DOCTYPE html>
<html>
<head>
<title>Home Page</title>
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
            color:#6D1300;
            font-size: 200%;
            font-family: Times New Roman ;
        }
        
        .content {
            text-align: center;
            padding: 50px;
            font-size: 10px;
            color: #fff;
        }
        p{
            font-family: verdana;
                font-size: 100%;
                color:#6D1300;
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
            height: 80px;
            width: 1430px;
        }
        .fa-lock {
            position: fixed;
            top: 30px;
            left: 10px;
            font-size: 24px; 
            cursor: pointer;
            color: #6D1300;
        }          
         .fa-hospital {
            position: fixed;
            top: 30px;
            left: 50px;
            font-size: 24px; 
            cursor: pointer;
            color: #6D1300;
        }
        .container {
            border: 2px solid ;
                padding: 20px;
                margin: 20px;
                background-color: rgba(255, 255, 255, 0.7);
                border: 1px solid #F8DCF6 ;
                border-radius: 5px;
                text-align: center;
        }

        .link {
            cursor: pointer;
            color: #460707;
            text-decoration: underline;
            margin-right: 24px;
        }

        .textbox {
            display: none;
        }
        body{
  display: grid;
  height: 100%;
  width: 100%;
  place-items: center;
}
.wrapper{
  display: inline-flex;
}
.wrapper .icon{
  margin: 0 20px;
  text-align: center;
  cursor: pointer;
  display: flex;
  align-items: center;
  justify-content: center;
  flex-direction: column;
  position: relative;
  z-index: 2;
  transition: 0.4s cubic-bezier(0.68, -0.55, 0.265, 1.55);
}
.wrapper .icon span{
  display: block;
  height: 60px;
  width: 60px;
  background: #fff;
  border-radius: 50%;
  position: relative;
  z-index: 2;
  box-shadow: 0px 10px 10px rgba(0,0,0,0.1);
  transition: 0.4s cubic-bezier(0.68, -0.55, 0.265, 1.55);
}
.wrapper .icon span i{
  line-height: 60px;
  font-size: 25px;
}
.wrapper .icon .tooltip{
  position: absolute;
  top: 0;
  z-index: 1;
  background: #fff;
  color: #fff;
  padding: 10px 18px;
  font-size: 20px;
  font-weight: 500;
  border-radius: 25px;
  opacity: 0;
  pointer-events: none;
  box-shadow: 0px 10px 10px rgba(0,0,0,0.1);
  transition: 0.4s cubic-bezier(0.68, -0.55, 0.265, 1.55);
}
.wrapper .icon:hover .tooltip{
  top: 70px;
  opacity: 1;
  pointer-events: auto;
}
.wrapper .icon:hover span{
  color: #fff;
}

.wrapper .doctor:hover span,
.wrapper .doctor:hover .tooltip,
.wrapper .doctor:hover .tooltip:before{
  background: #6D1300;
}
.wrapper .parmidic:hover span,
.wrapper .parmidic:hover .tooltip,
.wrapper .parmidic:hover .tooltip:before{
  background: #6D1300;
}


    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Page Title</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
<header>
        <h1>Patient Fingerprint Authentication system
        (PFAs)</h1>
        <img id="logo" src="logoo.png" alt="logo">

<a href="http://localhost/project/LoginPage.php"><i class="fa-solid fa-lock"></i></a>
<a href="http://localhost/project/Hospital.php"><i class="fa-solid fa-hospital"></i></a>
  </header>
<br><br><br>
        <div class="container">
            <p>About: <span id="About"></span> <br>
Fingerprint Authentication Patient is a system that helps
in identifying a patient's identity through the fingerprint
scanner that helps the paramedic in the diagnosis. It also displays information
about the patient such as blood type, medical history, and
other information that helps theparamedic inidentifying a
patient's history during an Emergency</p></div>

<div class="wrapper">
<a href="http://localhost/project/enter.php"><div class="icon doctor">
            <div class="tooltip">
				Doctor
            </div>
            <span><i class="fa-solid fa-user-doctor"></i></span>
         </div></a>
        <a href="http://localhost/project/enter.php"> <div class="icon parmidic">
            <div class="tooltip">
            Parmidic
            </div>
            <span><i class="fa-solid fa-truck-medical"></i></span>
         </div>
      </div></a>


<script>
    function toggleTextBox(section) {
        const textBox = document.getElementById(section + '-textbox');
        if (textBox.style.display === 'none' || textBox.style.display === '') {
            textBox.style.display = 'block';
        } else {
            textBox.style.display = 'none';
        }
    }
</script>
</body>
</html>