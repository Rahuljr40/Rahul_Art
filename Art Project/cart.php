<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Product details</title>
    <link rel="website icon" type="png" href="logo.png">
    <link rel="website icon" type="png" href="logo.png">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
   
    

    <script>
        function productbuy() {
    alert("Fill the detail");
    window.location.assign("billing.html")

        }

  </script> 

<?php
  session_start();
  $id;
    if (isset($_SESSION['id'])) {
        $id = $_SESSION['id'];
    } else {
        echo "You are not logged in.";
    }

  ?>


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
                    <li><a class="nav-link" href="login.php">Login </a></li>


                </ul>
            </div>
    </nav>
    <?php

                    $conn = mysqli_connect('localhost','root','','art');

                    $sql = 'select a.name , price , qty , img from arttb a , ordertb o , user u where o.uid = u.uid and o.aid= a.aid and u.uid = ' .$id . ';';
                    $result = $conn->query($sql);

                    if($result->num_rows>0){
                        while($row = $result->fetch_assoc())
                        {
        ?>
    <div style="display: flex;flex-direction:row;margin-top:100px">
        <div style="width:40%;display:flex;align-items:center;justify-content:center;">
           
        <?php echo '<img class="card_logo"  src="' . $row['img'] .'">';?>
        </div>
        <div style="width:60%">
            <h2 style=" margin-top:50px;margin-bottom:20px ">
                <?php echo $row['name'];?>
            </h2>

            <div style="margin-top:10px;display:flex;flex-direction:row;align-content:center"><p style="font-size:20px;font-weight:bold">Price  -  </p> <p style="font-size:20px;margin-left:10px"><?php echo $row['price'];?></p></div>
         
            <p><?php echo $row['qty'];?></p>
           
        </div>
    </div>

    <?php
    $total = $row['price'] * $row["qty"];
                        }
                    }

                ?>


    <div style="padding-top: 100px;">
        <footer>
            <div class="footer2">
                <div class="services">
                    <div class="heading" style="font-size: 25px; color: #776BCC";><u>Services</u></div>
                    <div class="div">Home Delivery</div>
                    <div class="div">Return Policy</div>
                    <div class="div">Insurance Claim</div>
                    <div class="div">Sales Note</div>
                </div>
                <div class="Help" style="margin-left: 200px;">
                    <div class="heading" style="font-size: 25px; color: #776BCC";><u>Help</u></div>
                    <div class="div">Get Help</div>
                    <div class="div">Terms&Condition</div>
                    <div class="div">Privacy Policy</div>
                    <div class="div">Customer Help</div>
                </div>
                <div>
                    <u style="font-size: 25px; color:#776BCC">Connect with us at :</u>
                    <div class="social-media" style="text-align: center;">
                        <div class="div"><a href="https://www.instagram.com/nike/?hl=en" target="_blank" style="color: inherit; cursor: default; text-decoration: none;">Instagram</a></div>
                        <div class="div"><a href="https://www.facebook.com/nike/" target="_blank" style="color: inherit; cursor: default; text-decoration: none;">Facebook</a></div>
                        <div class="div"><a href="https://www.youtube.com/user/nike" target="_blank" style="color: inherit; cursor: default; text-decoration: none;">Youtube</a></div>
                        <div class="div"><a href="https://www.linkedin.com/company/nike/" target="_blank" style="color: inherit; cursor: default; text-decoration: none;">Linked In</a></div>
                     
                    </div>
                </div>
                <div class="inquiry" style="font-size: 25px;"><u style="color:#776BCC"> For any inquiry contact us at :</style></u>
                    <h5>
                        <a href="mailto:apanabazar@gmail.com?subject = Feedback&body = Message">artislife@gmail.com</a>
                    </h5>
                </div>
            </div>
            <div class="footer3" style="font-size: 20px;">Copyright@<h4>artislife</h4> (1980-2050) </div>
        </footer>
    </div>

</body>
</html>
