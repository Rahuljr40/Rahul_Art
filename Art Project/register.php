<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign Up</title>
  <link rel="website icon" type="png" href="logo.png">
</head>
<style>
  @import url('https://fonts.googleapis.com/css?family=Raleway:400,700');

  * {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
    font-family: Raleway, sans-serif;
    box-sizing: border-box;
  }

  body {
    background: linear-gradient(90deg, #C7C5F4, #776BCC);
  }

  .container1 {  
    display: flex;
    align-items: center;
    justify-content: center;
    min-height: 120vh;
  }

  .screen {
    background: linear-gradient(90deg, #5D54A4, #7C78B8);
    position: relative;
    height: 700px;
    width: 360px;
    box-shadow: 0px 0px 24px #5C5696;
  }

  .screen__content {
    z-index: 1;
    position: relative;
    height: 100%;
  }

  .screen__background {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    z-index: 0;
    -webkit-clip-path: inset(0 0 0 0);
    clip-path: inset(0 0 0 0);
  }

  .screen__background__shape {
    transform: rotate(45deg);
    position: absolute;
  }

  .screen__background__shape1 {
    height: 520px;
    width: 520px;
    background: #FFF;
    top: -50px;
    right: 120px;
    border-radius: 0 72px 0 0;
  }

  .screen__background__shape2 {
    height: 220px;
    width: 220px;
    background: #6C63AC;
    top: -172px;
    right: 0;
    border-radius: 32px;
  }

  .screen__background__shape3 {
    height: 540px;
    width: 190px;
    background: linear-gradient(270deg, #5D54A4, #6A679E);
    top: -24px;
    right: 0;
    border-radius: 32px;
  }

  .screen__background__shape4 {
    height: 400px;
    width: 200px;
    background: #7E7BB9;
    top: 420px;
    right: 50px;
    border-radius: 60px;
  }

  .login {
    width: 320px;
    padding: 30px;
    padding-top: 156px;
  }

  .login__field {
    padding: 20px 0px;
    position: relative;
  }

  .login__icon {
    position: absolute;
    top: 30px;
    color: #7875B5;
  }

  .login__input {
    border: none;
    border-bottom: 2px solid #D1D1D4;
    background: none;
    padding: 10px;
    padding-left: 24px;
    font-weight: 700;
    width: 75%;
    transition: .2s;
  }

  .login__input:active,
  .login__input:focus,
  .login__input:hover {
    outline: none;
    border-bottom-color: #6A679E;
  }

  .login__submit1 {
    background: #fff;
    font-size: 14px;
    margin-top: 30px;
    padding: 16px 20px;
    border-radius: 26px;
    border: 1px solid #D4D3E8;
    text-transform: uppercase;
    font-weight: 700;
    display: flex;
    align-items: center;
    width: 100%;
    color: #4C489D;
    box-shadow: 0px 2px 2px #5C5696;
    cursor: pointer;
    transition: .2s;
  }

  .login__submit:active,
  .login__submit:focus,
  .login__submit:hover {
    border-color: #6A679E;
    outline: none;
  }

  .button__icon {
    font-size: 24px;
    margin-left: auto;
    color: #7875B5;
  }



  .social-login {
    padding-top: 50px;
    position: absolute;
    height: 140px;
    width: 160px;
    text-align: center;
    bottom: 0px;
    right: 0px;
    color: #fff;
  }

  .social-icons {
    display: flex;
    align-items: center;
    justify-content: center;
  }

  .social-login__icon {
    padding: 20px 10px;
    color: #fff;
    text-decoration: none;
    text-shadow: 0px 0px 8px #7875B5;
  }

  .social-login__icon:hover {
    transform: scale(1.5);
  }

  .links {
    padding-top: 20px;
    position: relative;
    width: 100%;
    display: flex;
    
  }

  .links a {
    font-family: Georgia, 'Times New Roman', Times, serif;
    color: black;
    text-decoration: none;
  }

  
</style>

<body>
  <nav class="custom-navbar navbar navbar navbar-expand-md navbar-dark bg-dark" arial-label="Furni navigation bar">

    <div class="container">
      <a class="navbar-brand" href="index.php">Art Gallary<span>.</span></a>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsFurni"
        aria-controls="navbarsFurni" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsFurni">
      <ul class="custom-navbar-nav navbar-nav ms-auto mb-2 mb-md-0">
                    <li>
                        <a class="nav-link" href="index.php">Home </a>
                    </li>
                    <li>

                        <a class="nav-link" href="contactus.php">Contact US </a>
                    </li>
                    <li><a class="nav-link" href="products.php">Products </a></li>
                    <li><a class="nav-link" href="aboutus.html">About US </a></li>
                    <li><a class="nav-link" href="login.php">Login </a></li>


                </ul>
      </div>
  </nav>

  </div>
  <div class="container1">
    <div class="screen">
      <div class="screen__content">
        <form class="login" method="post">
          <div class="login__field">
            <i class="login__icon fas fa-user"></i>
            <input type="text" name="uname" class="login__input" placeholder="User name / Email">
          </div>
          <div class="login__field">
            <i class="login__icon fas fa-lock"></i>
            <input type="password" name="password" class="login__input" placeholder="Password">
           
          </div>

          <div class="login__field">
            <i class="login__icon fas fa-lock"></i>
            <input type="password" name="cpassword" class="login__input" placeholder="Confirm Password">
           
          </div>

          <input type="submit"class="button login__submit1" name="submit" value="Sign Up" id="submit" >
          <!-- <input type="submit" class="button login__submit1" name="save" value="sign Up"> <i class="button__icon fas fa-chevron-right"></i></input> -->
          <div class="links">
            <div>Already have an account?</div> <a class="links" href="login.php" style="color: rgb(0, 0, 0);">
              <strong>Login</strong></a>
          </div>
        </form>
        <div></div>
        <div></div>
        <div class="social-login">
          <h3>Sign in via</h3>
          <div class="social-icons">
            <a href="https://www.instagram.com/" target="_blank" class="social-login__icon fab fa-instagram"></a>
            <a href="https://www.facebook.com/" target="_blank" class="social-login__icon fab fa-facebook"></a>
            <a href="https://www.google.com/gmail/about/" target="_blank" class="social-login__icon fab fa-solid fa-google "></a>
            
          </div>
        </div>
      </div>
      <div class="screen__background">
        <span class="screen__background__shape screen__background__shape4"></span>
        <span class="screen__background__shape screen__background__shape3"></span>
        <span class="screen__background__shape screen__background__shape2"></span>
        <span class="screen__background__shape screen__background__shape1"></span>
      </div>
    </div>
  </div>
  

    <!--<script>
      function fuction1() {
        var username = document.getElementsByName("Username")[0].value;
        var password = document.getElementsByName("Password")[0].value;
        var confirmPassword = document.getElementsByName("Cpassword")[0].value;
    
        if (username.trim() === '') {
          alert("Please fill in the username field.");
          return false;
        }
    
        if (password.trim() === '') {
          alert("Please fill in the password field.");
          return false;
        }
    
        if (confirmPassword.trim() === '') {
          alert("Please fill in the confirm password field.");
          return false;
        }
    
        if (password !== confirmPassword) {
          alert("Passwords do not match.");
          return false;
        }
    
        
        alert("Sign Up Successful!");
        window.location.assign("login.html"); 
        return false; 
      }
    </script>


   Code injected by live-server
    <script>
      // <![CDATA[  <-- For SVG support
      if ('WebSocket' in window) {
        (function () {
          function refreshCSS() {
            var sheets = [].slice.call(document.getElementsByTagName("link"));
            var head = document.getElementsByTagName("head")[0];
            for (var i = 0; i < sheets.length; ++i) {
              var elem = sheets[i];
              var parent = elem.parentElement || head;
              parent.removeChild(elem);
              var rel = elem.rel;
              if (elem.href && typeof rel != "string" || rel.length == 0 || rel.toLowerCase() == "stylesheet") {
                var url = elem.href.replace(/(&|\?)_cacheOverride=\d+/, '');
                elem.href = url + (url.indexOf('?') >= 0 ? '&' : '?') + '_cacheOverride=' + (new Date().valueOf());
              }
              parent.appendChild(elem);
            }
          }
          var protocol = window.location.protocol === 'http:' ? 'ws://' : 'wss://';
          var address = protocol + window.location.host + window.location.pathname + '/ws';
          var socket = new WebSocket(address);
          socket.onmessage = function (msg) {
            if (msg.data == 'reload') window.location.reload();
            else if (msg.data == 'refreshcss') refreshCSS();
          };
          if (sessionStorage && !sessionStorage.getItem('IsThisFirstTime_Log_From_LiveServer')) {
            console.log('Live reload enabled.');
            sessionStorage.setItem('IsThisFirstTime_Log_From_LiveServer', true);
          }
        })();
      }
      else {
        console.error('Upgrade your browser. This Browser is NOT supported WebSocket for Live-Reloading.');
      }
      // ]]>
    </script>-->
</body>

</html>

<?php

$conn = mysqli_connect('localhost','root','','art');



if($_SERVER['REQUEST_METHOD']=="POST")
{
    $uname = $_POST['uname'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];

   

    if(empty($uname) || empty($password) || empty($cpassword)) {
      echo '<script>alert("All fields are required.");</script>';
  } else {
      // Check if password matches confirm password
      if($password !== $cpassword) {
          echo '<script>alert("Password and Confirm Password should match!");</script>';
      } else {
          // Insert user into database
          $sql = "INSERT INTO `user1`(`name`, `password`) VALUES ('$uname','$password')";
          if($conn->query($sql)) {
              echo '<script>alert("Registration successful!");</script>';
              echo '<script>window.location.href = "login.php";</script>';
          } else {
              echo '<script>alert("Error: '.$conn->error.'");</script>';
          }
      }
  }
}

?>