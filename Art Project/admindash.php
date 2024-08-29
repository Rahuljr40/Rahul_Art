<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<style>
    * {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
    }

    body {
        font-family: Arial, sans-serif;
        background: linear-gradient(90deg, #cfe2f3, #a9c9e0, #85add2, #5b8ebb);
    }

    .container7 {
        align-content: first baseline;
        max-width: fit-content;
        margin: 20px auto;
        padding: 20px;
        background-color: #fff;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    h2 {
        text-align: center;
        margin-bottom: 20px;
    }

    .edit-btn {
        background-color: #007bff;
        color: #fff;
        border: none;
        padding: 5px 10px;
        border-radius: 5px;
        cursor: pointer;
    }

    .edit-btn:hover {
        background-color: #0056b3;
    }
</style>

<body>
    <nav class="custom-navbar navbar navbar-expand-md navbar-dark bg-dark" arial-label="Furni navigation bar">
        <div class="container">
            <a class="navbar-brand" href="index.php">Art Gallery<span>.</span></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsFurni"
                aria-controls="navbarsFurni" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarsFurni">
                <ul class="custom-navbar-nav navbar-nav ms-auto mb-2 mb-md-0">
                    <li><a class="nav-link" href="addArt.php">Add Art</a></li>
                    <li>
                        <a class="nav-link" href="index.php" onclick="logout()">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container7">
        <h2>Welcome Admin</h2>
        <div id="userList">
            <div>
                <tr>
                    <th>

                        ***************************************************************************************************************************

                    </th>
                </tr>
            </div>
            <div>
                <h3>User Details</h3>
            </div>
            <?php
            // Database connection
            $conn = mysqli_connect("localhost", "root", "", "art");

            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }

            // Function to sanitize input
            function sanitize($data)
            {
                return htmlspecialchars(stripslashes(trim($data)));
            }

            // Handling form submission for editing user details
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $uid = sanitize($_POST['uid']);
                $username = sanitize($_POST['username']);
                $password = sanitize($_POST['password']);

                // Update user details in the database
                $sql_update_user = "UPDATE user1 SET name='$username', password='$password' WHERE uid=$uid";
                if (mysqli_query($conn, $sql_update_user)) {
                    echo "User details updated successfully.";
                } else {
                    echo "Error updating user details: " . mysqli_error($conn);
                }
            }

            // Querying user table
            $sql = "SELECT * FROM user1";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
                // Outputting data in a table
                echo "<table class='table'>
                        <thead>
                            <tr>
                                <th>User ID</th>
                                <th>Username</th>
                                <th>Password</th>
                               
                            </tr>
                        </thead>
                        <tbody>";
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>
                            <td>" . $row['uid'] . "</td>
                            <td>" . $row['name'] . "</td>
                            <td>" . $row['password'] . "</td>
                          
                          </tr>";
                }
                echo "</tbody></table>";
            } else {
                echo "0 results";
            }

            mysqli_close($conn);
            ?>
        </div>
    </div>

    <div class="container7">
        <h3>Billing Details</h3>
        <div id="userList">
            <?php
            // Database connection
            $conn = mysqli_connect("localhost", "root", "", "art");

            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }

            // Handling form submission for editing billing details
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $billing_id = sanitize($_POST['billing_id']);
                $firstname = sanitize($_POST['firstname']);
                $lastname = sanitize($_POST['lastname']);
                $email = sanitize($_POST['email']);

                // Update billing details in the database
                $sql_update_billing = "UPDATE billing SET first_name='$firstname', last_name='$lastname', email='$email' WHERE id=$billing_id";
                if (mysqli_query($conn, $sql_update_billing)) {
                    echo "Billing details updated successfully.";
                } else {
                    echo "Error updating billing details: " . mysqli_error($conn);
                }
            }

            // Querying billing table
            $sql_billing = "SELECT * FROM billing1";
            $result_billing = mysqli_query($conn, $sql_billing);

            if (mysqli_num_rows($result_billing) > 0) {
                // Outputting billing data in a table
                echo "<table class='table'>
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Address</th>
                                <th>City</th>
                                <th>State</th>
                                <th>Zip</th>
                                <th>Created At</th>
                               
                            </tr>
                        </thead>
                        <tbody>";
                while ($row_billing = mysqli_fetch_assoc($result_billing)) {
                    echo "<tr>
                            <td>" . $row_billing['id'] . "</td>
                            <td>" . $row_billing['first_name'] . "</td>
                            <td>" . $row_billing['last_name'] . "</td>
                            <td>" . $row_billing['email'] . "</td>
                            <td>" . $row_billing['phone'] . "</td>
                            <td>" . $row_billing['address'] . "</td>
                            <td>" . $row_billing['city'] . "</td>
                            <td>" . $row_billing['state'] . "</td>
                            <td>" . $row_billing['zip'] . "</td>
                            <td>" . $row_billing['created_at'] . "</td>
                            
                          </tr>";
                }
                echo "</tbody></table>";
            } else {
                echo "<p>No billing records found.</p>";
            }

            mysqli_close($conn);
            ?>
        </div>
    </div>





    <div class="container7">
        <h2></h2>
        <div id="userList">
            <?php
            // Database connection
            $conn = mysqli_connect("localhost", "root", "", "art");

            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }

            // Querying upi_details table
            $sql_upi = "SELECT * FROM upi_detail1";
            $result_upi = mysqli_query($conn, $sql_upi);

            if (mysqli_num_rows($result_upi) > 0) {
                // Outputting data in a table
                echo "<h2>UPI_DETAILS</h2>";
                echo "<table class='table'>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Address</th>
                <th>City</th>
                <th>State</th>
                <th>Pincode</th>
                <th>Name on Card</th>
                <th>Card Number</th>
                <th>Expiration Month</th>
                <th>Expiration Year</th>
                <th>CVV</th>
                <th>Timestamp</th>
            </tr>
        </thead>
        <tbody>";
                while ($row_upi = mysqli_fetch_assoc($result_upi)) {
                    echo "<tr>
                <td>" . $row_upi['id'] . "</td>
                <td>" . $row_upi['name'] . "</td>
                <td>" . $row_upi['email'] . "</td>
                <td>" . $row_upi['address'] . "</td>
                <td>" . $row_upi['city'] . "</td>
                <td>" . $row_upi['state'] . "</td>
                <td>" . $row_upi['pincode'] . "</td>
                <td>" . $row_upi['nameoncard'] . "</td>
                <td>" . $row_upi['card_num'] . "</td>
                <td>" . $row_upi['exp_month'] . "</td>
                <td>" . $row_upi['exp_year'] . "</td>
                <td>" . $row_upi['cvv'] . "</td>
                <td>" . $row_upi['timestamp'] . "</td>
            </tr>";
                }
                echo "</tbody>
    </table>";
            } else {
                echo "<p>No UPIDETAILS found.</p>";
            }

            mysqli_close($conn);
            ?>
        </div>
    </div>


    <div class="container7">
        <h2></h2>
        <div id="userList">
            <?php
            // Database connection
            $conn = mysqli_connect("localhost", "root", "", "art");

            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }

            $sql_feedback = "SELECT * FROM feedback1";
            $result_feedback = mysqli_query($conn, $sql_feedback);

            if (mysqli_num_rows($result_feedback) > 0) {
                // Outputting feedback data in a table
                echo "<h3>Feedback Data</h3>";
                echo "<table class='table'>
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Subject</th>
                                <th>Message</th>
                            </tr>
                        </thead>
                        <tbody>";
                while ($row = mysqli_fetch_assoc($result_feedback)) {
                    echo "<tr>
                            <td>" . $row['id'] . "</td>
                            <td>" . $row['name'] . "</td>
                            <td>" . $row['email'] . "</td>
                            <td>" . $row['subject'] . "</td>
                            <td>" . $row['message'] . "</td>
                          </tr>";
                }
                echo "</tbody></table>";
            } else {
                echo "<p>No feedback data found</p>";
            }

            mysqli_close($conn);
            ?>
        </div>
    </div>

    <div id="editUserModal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <h2>Edit User</h2>
            <form id="editUserForm" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                <!-- Form fields for editing user details -->
                <input type="hidden" name="uid" id="uid">
                <input type="text" name="username" id="username">
                <input type="password" name="password" id="password">
                <input type="submit" value="Save Changes">
            </form>
        </div>
    </div>

    <div id="editBillingModal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <h2>Edit Billing Details</h2>
            <form id="editBillingForm" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                <!-- Form fields for editing billing details -->
                <input type="hidden" name="billing_id" id="billing_id">
                <input type="text" name="firstname" id="firstname">
                <input type="text" name="lastname" id="lastname">   
                <input type="email" name="email" id="email">
                <input type="submit" value="Save Changes">
            </form>
        </div>
    </div>



    <script>
        // Function to open modal for editing user details
        function editUser(uid) {
            // Fetch user details based on UID and populate form fields
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {
                    var userData = JSON.parse(this.responseText);
                    document.getElementById('uid').value = userData.uid;
                    document.getElementById('name').value = userData.name;
                    document.getElementById('password').value = userData.password;
                    document.getElementById('editUserModal').style.display = 'block';
                }
            };
            xmlhttp.open("GET", "fetch_user.php?uid=" + uid, true);
            xmlhttp.send();
        }

        // Function to open modal for editing billing details
        function editBilling(billingId) {
            // Fetch billing details based on billingId and populate form fields
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {
                    var billingData = JSON.parse(this.responseText);
                    document.getElementById('billing_id').value = billingData.id;
                    document.getElementById('firstname').value = billingData.first_name;
                    document.getElementById('lastname').value = billingData.last_name;
                    document.getElementById('email').value = billingData.email;
                    document.getElementById('editBillingModal').style.display = 'block';
                }
            };
            xmlhttp.open("GET", "fetch_billing.php?id=" + billingId, true);
            xmlhttp.send();
        }

        // Close modal when clicking on 'x' button
        var closeButtons = document.getElementsByClassName('close');
        for (var i = 0; i < closeButtons.length; i++) {
            closeButtons[i].addEventListener('click', function () {
                this.parentElement.parentElement.style.display = 'none';
            });
        }

        
    function logout() {
        // Display confirmation message
        var confirmLogout = confirm("Are you sure you want to log out?");
        if (confirmLogout) {
            // Redirect to logout.php after confirmation
            window.location.href = "logout.php";
        }
    }



    </script>

</body>

</html>