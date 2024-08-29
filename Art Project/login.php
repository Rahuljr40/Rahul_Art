



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
    <title>Login</title>
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

    .container1{
        display: flex;
        align-items: center;
        justify-content: center;
        min-height: 100vh;
    }

    .screen {
        background: linear-gradient(90deg, #5D54A4, #7C78B8);
        position: relative;
        height: 600px;
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
        
        padding-top: 20px;
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
        justify-content: space-between;
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
    </nav>
    <div class="container1">
        <div class="screen">
            <div class="screen__content">
                <form class="login" method="post">
                    <div class="login__field">
                        <i class="login__icon fas fa-user"></i>
                        <input type="text"  name="name" class="login__input" placeholder="User name / Email">
                    </div>
                    <div class="login__field">
                        <i class="login__icon fas fa-lock"></i>
                        <input type="password"  name="pass" class="login__input" placeholder="Password">
                        
                    </div>

                  <!--  <a class="button login__submit" href="index.html">-->

                  <input type="submit" value="Login" class="button login__submit1" name="submit" id="submit">
                       <!-- <button class="button login__submit1" onclick="func2()"> Login <i class="button__icon fas fa-chevron-right"></i></button>
                        <span class="button__text">Log In Now</span>-->

                        
                    

                    <div class="links"> <a href="https://www.google.com/gmail/about/" target="_blank">Forgot Password</a>

                        <a href="register.php">Register</a>

                    </div>
                </form>
                <div>

                </div>
                <div></div>
                <div class="social-login">
                    <h3>log in via</h3>
                    <div class="social-icons">
                        <a href="https://www.instagram.com/" target="_blank" class="social-login__icon fab fa-instagram"></a>
                        <a href="https://www.facebook.com/" target="_blank" class="social-login__icon fab fa-facebook"></a>
                        <a href="https://www.google.com/gmail/about/" target="_blank"
                            class="social-login__icon fab fa-solid fa-google "></a>

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






   <script>
   /*     function func2() {
          var username = document.querySelector(".login__input[type='text']").value;
          var password = document.querySelector(".login__input[type='password']").value;
      
          if (username.trim() === '') {
            alert("Please fill in the username/email field.");
            return false;
          }
      
          if (password.trim() === '') {
            alert("Please fill in the password field.");
            return false;
          }
        }
          // Check if the user is registered and the login details match
        /*  if (!isUserRegistered(username, password)) {
            alert("Invalid username/email or password. Please register first.");
            return false;
          }
      
          // If all fields are filled and login details are valid, return true to allow login
          return true;
        
      
        function isUserRegistered(username, password) {
          // Here you would typically validate the login details against a database or some other source
          // For demonstration purposes, let's assume a hardcoded list of registered users
          var registeredUsers = [
            { username: "user1", password: "password1" },
            { username: "user2", password: "password2" },
            // Add more registered users as needed
          ];
      
          // Check if the provided username/password combination matches any registered user
          for (var i = 0; i < registeredUsers.length; i++) {
            if (registeredUsers[i].username === username && registeredUsers[i].password === password) {
              return true;
            }
          }
      
          return false;
        } 
      
        function func1() {
          if (validateLogin()) {
            // Proceed with login 

            alert("Login Successful!");
            
            window.location.href = "index.html"; 
            return false;
          }*/
        
      </script>
      
</body>

</html>

<?php

$conn = mysqli_connect('localhost','root','','art');

if($_SERVER['REQUEST_METHOD']=="POST")
{
    $name = $_POST['name'];
    $pass = $_POST['pass'];

    echo $name;
    echo $pass;

    if (empty($name) || empty($pass)) {
        echo "Please fill in all fields.";
    }
    else {
        $sql = "SELECT * FROM `user1` WHERE `name` = '$name'";

        $result = $conn->query($sql);

        if($result->num_rows == 0) {
            echo '<script>alert("User not registered. Please register first.");';
            echo 'window.location.href = "register.php";</script>';
            exit();
        }

        $sql = "SELECT * FROM `user1` WHERE `name` = '$name' AND `password` = '$pass'";

        $result = $conn->query($sql);

        if($result->num_rows>0){
            $sql = "SELECT `uid` FROM `user1` WHERE `name` = '$name'";
            $result=$conn->query($sql);
            $id = $result->fetch_array();
            $id = $id['uid'];

            session_start();
            $_SESSION["id"] = $id;
            echo '<script>alert("Login Successful!");</script>'; 
            echo '<script>window.location.href = "products.php?id='. $id .'";</script>';
            exit();
        }else{
            echo '<script>alert("Wrong Username or Password");</script>';
        }
    }
}
?>
