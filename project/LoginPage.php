
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login Form</title>
    <link rel="stylesheet" href="style.css">
    <link
    href="https://fonts.googleapis.com/icon?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Round|Material+Icons+Sharp|Material+Icons+Two+Tone"

          rel="stylesheet"/>
          <link rel="preconnect" href="https://fonts.googleapis.com" />
         <link rel="preconnect" href=" https://fonts.gstatic.com" crossorigin />
    <style>
        body {
width: 100%;
height: 100vh;
width: 100%;
height: 100vh;
margin: 0;
padding: 0;
background-image: url('logo2.png');
background-size: cover;
background-attachment: fixed;
background-repeat: no-repeat;
background-position: center center;
opacity: 0.88;
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
.center {
width: 100%;
height: 100%;
display: flex;
align-items: center;
justify-content: center;
background: url(../images/login-back.png);
background-size: cover;
}

form {
width: 400px;
height: 400px;
box-sizing: border-box;
border-radius: 5mm;
padding: 40px 30px;
backdrop-filter: blur(5px) saturate(160%);
-webkit-backdrop-filter: blur(5px) saturate(160%);
background: #ffffff; /* Changed to solid white */
border: 0.5mm solid rgba(255, 255, 255, 0.65);
position: relative;
}

.title {
width: 100%;
font-family: poppins;
font-size: 30px;
text-align: center;
margin-bottom: 20px;
color: black;
}

.inputs {
width: 100%;
height: fit-content;
display: flex;
align-items: center;
justify-content: center;
flex-direction: column;
}

.inputf {
width: 100%;
height: fit-content;
box-sizing: border-box;
margin: 15px 0;
position: relative;
}

.input {
width: 100%;
height: 45px;
box-sizing: border-box;
border: none;
border-bottom: 0.55mm solid rgb(0,0,0);
background: none;
padding: 0 15px;
font-family: poppins;
font-size: 15px;
color: black;
outline: none;
}

.input::placeholder {
color: rgb(93, 90, 90);
}

.label {
position: absolute;
top: 0;
left: 0;
color: black;
font-size: 13px;
font-weight: 500;
font-family: poppins;
opacity: 0;
z-index: -1;
transition: 0.25s ease-out;
}

.input:focus + .label {
top: -20px;
opacity: 1;
z-index: 1;
}

.input:focus::placeholder {
opacity: 0;
}


.input:not(:placeholder-shown) + .label {
top: -20px;
opacity: 1;
z-index: 1;
}

.icon {
color: black;
position: absolute;
right: 0px;
top: 50%;
transform: translate(0, -50%);
font-size: 18px;
}

.links {
width: 100%;
display: flex;
align-items: center;
justify-content: space-between;
font-size: 12px;
font-family: poppins;
margin-bottom: 50px;
color: black;
}

.links label {
display: flex;
align-items: center;
justify-content: center;
}

.links a {
font-weight: 600;
color: black;
}

.btn {
width: 100%;
height: 40px;
background: gray;
outline: none;
border: none;
cursor: pointer;
border-radius: 6mm;
display: flex;
align-items: center;
justify-content: center;
margin-bottom: 10px;
}

.btn span {
color: rgb(235, 235, 235);
font-family: poppins;
font-size: 16px;
}

.text {
width: 100%;
font-family: poppins;
font-size: 13px;
text-align: center;
color: rgb(93, 90, 90);
}

.text a {
color: black;
font-weight: 600;
}

.dots {
width: fit-content;
height: fit-content;
display: flex;
align-items: center;
justify-content: center;
}

.dot {
width: 12px;
height: 12px;
border-radius: 50%;
background: rgba(255, 255, 255, 0.1);
margin: 1px;
animation: load 0.5s ease-out infinite alternate var(--delay);
}

@keyframes load {

0% {
  background: rgb(255, 255, 255);
}
50%,
100% {
  background: rgba(255, 255, 255, 0.1);
}
}

.btn .dots {
display: none;
}

.btn span {
display: block;
}

.btn.active .dots {
display: flex;
}

.btn.active span {
display: none;
}

.input.active {
animation: shake 0.25s ease-in-out 3;
}

@keyframes shake {
0% {
  margin-left: 0px;
}
25% {
  margin-left: 5px;
}
75% {
  margin-left: -5px;
}
100% {
  margin-left: 0px;
}
}
    </style>   
  </head>
  <body>
  <img id="logo" src="logoo.png" alt="logo">

<header>

    <h1>Patient Fingerprint Authentication System
    (PFAs)</h1>
</header>
   <img id="logo" src="logoo.png" alt="logo">
    <div class="center">
      <form action="">
        <div class="title">Login</div>
        <span class="inputs">
          <span class="inputf">
            <input type="email" class="input" placeholder="Email" />
            <span class="label">email</span>
            <span class="material-icons icon">email</span>
          </span>
          <span class="inputf">
            <input type="password" class="input" placeholder="Password" />
            <span class="label">password</span>
            <span class="material-icons icon">lock</span>
          </span>
        </span>
        <div class="links">
          <label for="remember">
            <input type="checkbox" id="remember" />
            Remember Me
          </label>
        </div>
        <button type="button" class="btn">
          <span><a href="http://localhost/project/enter.php">Login</a></span>
          <div class="dots">
            <div class="dot" style="--delay: 0s"></div>
            <div class="dot" style="--delay: 0.25s"></div>
            <div class="dot" style="--delay: 0.5s"></div>
          </div>
        </button>
        <div class="text">
          New user? Create an account <a href="http://localhost/project/RegisterPage.php">Register</a>
        </div>
      </form>
    </div>
    <script>
      var btn = document.querySelector(".btn");
      var inputs = document.querySelectorAll(".input");
      btn.onclick = function () {
        btn.classList.toggle("active");
        setTimeout(() => {
          btn.classList.toggle("active");
          inputs[1].classList.toggle("active");
        }, 1500);
        setTimeout(() => {
          inputs[1].classList.toggle("active");
        }, 3000);
      };
    </script>
        <?php
        // Check if the form is submitted
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Get user input
            $username = $_POST["username"];
            $password = $_POST["password"];
  
            // Check the username and password (you should replace this with actual validation)
            if ($username === "your_username" && $password === "your_password") {
                // Redirect to a dashboard or success page
                header("Location: dashboard.php");
                exit();
            } else {
                $error = "Invalid username or password";
            }
        }
        ?>
        <?php if (isset($error)): ?>
        <p style="color: red;"><?php echo $error; ?></p>
        <?php endif; ?>
  </body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Page Title</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
     
         .fa-house {
            position: fixed;
            top: 30px;
            left: 10px;
            font-size: 24px; 
            cursor: pointer;
            color: #6D1300;
        }
    </style>
</head>
<body>
<a href="http://localhost/project/HomePage.php"><i class="fa-solid fa-house"></i></a>
</body>
</html>
