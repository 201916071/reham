
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
        .container {
            max-width: 600px;
            margin: 50px auto;
            background-color: rgba(255, 255, 255, 0.767);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 5px 5px 5px #888888;
            color:#292121;
        }  
        .info {
            text-align: left;
            padding: 50px;
        }      
        label {
            display: block;
            margin-bottom: 8px;
        }
        input, select {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;}

        #displayData {
                border: 2px solid ;
                padding: 20px;
                margin: 15px;
                background-color: rgba(255, 255, 255, 0.7);
                border: 1px solid #F8DCF6 ;
                box-shadow: 5px 5px 5px #888888;
                border-radius: 10px;
                text-align: center;
            }    

button {
    background-color: #383131;
    color: #fff;
    padding: 10px;
    border: none;
    border-radius: 4px;
    cursor: pointer;}
    html,body{
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
  justify-content: right;
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

.wrapper .patient:hover span,
.wrapper .patient:hover .tooltip,
.wrapper .patient:hover .tooltip:before{
  background: #6D1300;
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
            width: 1420px;
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
    <title>Show Data Page</title>
</head>
<body>
<img id="logo" src="logoo.png" alt="logo">
<header> <h1>Patient Fingerprint Authentication System
        (PFAs) </h1> </header>
        <a href="http://localhost/project/HomePage.php"><i class="fa-solid fa-house"></i></a>
    <br>
    <h1>Profile</h1>
<div id="displayData">
    <div class="info">
    <p>Name: <span id="showName"></span></p>
    <p>ID Number: <span id="showIdNumber"></span></p>
    <p>Email: <span id="showEmail"></span></p>
    <p>Job: <span id="showJob"></span></p>
    <p id="showSpecialty">Specialty: <span></span></p>
    <P>ID of Hospital: <span id="showIDhospital"></span></p>
    <br>
    <div class="wrapper">
    <a href="http://localhost/project/enter_patient_info.php"><div class="icon patient">
            <div class="tooltip">
				Patient
            </div>
            <span><i class="fa-solid fa-bed-pulse"></i></span>
         </div></a>
      </div>
</div>
</div>
    <script>
        // Retrieve data from URL parameters
        const params = new URLSearchParams(window.location.search);
        document.getElementById('showName').innerText = params.get('name') || 'N/A';
        document.getElementById('showIdNumber').innerText = params.get('idNumber') || 'N/A';
        document.getElementById('showEmail').innerText = params.get('email') || 'N/A';
        document.getElementById('showJob').innerText = params.get('job') || 'N/A';
        document.getElementById('showIDhospital').innerText = params.get('IDhospital') || 'N/A';

        const showSpecialty = document.getElementById('showSpecialty');
        const specialty = params.get('specialty');
        if (specialty) {
            showSpecialty.style.display = 'block';
            showSpecialty.querySelector('span').innerText = specialty;
        }
    </script>
</body>
</html>
