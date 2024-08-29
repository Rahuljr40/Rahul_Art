<?php
session_start(); // Start the session if not already started

$id;
if (isset($_SESSION['id'])) {
    $id = $_SESSION['id'];
    $total = 0;
} else {
    // Handle when the user is not logged in
}

// Database connection
$conn = mysqli_connect('localhost', 'root', '', 'art');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Extract billing details from the form
    $firstName = $_POST['c_fname'];
    $lastName = $_POST['c_lname'];
    $email = $_POST['c_email'];
    $phone = $_POST['c_phone'];
    $address = $_POST['c_address'];
    $city = $_POST['c_city'];
    $state = $_POST['c_state'];
    $zip = $_POST['c_zip'];

    // SQL to insert billing details into the database
    $sql = "INSERT INTO billing1 (first_name, last_name, email, phone, address, city, state, zip) 
            VALUES ('$firstName', '$lastName', '$email', '$phone', '$address', '$city', '$state', '$zip')";

    if ($conn->query($sql) === TRUE) {
        // Redirect to thank you page after successful insertion
        header("Location: thankyou.html");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close the database connection
$conn->close();
?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="" />
    <meta name="keywords" content="bootstrap, bootstrap4" />
    <link rel="stylesheet" href="css/style.css">

    <link href="bootstrap-4.6.2-dist/bootstrap-4.6.2-dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Art Is Life</title>
    <link rel="website icon" type="png" href="logo.png">

    <?php

    $id;
    if (isset($_SESSION['id'])) {
        $id = $_SESSION['id'];
        $total = 0;
    } else {

    }

    ?>


</head>

<script>
    <script>
    // Function to add item to order summary
        function addItemToOrder(itemName, itemPrice) {
        var orderSummary = document.getElementById("orderSummary");
        var newRow = document.createElement("div");
        newRow.className = "row mb-2";
        newRow.innerHTML = `
        <div class="col-md-8">${itemName}</div>
        <div class="col-md-4 text-right">₹${itemPrice}</div>
        `;
        orderSummary.appendChild(newRow);
    }

    // Add event listeners to add items to order summary
    document.querySelectorAll(".add-to-order").forEach(item => {
        item.addEventListener("click", function() {
            var itemName = this.dataset.itemName;
            var itemPrice = this.dataset.itemPrice;
            addItemToOrder(itemName, itemPrice);
        });
    });
</script>

</script>

<style>
    .hero {
        background: #45687d;
        padding: calc(4rem - 30px) 0 0rem 0;
    }

    @media (min-width: 768px) {
        .hero {
            padding: calc(4rem - 30px) 0 4rem 0;
        }
    }

    @media (min-width: 992px) {
        .hero {
            padding: calc(8rem - 30px) 0 8rem 0;
        }
    }

    .hero .intro-excerpt {
        position: relative;
        z-index: 4;
    }

    @media (min-width: 992px) {
        .hero .intro-excerpt {
            max-width: 450px;
        }
    }

    .hero h1 {
        font-weight: 700;
        color: #ffffff;
        margin-bottom: 30px;
    }

    @media (min-width: 1400px) {
        .hero h1 {
            font-size: 54px;
        }
    }

    .hero p {
        color: rgba(255, 255, 255, 0.5);
        margin-bottom: 30px;
    }


    .btn {
        font-weight: 600;
        padding: 12px 30px;
        border-radius: 30px;
        color: #ffffff;
        background: #2f2f2f;
        border-color: #2f2f2f;
    }

    .btn:hover {
        color: #ffffff;
        background: #222222;
        border-color: #222222;
    }

    .btn:active,
    .btn:focus {
        outline: none !important;
        -webkit-box-shadow: none;
        box-shadow: none;
    }

    .btn.btn-primary {
        background: #3b5d50;
        border-color: #3b5d50;
    }

    .btn.btn-primary:hover {
        background: #314d43;
        border-color: #314d43;
    }

    .btn.btn-secondary {
        color: #2f2f2f;
        background: #f9bf29;
        border-color: #f9bf29;
    }

    .btn.btn-secondary:hover {
        background: #f8b810;
        border-color: #f8b810;
    }

    .btn.btn-white-outline {
        background: transparent;
        border-width: 2px;
        border-color: rgba(255, 255, 255, 0.3);
    }

    .btn.btn-white-outline:hover {
        border-color: white;
        color: #ffffff;
    }
</style>

<body>
    <!-- <header>
        <h1>World's Most Famous Paintings</h1>
    </header> -->

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

                        <a class="nav-link" href="contactus.php ">Contact US </a>
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
    <!-- Start Hero Section -->
    <div class="hero">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-5">
                    <div class="intro-excerpt">
                        <h1></h1>
                    </div>
                </div>
                <div class="col-lg-7">

                </div>
            </div>
        </div>
    </div>
    <!-- End Hero Section -->

    <div class="untree_co-section">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md-12">

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 mb-5 mb-md-0">
                <h2 class="h3 mb-3 text-black">Billing Details</h2>
                <div class="p-3 p-lg-5 border bg-white">
                    <form id="billingForm" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                        <div class="form-group">
                            <label for="c_fname" class="text-black">First Name <span
                                    class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="c_fname" name="c_fname"
                                placeholder=" first name">
                        </div>

                        <div class="form-group">
                            <label for="c_lname" class="text-black">Last Name <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="c_lname" name="c_lname"
                                placeholder=" last name">
                        </div>

                        <div class="form-group">
                            <label for="c_email" class="text-black">Email <span class="text-danger">*</span></label>
                            <input type="email" class="form-control" id="c_email" name="c_email"
                                placeholder="travisscott@gmail.com">
                        </div>

                        <div class="form-group">
                            <label for="c_phone" class="text-black">Phone <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="c_phone" name="c_phone"
                                placeholder="7226855561">
                        </div>

                        <div class="form-group">
                            <label for="c_address" class="text-black">Address <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="c_address" name="c_address"
                                placeholder=" address">
                        </div>

                        <div class="form-group">
                            <label for="c_city" class="text-black">City <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="c_city" name="c_city" placeholder="Mumbai">
                        </div>

                        <div class="form-group">
                            <label for="c_state" class="text-black">State <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="c_state" name="c_state"
                                placeholder=" Maharastra">
                        </div>

                        <div class="form-group">
                            <label for="c_zip" class="text-black">Zip <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="c_zip" name="c_zip" placeholder="385 258">
                        </div>

                        <div class="form-group">
                            <label for="c_order_notes" class="text-black">Order Notes</label>
                            <textarea name="c_order_notes" id="c_order_notes" cols="30" rows="5" class="form-control"
                                placeholder="Write any additional notes here..."></textarea>
                        </div>

                </div>
            </div>
            <div class="col-md-6">





                <div class="row mb-5">
                    <div class="col-md-12">
                    <div class="p-3 p-lg-5 border bg-white">
                    <h1>Order Invoice</h1>
<div id="invoice">

    <table class="table site-block-order-table mb-5">

        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Price</th>
            </tr>
        </thead>
        <tbody>
        <?php
// Retrieve the message variable from the URL
if (isset($_GET['arg1'])) {
    $arg1 = urldecode($_GET['arg1']);

    // Explode the message into an array based on the newline character
    $lines = explode("\n", $arg1);

    // Initialize total price variable
    $totalPrice = 0;

    // Loop through the array and display each line as a separate row in the table
    foreach ($lines as $line) {
        // Split each line into ID, Name, and Price
        $parts = explode(" - ₹ ", $line);
        // Extracting ID, Name, and Price
        $id = strtok($parts[0], '.');
        $name = trim(strtok('.'));
        
        // Check if $parts has at least two elements before accessing $parts[1]
        if (isset($parts[1])) {
            $price = trim($parts[1]);
            // Add price to total price
            $totalPrice += $price;

            // Display each part in a table row
            echo "<tr>";
            echo "<td>$id</td>";
            echo "<td>$name</td>";
            echo "<td>₹ $price</td>";
            echo "</tr>";
        } else {
            // Display a message or handle the error as appropriate
            echo "<tr><td colspan='3'></td></tr>";
        }
    }

    // Display total price after displaying all products
    echo "<tr>";
    echo "<td colspan='2'><strong>Total:</strong></td>";
    echo "<td><strong>₹ $totalPrice</strong></td>";
    echo "</tr>";
} else {
    // If arg1 is not set, display a message
    echo "<tr><td colspan='3'>No message received</td></tr>";
}
?>

        </tbody>
    </table>
</div>
</div>

                    </div>
                </div>

                <div class="border p-3 mb-3">
                    <h3 class="h6 mb-0"><a class="d-block" data-bs-toggle="collapse" href="upi.php">UPI</a>
                    </h3>

                    <div class="collapse" id="collapsebank">
                        <div class="py-2">

                        </div>
                    </div>
                </div>

                <div>


                    <div class="collapse" id="collapsecheque">
                        <div class="py-2">

                        </div>
                    </div>
                </div>

                <div class="border p-3 mb-5">

                    <input type="checkbox"> Cash On Delivery


                    <div class="collapse">
                        <div class="py-2">

                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <button class="btn btn-black btn-lg py-3 btn-block" id="place_order_button">Place
                        Order</button>
                </div>

            </div>
        </div>
    </div>

    </div>
    </div>
    </form>
    </div>
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
                    <div class="heading" style="font-size: 25px; color: #776BCC" ;"><u>Help</u></div>
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
                    </h5>
                </div>
            </div>
            <div class="footer3" style="font-size: 20px;">Copyright@<h4>artislife</h4> (1980-2050) </div>
        </footer>
    </div>



    <!-- End Footer Section -->


    <script>
        document.addEventListener("DOMContentLoaded", function () {
            // Function to check if all billing details are filled
            function checkBillingDetails() {
                var firstName = document.getElementById("c_fname").value;
                var lastName = document.getElementById("c_lname").value;
                var email = document.getElementById("c_email").value;
                var phone = document.getElementById("c_phone").value;
                var address = document.getElementById("c_address").value;
                var city = document.getElementById("c_city").value;
                var state = document.getElementById("c_state").value;
                var zip = document.getElementById("c_zip").value;

                // Check if any of the fields are empty
                if (firstName.trim() === "" || lastName.trim() === "" || email.trim() === "" ||
                    phone.trim() === "" || address.trim() === "" || city.trim() === "" ||
                    state.trim() === "" || zip.trim() === "") {
                    alert("Please fill in all billing details before placing the order.");
                    return false;
                }
                return true;
            }

        // Function to handle place order button click
        function placeOrder() {
            // Check if billing details are filled
            if (checkBillingDetails()) {
            // Submit the form
            document.getElementById("billingForm").submit();
            }
        }

        // Add event listener to place order button
        document.getElementById("place_order_button").addEventListener("click", function (event) {
            event.preventDefault(); // Prevent default form submission
        placeOrder(); // Call place order function
        });
    });
    </script>

</body>

</html>