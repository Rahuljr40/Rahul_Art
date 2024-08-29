<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <!-- Include necessary CSS libraries -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Art Is Life</title>
    <link rel="icon" type="image/png" href="logo.png">

</head>
<script>
    function logout() {
        var confirmLogout = confirm("Are you sure you want to log out?");
        if (confirmLogout) {
            // Redirect to logout.php after confirmation
            window.location.href = "logout.php";
        }
    }

    function productbuy1() {
        <?php if (isset($_SESSION['uid'])) { ?>
            alert("Login Done");
            window.location.href = "products.php";
        <?php } else { ?>
            alert("Login is required");
            window.location.href = "login.php";
        <?php } ?>
    }
</script>

<script>
    // AJAX request to handle Buy Now button click
    $(document).ready(function () {
        $('.btn').click(function () {
            var id = $(this).attr('id');
            var uid = $(this).siblings('#uid').val();

            if (uid != '') {
                if (id != '') {
                    $.ajax({
                        url: 'products.php',
                        method: 'post',
                        data: {
                            id: id,
                            uid: uid
                        },
                        success: function (data) {
                            alert(data);
                        }
                    })
                }
            } else {
                // If user is not logged in, display login required message and redirect to login page
                alert('Login is required');
                window.location.href = 'login.php';
            }
        });
    });
</script>


