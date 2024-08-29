<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
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
    max-width: 800px;
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

.user {
    border: 1px solid #ccc;
    border-radius: 5px;
    padding: 10px;
    margin-bottom: 10px;
}

.user p {
    margin-bottom: 5px;
}

.container5 {
    background-color: #fff;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    padding: 20px;
    width: 50%; /* Adjust width as needed */
    max-width: 600px; /* Set maximum width */
    justify-content: center; 
    align-items: center; 
    margin: 20px auto; 
   
}

h2 {
    text-align: center;
    margin-bottom: 20px;
}

table {
    width: 100%;
}

table tr {
    margin-bottom: 15px;
}

table td {
    padding: 5px;
}

input[type="text"],
input[type="number"],
input[type="file"],
input[type="submit"] {
    padding: 8px;
    width: 100%;
    border: 1px solid #ccc;
    border-radius: 5px;
}

input[type="submit"] {
    background-color: #007bff;
    color: #fff;
    border: none;
    cursor: pointer;
    transition: background-color 0.3s;
}

input[type="submit"]:hover {
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
                    <li><a class="nav-link" href="logout.php">Logout</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container7">
        <h2>Welcome Admin</h2>
        <div id="userList"></div>
    </div>

    <div class="container5">
        <h2>ADDING PRODUCTS</h2>
        <form action="" method="post" enctype="multipart/form-data">
            <table>
                <tr>
                    <td>Name  :</td>
                    <td><input type="text" name="name" id="name"></td>
                </tr>
                <tr>
                    <td>Price  :</td>
                    <td> <input type="number" name="price" id="price"></td>
                </tr>
                <tr>
                    <td>Image  :</td>
                    <td><input type="file" name="img" id="img"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" name="submit" id="submit"></td>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>
<?php

$conn = mysqli_connect('localhost','root','','art');
$up = 'uploads/';

if($_SERVER['REQUEST_METHOD']=="POST")
{
    $name = $_POST['name'];
    $price = $_POST['price'];

    $ipath = $up . basename($_FILES['img']['name']);

    if(move_uploaded_file($_FILES['img']['tmp_name'],$ipath))
    {
        $sql = "INSERT INTO `addart1`(`name`, `price`, `img`) VALUES ('$name','$price','$ipath')";

        if($conn->query($sql)){
            echo '<script>alert("Inserted");</script>';
        }
    }
}

?>