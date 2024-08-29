<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="bootstrap-4.6.2-dist/bootstrap-4.6.2-dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="css/tiny-slider.css" rel="stylesheet">

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Contact Us - Your Product Store</title>
    <link rel="website icon" type="png" href="logo.png">
    <style>
        body {
            background: linear-gradient(90deg, #C7C5F4, #776BCC);
        }

        .container2 {

            max-width: 800px;
            margin: auto;
            padding: 20px;
            padding-top: 50px;
            background-color: #ffffff;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        .contact {
            padding: 130px 0;
        }

        .contact .heading h2 {
            font-size: 30px;
            font-weight: 700;
            margin: 0;
            padding: 0;

        }

        .contact .heading h2 span {
            color: #7875B5;
        }

        .contact .heading p {
            font-size: 15px;
            font-weight: 400;
            line-height: 1.7;
            color: #999999;
            margin: 20px 0 60px;
            padding: 0;
        }

        .contact .form-control {
            padding: 25px;
            font-size: 13px;
            margin-bottom: 10px;
            background: #f9f9f9;
            border: 0;
            border-radius: 10px;
        }

        .contact button.btn {
            padding: 10px;
            border-radius: 10px;
            font-size: 15px;
            background: #7875B5;
            color: #ffffff;
        }



        .contact .title h3 {
            font-size: 18px;
            font-weight: 600;
        }

        .contact .title p {
            font-size: 14px;
            font-weight: 400;
            color: #999;
            line-height: 1.6;
            margin: 0 0 40px;
        }

        .contact .content .info {
            margin-top: 30px;
        }

        .contact .content .info i {
            font-size: 30px;
            padding: 0;
            margin: 0;
            color: #02434b;
            margin-right: 20px;
            text-align: center;
            width: 20px;
        }

        .contact .content .info h4 {
            font-size: 13px;
            line-height: 1.4;
        }

        .contact .content .info h4 span {
            font-size: 13px;
            font-weight: 300;
            color: #999999;
        }


        .login__submit3 {
            align-items: center;
            padding: 10px;
            padding-left: 200px;
            padding-right: 150px;
            border-radius: 10px;
            font-size: 15px;
            background: #7875B5;

            background: #fff;
            font-size: 14px;
            margin-top: 30px;
            text-align: center;
            padding: 16px 20px;
            border-radius: 26px;
            border: 1px solid #D4D3E8;
            text-transform: uppercase;
            text-align: center;
            font-weight: 700;
            display: flex;

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
    </style>

    <script>
        function thnk() {
            alert("Thank you !");
        }</script>

</head>

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

                    <li>
                        <a class="nav-link cart-link" href="addtocart.php" onclick="addtocart()">
                            <i class="fas fa-shopping-cart cart-icon"></i> <!-- Font Awesome cart icon -->
                        </a>
                    </li>


                </ul>
            </div>
    </nav>



    <!-- <div class="container2">
        <h1>Contact Us</h1>


        
        <form action="" method="post">
            <label for="name">Your Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email Address:</label>
            <input type="email" id="email" name="email" required>

            <label for="message">Message:</label>
            <textarea id="message" name="message" required></textarea>

            <div style="display: flex;flex-direction: row;justify-content: center;align-items: center;margin-bottom: 50px;">
            <button class=" productbuy" type="submit">Submit</button>
        </div>
        </form>
    </div>-->

    <section class="contact" id="contact">
        <div class="container2">
            <div class="heading text-center">
                <h2>Contact
                    <span> Us </span>
                </h2>
                <p>We value your feedback and inquiries.
                    <br> Please do not hesitate to contact us with any queries or worries.
                </p>
            </div>
            <div class="row">
                <div class="col-md-5">
                    <div class="title">
                        <h3>Contact detail</h3>
                        <p>Please contact us with any queries or questions you may have </p>
                    </div>
                    <div class="content">
                        <!-- Info-1 -->
                        <div class="info">
                            <i class="fas fa-mobile-alt"></i>
                            <h4 class="d-inline-block">PHONE :
                                <br>
                                <span>+12457836913 , +12457836913</span>
                            </h4>
                        </div>
                        <!-- Info-2 -->
                        <div class="info">
                            <i class="far fa-envelope"></i>
                            <h4 class="d-inline-block">EMAIL :
                                <br>
                                <span>artislife@gmail.com</span>
                            </h4>
                        </div>
                        <!-- Info-3 -->
                        <div class="info">
                            <i class="fas fa-map-marker-alt"></i>
                            <h4 class="d-inline-block">ADDRESS :<br>
                                <span>123 Main Street, Mumbai, India</span>
                            </h4>
                        </div>
                    </div>
                </div>

                <div class="col-md-7">

                    <form method="post">
                        <div class="row">
                            <div class="col-sm-6">
                                <input type="text" class="form-control" placeholder="Name" name="name">
                            </div>
                            <div class="col-sm-6">
                                <input type="email" class="form-control" placeholder="Email" name="email">
                            </div>
                            <div class="col-sm-12">
                                <input type="text" class="form-control" placeholder="Subject" name="subject">
                            </div>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" rows="5" id="comment" placeholder="Message"
                                name="message"></textarea>
                        </div>

                        <button style="background:#0070ae;color: #fff;" onclick="thnk()"
                            class="button login__submit3"><a href="index.html"> <span style="color: #fff;"> Send
                                    Now!</span></a></button>

                        <!--<a  class="button login__submit3"  href="index.html"> <span class="button__text"> Send Now! </span>
                       
                       </a>-->

                    </form>
                </div>
            </div>
        </div>
    </section>

    <div style="padding-top: 100px;">
        <footer>
            <div class="footer2">
                <div class="services">
                    <div class="heading" style="font-size: 25px; color:#7875B5;"><u>Services</u></div>
                    <div class="div">Home Delivery</div>
                    <div class="div">Return Policy</div>
                    <div class="div">Insurance Claim</div>
                    <div class="div">Sales Note</div>
                </div>
                <div class="Help" style="margin-left: 200px;">
                    <div class="heading" style="font-size: 25px; color: #7875B5;"><u>Help</u></div>
                    <div class="div">Get Help</div>
                    <div class="div">Terms&Condition</div>
                    <div class="div">Privacy Policy</div>
                    <div class="div">Customer Help</div>
                </div>
                <div>
                    <u style="font-size: 25px; color:#7875B5">Connect with us at :</u>
                    <div class="social-media" style="text-align: center;">
                        <div class="div"><a href="https://www.instagram.com/nike/?hl=en" target="_blank"
                                style="color: inherit; cursor: default; text-decoration: none;">Instagram</a></div>
                        <div class="div"><a href="https://www.facebook.com/nike/" target="_blank"
                                style="color: inherit; cursor: default; text-decoration: none;">Facebook</a></div>
                        <div class="div"><a href="https://www.youtube.com/user/nike" target="_blank"
                                style="color: inherit; cursor: default; text-decoration: none;">Youtube</a></div>
                        <div class="div"><a href="https://www.linkedin.com/company/nike/" target="_blank"
                                style="color: inherit; cursor: default; text-decoration: none;">Linked In</a></div>

                    </div>
                </div>
                <div class="inquiry" style="font-size: 25px;"><u style="color:#776BCC"> For any inquiry contact us at :
                        </style></u>
                    <h5>
                        <a href="mailto:apanabazar@gmail.com?subject = Feedback&body = Message">artislife@gmail.com</a>
                    </h5>
                </div>
            </div>
            <div class="footer3" style="font-size: 20px;">Copyright@<h4>artislife</h4> (1980-2050) </div>
        </footer>
    </div>

    <script>
        function productbuy() {
            alert("Your message has been successfully sent, we will contact you soon!");
        }
    </script>
</body>

</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Connect to the database
    $conn = mysqli_connect('localhost', 'root', '', 'art');

    // Check the connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $subject = mysqli_real_escape_string($conn, $_POST['subject']);
    $message = mysqli_real_escape_string($conn, $_POST['message']);

    // Construct SQL query to insert data into the database
    $sql = "INSERT INTO feedback1 (name, email, subject, message) VALUES ('$name', '$email', '$subject', '$message')";

    // Execute SQL query
    if (mysqli_query($conn, $sql)) {
        // Redirect to a thank you page or display a success message
        header("Location: index.php"); // Redirect to the home page after successful submission
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    // Close database connection
    mysqli_close($conn);
}
?>
