

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <script src="https://kit.fontawesome.com/92d70a2fd8.js" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Art Is Life</title>
    <link rel="website icon" type="png" href="logo.png">




</head>
<style>
    * {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
        font-family: Raleway, sans-serif;
        box-sizing: border-box;

    }

    body {
        background-color: whitesmoke;
    }

    .header {

        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 15px;
    }


    .cart {
        display: flex;
        background-color: #2f2f2f;
        justify-content: space-between;
        align-items: center;
        padding: 0px 5px;

        width: 65px;
        font-weight: 500;
        color: #ffffff !important;
        opacity: .5;
        -webkit-transition: .3s all ease;
        -o-transition: .3s all ease;
        transition: .3s all ease;
        position: relative;

    }




    @media (min-width: 768px) {
        .cart:before {
            content: "";
            position: absolute;
            bottom: 0;
            left: 8px;
            right: 8px;
            background: #f9bf29;
            height: 5px;
            opacity: 1;
            visibility: visible;
            width: 0;
            -webkit-transition: .15s all ease-out;
            -o-transition: .15s all ease-out;
            transition: .15s all ease-out;

        }
    }

    .cart:hover {
        opacity: 1;
    }

    .cart p {
        height: 22px;
        width: 22px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 22px;
        background-color: #776BCC;
        color: white;
    }

    .container5 {
        width: 80%;
        margin: auto;
        overflow: hidden;
        display: flex;

        margin-bottom: 30px;
    }

    #root {
        width: 60%;
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        grid-gap: 20px;
    }

    .sidebar {
        width: 40%;
        border-radius: 5px;
        background-color: #eee;
        margin-left: 20px;
        padding: 15px;
        text-align: center;
    }

    .head {
        background-color: #776BCC;

        text-align: center;
        padding: 10px;
        margin-bottom: 20px;
        color: solid white;
        display: flex;

    }

    .foot {
        display: flex;
        justify-content: space-between;
        margin: 20px 0px;
        padding: 10px 0px;
        border-top: 3px solid #776BCC;
    }

    .box {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: space-between;
        border: 1px solid goldenrod;
        border-radius: 5px;
        padding: 15px;
    }

    .img-box {
        width: 100%;
        height: 180px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .images {
        max-width: 90%;
        max-height: 90%;
        object-fit: cover;
        object-position: center;
    }

    .bottom {
        margin-top: 20px;
        width: 100%;
        text-align: center;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: space-between;
        height: 110px;
    }

    h2 {
        font-size: 20px;
        color: red;
    }

    button {
        width: 100%;
        position: relative;
        border: none;
        border-radius: 5px;
        background-color: #0070ae;
        padding: 7px 25px;
        cursor: pointer;
        color: white;
    }

    button:hover {
        background-color: #333;
    }

    .cart-item {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 10px;
        background-color: white;
        border-bottom: 1px solid #aaa;
        border-radius: 3px;
        margin: 10px 10px;
    }

    .row-img {
        width: 50px;
        height: 50px;
        border-radius: 50px;
        border: 1px solid #0070ae;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .rowimg {
        max-width: 43px;
        max-height: 43px;
        border-radius: 50%;
    }

    .fa-trash:hover {
        cursor: pointer;
        color: #333;
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

                    <li>
                        <a class="nav-link cart-link" href="addtocart.php" onclick="addtocart()">
                            <div class="cart"><i class="fas fa-shopping-cart cart-icon"></i>
                                <p id="count">0</p>
                            </div>

                        </a>
                    </li>


                </ul>
            </div>
    </nav>


    <div class="header">
        <p class="logo"></p>

    </div>
    <div class="container5">
        <div id="root"></div>
        <div class="sidebar">
            <div class="head">
                <p>My Cart</p>
            </div>
            <div id="cartItem">Your cart is empty</div>
            <div class="foot">
                <h3>Total</h3>
                <h2 id="total">₹ 0.00</h2>
            </div id="placeOrderForm" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">

            <input type="hidden" name="cart" value='<?php echo json_encode($cart); ?>'>
            <button type="submit" onclick="placeOrder()" >Place Order</button>

        </div>

    </div>

    <script>


        const product = [
            {
                id: 0,
                image: 'Img/IMG-20240210-WA0044.jpg',
                title: ' Cute Paper Rose',
                price: 120,
            },
            {
                id: 1,
                image: 'Img/IMG-20240210-WA0010.jpg',
                title: 'The Paper Letters',
                price: 60,
            },
            {
                id: 2,
                image: 'Img/IMG-20240210-WA0006.jpg',
                title: 'The Lavenders',
                price: 80,
            },
            {
                id: 3,
                image: 'Img/IMG-20240210-WA0022.jpg',
                title: 'The Super Combo',
                price: 180,
            },
            {
                id: 4,
                image: 'Img/shopping.webp',
                title: 'The Sun',
                price: 200,
            },
            {
                id: 5,
                image: 'Img/Giraffe.jpg',
                title: 'Giraffe',
                price: 250,
            },
            {
                id: 6,
                image: 'Img/paint.jpeg',
                title: 'Girl with a Pearl Earring',
                price: 250,
            },
            {
                id: 7,
                image: 'Img/paint2.jpeg',
                title: 'The Starry Night',
                price: 250,
            },
            {
                id: 8,
                image: 'Img/paint5.jpeg',
                title: 'The Scream',
                price: 250,
            },
            {
                id: 8,
                image: 'Img/paint4.jpeg',
                title: 'The Persistence of Memory',
                price: 290,
            },
            {
                id: 8,
                image: 'Img/paint3.jpeg',
                title: ' The Persistence of Soul',
                price: 290,
            }


        ];
        const categories = [...new Set(product.map((item) => { return item }))]
        let i = 0;
        document.getElementById('root').innerHTML = categories.map((item) => {
            var { image, title, price } = item;
            return (
                `<div class='box'>
            <div class='img-box'>
                <img class='images' src=${image}></img>
            </div>
        <div class='bottom'>
        <p>${title}</p>
        <h2>₹ ${price}.00</h2>` +
                "<button onclick='addtocart(" + (i++) + ")'>Buy Now</button>" +
                `</div>
        </div>`
            )
        }).join('')

        var cart = [];

        function addtocart(a) {
            cart.push({ ...categories[a] });
            displaycart();
        }
        function delElement(a) {
            cart.splice(a, 1);
            displaycart();
        }

        function displaycart() {
            let j = 0, total = 0;
            document.getElementById("count").innerHTML = cart.length;
            if (cart.length == 0) {
                document.getElementById('cartItem').innerHTML = "Your cart is empty";
                document.getElementById("total").innerHTML = "₹ " + 0 + ".00";
            }
            else {
                document.getElementById("cartItem").innerHTML = cart.map((items) => {
                    var { image, title, price } = items;
                    total = total + price;
                    document.getElementById("total").innerHTML = "₹ " + total + ".00";
                    return (
                        `<div class='cart-item'>
                <div class='row-img'>
                    <img class='rowimg' src=${image}>
                </div>
                <p style='font-size:12px;'>${title}</p>
                <h2 style='font-size: 15px;'>₹ ${price}.00</h2>` +
                        "<i class='fa-solid fa-trash' onclick='delElement(" + (j++) + ")'></i></div>"
                    );
                }).join('');
            }


        }

        
        function placeOrder() {
    // Check if the cart is empty
    if (cart.length === 0) {
        alert("Your cart is empty. Please add items to your cart.");
    } else {
        let message = "Selected Products:\n";
        let total = 0;

        // Construct the message with selected products and their details
        cart.forEach((item, index) => {
            message += `${index + 1}. ${item.title} - ₹ ${item.price}.00\n`;
            total += parseFloat(item.price); // Convert to number
        });

        // Display the total at the end of the message
        message += `Total: ₹ ${total}.00`;

        // Display the alert box with the message
        alert(message);

        // Redirect to billing.php
        var url = "billing.php?arg1=" + encodeURIComponent(message);
        window.location.href = url;
    }
}


    </script>

</body>

</html>

<?php

$conn = mysqli_connect('localhost', 'root', '', 'art');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form has been submitted
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    // Fetch the cart data sent from the form
    $cartData = json_decode($_POST['cart'], true);

    // Loop through each item in the cart and insert it into the addtocart table
    foreach ($cartData as $item) {
        $name = $item['title']; // Assuming 'title' contains the product name
        $price = $item['price'];

        // Insert query
        $sql = "INSERT INTO addtocart1 (name, price) VALUES ('$name', $price)";

        if ($conn->query($sql) === TRUE) {
            echo "Record inserted successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }

    // Close connection
    $conn->close();
}
?>