<body>


    <nav class="custom-navbar navbar navbar-expand-md navbar-dark bg-dark" arial-label="Furni navigation bar">
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
                    </li>
                    <?php if (!isset($_SESSION['uid'])) { ?>
                        <li>
                            <a class="nav-link" href="login.php">Login</a>
                        </li>
                    <?php } else { ?>
                        <li>
                            <a class="nav-link" href="login.php" onclick="logout()">Logout</a>
                        </li>
                    <?php } ?>

                    
                    <li>
                        <a class="nav-link cart-link" href="addtocart.php" onclick="addtocart()">
                            <i class="fas fa-shopping-cart cart-icon"></i>
                        </a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>

    <!-- Your existing code -->


    <div>
        <marquee direction="left" scrollamount="30">
            <h2 style="text-align: center; padding-top: 10px;">Welcome to Art Shop - Explore The History</h2>
        </marquee>
    </div>

    <div class="heading" style="text-align: center;">
        <h2>Art Is The Journey Of Free Soul</h2>
    </div>


    <div class="container"
        style="display:flex;flex-direction:row;justify-content:center;align-content:center;flex-wrap: wrap;">

        <div class="card">
            <div class="image">
                <img class="card_logo" src="Img/IMG-20240210-WA0010.jpg" />
            </div>
            <div class="title" style="height:auto;display: flex;flex-wrap: wrap; height: 120px;">
                <h2>Flower With Frame</h2>
            </div>
            <div
                style="margin-bottom:40px;display: flex;flex-direction: row;align-items: center;justify-content: center;">


                <button style="background:#0070ae;color: #fff;" onclick="productbuy1()" class="btn"><a> <span
                            style="color: #fff;"> Buy Now</span> </a></button>
            </div>
        </div>

        <div class="card">
            <div class="image">
                <img class="card_logo" src="Img/IMG-20240210-WA0044.jpg" />
            </div>
            <div class="title" style="height:auto;display: flex;flex-wrap: wrap; height: 120px;">
                <h2>Cute Paper Rose</h2>

            </div>
            <div
                style="margin-bottom:40px;display: flex;flex-direction: row;align-items: center;justify-content: center;">
                <button style="background:#0070ae;color: #fff;" onclick="productbuy1()" class="btn"><a
                        href="products.php"> <span style="color: #fff;"> Buy Now</span></a></button>
            </div>
        </div>

        <div class="card">
            <div class="image">
                <img class="card_logo" src="Img/IMG-20240210-WA0058.jpg" />
            </div>
            <div class="title" style="height:auto;display: flex;flex-wrap: wrap; height: 120px;">
                <h2>The Paper Letters</h2>

            </div>
            <div
                style="margin-bottom:40px;display: flex;flex-direction: row;align-items: center;justify-content: center;">
                <button style="background:#0070ae;color: #fff;" onclick="productbuy1()" class="btn"><a
                        href="products.php"> <span style="color: #fff;"> Buy Now</span></a></button>
            </div>
        </div>

        <div class="card">
            <div class="image">
                <img class="card_logo" src="Img/IMG-20240210-WA0037.jpg" />
            </div>
            <div class="title" style="height:auto;display: flex;flex-wrap: wrap; height: 120px;">
                <h2>Combo of Two</h2>

            </div>
            <div
                style="margin-bottom:40px;display: flex;flex-direction: row;align-items: center;justify-content: center;">
                <button style="background:#0070ae;color: #fff;" onclick="productbuy1()" class="btn"><a
                        href="products.php"> <span style="color: #fff;"> Buy Now</span></a></button>
            </div>
        </div>

        <div class="card">
            <div class="image">
                <img class="card_logo" src="Img/IMG-20240210-WA0006.jpg" />
            </div>
            <div class="title" style="height:auto;display: flex;flex-wrap: wrap; height: 120px;">
                <h2>The Lavenders</h2>

            </div>
            <div
                style="margin-bottom:40px;display: flex;flex-direction: row;align-items: center;justify-content: center;">
                <button style="background:#0070ae;color: #fff;" onclick="productbuy1()" class="btn"><a
                        href="products.php"> <span style="color: #fff;"> Buy Now</span></a></button>
            </div>
        </div>

        <div class="card">
            <div class="image">
                <img class="card_logo" src="Img/IMG-20240210-WA0022.jpg" />
            </div>
            <div class="title" style="height:auto;display: flex;flex-wrap: wrap; height: 120px;">
                <h2>The Super Combo</h2>

            </div>
            <div
                style="margin-bottom:40px;display: flex;flex-direction: row;align-items: center;justify-content: center;">
                <button style="background:#0070ae;color: #fff;" onclick="productbuy1()" class="btn"><a
                        href="products.php"> <span style="color: #fff;"> Buy Now</span></a></button>
            </div>
        </div>

        <div class="card">
            <div class="image">
                <img class="card_logo" src="Img/shopping.webp" />
            </div>
            <div class="title" style="height:auto;display: flex;flex-wrap: wrap; height: 120px;">
                <h2>The Sun</h2>

            </div>
            <div
                style="margin-bottom:40px;display: flex;flex-direction: row;align-items: center;justify-content: center;">
                <button style="background:#0070ae;color: #fff;" onclick="productbuy1()" class="btn"><a
                        href="products.php"> <span style="color: #fff;"> Buy Now</span></a></button>
            </div>
        </div>

        <div class="card">
            <div class="image">
                <img class="card_logo" src="Img/Giraffe.jpg" />
            </div>
            <div class="title" style="height:auto;display: flex;flex-wrap: wrap; height: 120px;">
                <h2>Giraffe</h2>

            </div>
            <div
                style="margin-bottom:40px;display: flex;flex-direction: row;align-items: center;justify-content: center;">
                <button style="background:#0070ae;color: #fff;" onclick="productbuy1()" class="btn"><a
                        href="products.php"> <span style="color: #fff;"> Buy Now</span></a></button>
            </div>
        </div>


        <div class="card">
            <div class="image">
                <img class="card_logo" src="Img/paint5.jpeg" />
            </div>
            <div class="title" style="height:auto;display: flex;flex-wrap: wrap; height: 120px;">
                <h2>The Scream</h2>

            </div>
            <div
                style="margin-bottom:40px;display: flex;flex-direction: row;align-items: center;justify-content: center;">
                <button style="background:#0070ae;color: #fff;" onclick="productbuy1()" class="btn"><a
                        href="products.php"> <span style="color: #fff;"> Buy Now</span></a></button>
            </div>
        </div>



        <div class="card">
            <div class="image">
                <img class="card_logo" src="Img/paint.jpeg" />
            </div>
            <div class="title" style="height:auto;display: flex;flex-wrap: wrap;height: 120px;">
                <h2> Girl with a Pearl Earring</h2>

            </div>
            <div
                style="margin-bottom:40px;display: flex;flex-direction: row;align-items: center;justify-content: center;">
                <button style="background:#0070ae;color: #fff;" onclick="productbuy1()" class="btn"><a
                        href="products.php"> <span style="color: #fff;"> Buy Now</span></a></button>
            </div>
        </div>


        <div class="card">
            <div class="image">

                <img class="card_logo" src="Img/paint2.jpeg" alt="Painting 2">
            </div>
            <div class="title" style="height:auto;display: flex;flex-wrap: wrap;height: 120px;">
                <h2> The Starry Night</h2>
            </div>

            <div
                style="margin-bottom:40px;display: flex;flex-direction: row;align-items: center;justify-content: center;">
                <button style="background:#0070ae;color: #fff;" onclick="productbuy1()" class="btn"><a
                        href="products.php"> <span style="color: #fff;"> Buy Now</span></a></button>
            </div>

        </div>


        <div class="card">
            <div class="image">
                <img class="card_logo" src="Img/paint5.jpeg" />
            </div>
            <div class="title" style="height:auto;display: flex;flex-wrap: wrap; height: 120px;">
                <h2>The Scream</h2>

            </div>
            <div
                style="margin-bottom:40px;display: flex;flex-direction: row;align-items: center;justify-content: center;">
                <button style="background:#0070ae;color: #fff;" onclick="productbuy1()" class="btn"><a
                        href="products.php"> <span style="color: #fff;"> Buy Now</span></a></button>
            </div>
        </div>


        <div class="card">
            <div class="image">
                <img class="card_logo" src="Img/paint4.jpeg" />
            </div>
            <div class="title" style="height:auto;display: flex;flex-wrap: wrap;">
                <h2>The Persistence of Memory</h2>

            </div>
            <div
                style="margin-bottom:40px;display: flex;flex-direction: row;align-items: center;justify-content: center;">
                <button style="background:#0070ae;color: #fff;" onclick="productbuy1()" class="btn"><a
                        href="products.php"> <span style="color: #fff;"> Buy Now</span></a></button>
            </div>
        </div>

        <div class="card">
            <div class="image">
                <img class="card_logo" src="Img/paint3.jpeg" />
            </div>
            <div class="title" style="height:auto;display: flex;flex-wrap: wrap;">
                <h2>The Persistence of Soul</h2>

            </div>
            <div
                style="margin-bottom:40px;display: flex;flex-direction: row;align-items: center;justify-content: center;">
                <button style="background:#0070ae;color: #fff;" onclick="productbuy1()" class="btn"><a
                        href="products.php"> <span style="color: #fff;"> Buy Now</span></a></button>
            </div>
        </div>



    </div>

    <div class="container"
        style="display:flex;flex-direction:row;justify-content:center;align-content:center;flex-wrap: wrap;">

       <?php

        $conn = mysqli_connect('localhost', 'root', '', 'art');

        $sql = 'SELECT * FROM addart1';
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                ?>

                <div class="card">
                    <div class="image">
                        <?php echo '<img class="card_logo"  src="' . $row['img'] . '">'; ?>
                    </div>
                    <div class="title"
                        style="height:auto;display: flex;flex-wrap: wrap; height: 120px; display:flex;flex-direction:row;justify-content:center;align-content:center;flex-wrap: wrap;">
                        <h2 id="name"><?php echo $row['name']; ?></h2>
                        <!--<span id="price"><?php echo $row['price']; ?></span>-->

                    </div>
                    <div
                        style="margin-bottom:40px;display: flex;flex-direction: row;align-items: center;justify-content: center;">
                        <button id="<?php echo $row['id']; ?>" onclick="productbuy1()" style="background:#0070ae;color: #fff;"
                            class="btn">Buy Now
                        </button>
                        <input type="hidden" id="uid" value="<?php echo $id; ?>" />
                    </div>

                </div>

                <?php
            }
        }

        ?> 

    </div>

    <!-- Start Footer Section -->
    <div style="padding-top: 100px;">
        <footer>
            <div class="footer2">
                <div class="services">
                    <div class="heading" style="font-size: 25px; color: #776BCC" ;><u>Services</u></div>
                    <div class="div">Home Delivery</div>
                    <div class="div">Return Policy</div>
                    <div class="div">Insurance Claim</div>
                    <div class="div">Sales Note</div>
                </div>
                <div class="Help" style="margin-left: 200px;">
                    <div class="heading" style="font-size: 25px; color: #776BCC" ;><u>Help</u></div>
                    <div class="div">Get Help</div>
                    <div class="div">Terms&Condition</div>
                    <div class="div">Privacy Policy</div>
                    <div class="div">Customer Help</div>
                </div>
                <div>
                    <u style="font-size: 25px; color:#776BCC">Connect with us at :</u>
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
                <div class="inquiry" style="font-size: 25px;"><u style="color:#776BCC"> For any inquiry contact us at
                        :</u>
                    <h5>
                        <a href="mailto:apanabazar@gmail.com?subject = Feedback&body = Message">artislife@gmail.com</a>
                        <br><a href="adminlogin.php">admin login</a>
                    </h5>
                </div>
            </div>
            <div class="footer3" style="font-size: 20px;">Copyright@<h4>artislife</h4> (1980-2050) </div>
        </footer>
    </div>



    <!-- End Footer Section -->



    <script src="jquery-3.1.1.min.js"></script>
    <script src="bootstrap-4.6.2-dist/bootstrap-4.6.2-dist/js/bootstrap.min.js"></script>
    <script src="bootstrap-4.6.2-dist/bootstrap-4.6.2-dist/js/tiny-slider.js"></script>
    <script src="bootstrap-4.6.2-dist/bootstrap-4.6.2-dist/js/custom.js"></script>
    <script>
        <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>





</body>

</html>