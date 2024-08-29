




<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Product details</title>
    <link rel="website icon" type="png" href="logo.png">
    <link rel="website icon" type="png" href="logo.png">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
   
    

    <script>
        function productbuy() {
    alert("Fill the detail");
    window.location.assign("billing.php")

        }
        function addtocart1() {
   
    window.location.assign("addtocart.php")

        }
        
      
        // JavaScript to handle adding items to the cart
document.addEventListener('DOMContentLoaded', function() {
    var addToCartButtons = document.querySelectorAll('.add-to-cart');
    addToCartButtons.forEach(function(button) {
        button.addEventListener('click', function() {
            var product = this.parentNode;
            var productName = product.querySelector('h2').innerText;
            var productPrice = product.querySelector('p').innerText;
            addToCart(productName, productPrice);
        });
    });
    
    function addToCart(name, price) {
        var cart = document.getElementById('cart');
        var item = document.createElement('div');
        item.innerHTML = '<p>' + name + ' - ' + price + '</p>';
        cart.appendChild(item);

        
    }
});

function addtocart1() {
    window.open("addtocart.php", "_blank");
}


  </script> 

  <?php
  session_start();
    if (isset($_SESSION['id'])) {
        $id = $_SESSION['id'];
    } else {
        
    }

  ?>

<?php


// Function to add item to cart
function addToCart($name, $price) {
    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = array();
    }
    $_SESSION['cart'][] = array('name' => $name, 'price' => $price);
}

// Check if add to cart button clicked
if (isset($_POST['add_to_cart'])) {
    $name = $_POST['name'];
    $price = $_POST['price'];
    addToCart($name, $price);
    header('Location: index.php'); // Redirect to index page after adding item
    exit();
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
            
            <li>
            <a class="nav-link cart-link" href="addtocart.php" onclick="addtocart()">
                <i class="fas fa-shopping-cart cart-icon"  ></i> 
            </a>
            </li>


        </ul>
    </div>
</nav>

    
<div style="display: flex;flex-direction:row;margin-top:100px">
<div style="width:40%;display:flex;align-items:center;justify-content:center;">
           
<img src="Img/IMG-20240210-WA0044.jpg" alt="vlok 1"style="width:300px;height:300px">
        </div>
        <div style="width:60%">
            <h2 style=" margin-top:50px;margin-bottom:20px " id="product-name">
               Cute Paper Rose
            </h2>
            <p style="font-size:large; color:black">
            
                Cute Paper Rose,"This handcrafted paper rose is full of charm and beauty, having been creatively and carefully constructed. Each fold of its exquisitely sculpted petals is filled with love and care. The artisan's commitment is evident in every curve and contour, creating a lovely bloom that embodies the beauty of nature. This adorable paper rose adds a whimsical and cheerful touch to any occasion, whether it is used to adorn a present, a card, or just to brighten a space.


            </p>

            <div style="margin-top:10px;display:flex;flex-direction:row;align-content:center" id="product-price"><p style="font-size:20px;font-weight:bold">Price  -  </p> <p style="font-size:20px;margin-left:10px">₹ 100.00</p></div>
         
           <button class="card_button" onclick="productbuy() "  target="_blank" style="width:130px;height: 45px;font-size:15px;background:#0070ae;color:#fff;">Buy Now</button>
           <button class="card_button" onclick="addtocart1()"  target="_blank" style="width:130px;height: 45px;font-size:15px;background:#0070ae;color:#fff;">Add To Cart</button>
        </div>
    </div>

<div style="display: flex;flex-direction:row;margin-top:100px">
<div style="width:40%;display:flex;align-items:center;justify-content:center;">
           
<img src="Img/IMG-20240210-WA0010.jpg" alt="vlok 1"style="width:300px;height:300px">
        </div>
        <div style="width:60%">
            <h2 style=" margin-top:50px;margin-bottom:20px ">
               The Paper Letters
            </h2>
            <p style="font-size:large; color:black">
            
               "The Paper Letters" offers personalized, handmade items that exceed mere stationery. Every item is painstakingly made to evoke emotions and feeling, encapsulating the essence of a close relationship. These letters become more than just words on paper thanks to their exquisite design and meticulous attention to detail; they become treasured mementos of love that add an artisanal touch to special occasions.


            </p>

            <div style="margin-top:10px;display:flex;flex-direction:row;align-content:center"><p style="font-size:20px;font-weight:bold">Price  -  </p> <p style="font-size:20px;margin-left:10px">₹ 120.00</p></div>
         
           <button class="card_button" onclick="productbuy()" style="width:130px;height: 45px;font-size:15px;background:#0070ae;color:#fff;">Buy Now</button>
           <button class="card_button" onclick="addtocart1()"  target="_blank" style="width:130px;height: 45px;font-size:15px;background:#0070ae;color:#fff;">Add To Cart</button>
        </div>
    </div>

<div style="display: flex;flex-direction:row;margin-top:100px">
<div style="width:40%;display:flex;align-items:center;justify-content:center;">
           
<img src="Img/IMG-20240210-WA0006.jpg" alt="vlok 1"style="width:300px;height:300px">
        </div>
        <div style="width:60%">
            <h2 style=" margin-top:50px;margin-bottom:20px ">
               The Lavenders
            </h2>
            <p style="font-size:large; color:black">
            
               The Lavenders bloom with complex elegance, delicately fashioned by talented hands. With great care and attention to detail, each petal is a monument to craftsmanship. These thoughtfully crafted flowers capture the essence of the peace and tranquility found in nature with their timeless grace. Their colors, which range from gentle purples to calming blues, dance together to infuse any area with a sense of tranquility. Because each lavender is made by hand, a little bit of the grace of nature is preserved and serves as a pleasant reminder of the small pleasures in life.

            </p>

            <div style="margin-top:10px;display:flex;flex-direction:row;align-content:center"><p style="font-size:20px;font-weight:bold">Price  -  </p> <p style="font-size:20px;margin-left:10px">₹ 80.00</p></div>
         
           <button class="card_button" onclick="productbuy()" style="width:130px;height: 45px;font-size:15px;background:#0070ae;color:#fff;">Buy Now</button>
           <button class="card_button" onclick="addtocart1()" style="width:130px;height: 45px;font-size:15px;background:#0070ae;color:#fff;">Add To Cart</button>
        </div>
    </div>     

<div style="display: flex;flex-direction:row;margin-top:100px">
<div style="width:40%;display:flex;align-items:center;justify-content:center;">
           
<img src="Img/IMG-20240210-WA0022.jpg" alt="vlok 1"style="width:300px;height:300px">
        </div>
        <div style="width:60%">
            <h2 style=" margin-top:50px;margin-bottom:20px ">
               The Super Combo
            </h2>
            <p style="font-size:large; color:black">
            
              Presenting the magnificent Super Combo, a work of art created with great attention and artistic flair. The eternal beauty of rose blossoms is highlighted in this handcrafted outfit, which includes a delicate flower arrangement nestled within an elegant frame. Each component has been carefully selected and arranged to exude sophistication and charm. The Super Combo skillfully blends natural elegance with handcrafted craftsmanship to capture hearts and elevate any room, making it ideal as a centerpiece or a thoughtful gift.

            </p>

            <div style="margin-top:10px;display:flex;flex-direction:row;align-content:center"><p style="font-size:20px;font-weight:bold">Price  -  </p> <p style="font-size:20px;margin-left:10px">₹ 180.00</p></div>
         
           <button class="card_button" onclick="productbuy()" style="width:130px;height: 45px;font-size:15px;background:#0070ae;color:#fff;">Buy Now</button>
           <button class="card_button" onclick="addtocart1()" style="width:130px;height: 45px;font-size:15px;background:#0070ae;color:#fff;">Add To Cart</button>
        </div>
    </div>  


<div style="display: flex;flex-direction:row;margin-top:100px">
<div style="width:40%;display:flex;align-items:center;justify-content:center;">
           
<img src="Img/shopping.webp" alt="vlok 1"style="width:300px;height:300px">
        </div>
        <div style="width:60%">
            <h2 style=" margin-top:50px;margin-bottom:20px ">
               The Sun
            </h2>
            <p style="font-size:large; color:black">
            
             The sun seems as a heavenly work of art created by the hands of nature, with colors ranging from brilliant gold to flaming orange. With soft brushstrokes, it paints the sky, illuminating the earth below with a pleasant glow. Every flicker of light and shadow narrates a tale of life and rebirth at dawn and sunset. The sun's artistic expression resurfaces with each new morning, serving as a monument to the enduring beauty of the natural world.

            </p>

            <div style="margin-top:10px;display:flex;flex-direction:row;align-content:center"><p style="font-size:20px;font-weight:bold">Price  -  </p> <p style="font-size:20px;margin-left:10px">₹ 200.00</p></div>
         
           <button class="card_button" onclick="productbuy()" style="width:130px;height: 45px;font-size:15px;background:#0070ae;color:#fff;">Buy Now</button>
           <button class="card_button" onclick="addtocart1()" style="width:130px;height: 45px;font-size:15px;background:#0070ae;color:#fff;">Add To Cart</button>
        </div>
    </div> 


<div style="display: flex;flex-direction:row;margin-top:100px">
<div style="width:40%;display:flex;align-items:center;justify-content:center;">
           
<img src="Img/Giraffe.jpg" alt="vlok 1"style="width:300px;height:300px">
        </div>
        <div style="width:60%">
            <h2 style=" margin-top:50px;margin-bottom:20px ">
               Giraffe
            </h2>
            <p style="font-size:large; color:black">
            
              See the lively splendor of a hand-painted giraffe, brimming with colors that dance across the canvas like a happy kaleidoscope. The magnificent creature's grace and elegance are captured in every brushstroke by the artist, and the vibrant colors add joy and fun to any area they adorn. This masterwork beckons you to lose yourself in the captivating world of nature's marvels with its vibrant colors and fine details.


            </p>

            <div style="margin-top:10px;display:flex;flex-direction:row;align-content:center"><p style="font-size:20px;font-weight:bold">Price  -  </p> <p style="font-size:20px;margin-left:10px">₹ 250.00</p></div>
         
           <button class="card_button" onclick="productbuy()" style="width:130px;height: 45px;font-size:15px;background:#0070ae;color:#fff;">Buy Now</button>
           <button class="card_button" onclick="addtocart1()" style="width:130px;height: 45px;font-size:15px;background:#0070ae;color:#fff;">Add To Cart</button>
        </div>
    </div>       


<div style="display: flex;flex-direction:row;margin-top:100px">
        <div style="width:40%;display:flex;align-items:center;justify-content:center;">
           
<img src="Img/paint.jpeg" alt="vlok 1"style="width:300px;height:300px">
        </div>
        <div style="width:60%">
            <h2 style=" margin-top:50px;margin-bottom:20px ">
                Girl with a Pearl Earring
            </h2>
            <p style="font-size:large; color:black">
            
                Girl with a Pearl Earring, oil painting on canvas (c. 1665) by Dutch artist Johannes Vermeer, one of his most well-known works. It depicts an imaginary young woman in exotic dress and a very large pearl earring. The work permanently resides in the Mauritshuis museum in The Hague.An observant and deliberate painter, Vermeer produced only 36 known works in his lifetime, while many of his contemporaries completed hundreds. Like his peers, he mostly depicted scenes of ordinary life, later called “genre” painting, often of women at daily tasks. Notable examples included Girl Reading a Letter at an Open Window (c. 1657) and The Music Lesson (c. 1665). He occasionally signed his paintings. While Girl with a Pearl Earring bears “IVMeer,” it is undated. Historians believe Vermeer painted the small piece (17.52 × 15.35 inches [44.5 × 39 cm]) around 1665, during the period in which he executed a group of paintings with a shared pearl motif.
            </p>

            <div style="margin-top:10px;display:flex;flex-direction:row;align-content:center"><p style="font-size:20px;font-weight:bold">Price  -  </p> <p style="font-size:20px;margin-left:10px">₹ 250.00</p></div>
         
           <button class="card_button" onclick="productbuy()" style="width:130px;height: 45px;font-size:15px;background:#0070ae;color:#fff;">Buy Now</button>
           <button class="card_button" onclick="addtocart1()" style="width:130px;height: 45px;font-size:15px;background:#0070ae;color:#fff;">Add To Cart</button>
        </div>
    </div>




 <div style="display: flex;flex-direction:row;margin-top:100px">
        <div style="width:40%;display:flex;align-items:center;justify-content:center">
           
<img src="Img/paint2.jpeg" alt="vlok 1"style="width:300px;height:300px">
        </div>
        <div style="width:60%">
            <h2 style=" margin-top:50px;margin-bottom:20px ">
               The Starry Night
            </h2>
            <p style="font-size:large; color:black">
                The Starry Night, a moderately abstract landscape painting (1889) of an expressive night sky over a small hillside village, one of Dutch artist Vincent van Gogh’s most celebrated works.The oil-on-canvas painting is dominated by a night sky roiling with chromatic blue swirls, a glowing yellow crescent moon, and stars rendered as radiating orbs. One or two cypress trees, often described as flame-like, tower over the foreground to the left, their dark branches curling and swaying to the movement of the sky that they partly obscure. Amid all this animation, a structured village sits in the distance on the lower right of the canvas. Straight controlled lines make up the small cottages and the slender steeple of a church, which rises as a beacon against rolling blue hills. The glowing yellow squares of the houses suggest the welcoming lights of peaceful homes, creating a calm corner amid the painting’s turbulence.
            </p>
          <div style="margin-top:10px;display:flex;flex-direction:row;align-content:center"><p style="font-size:20px;font-weight:bold">Price  -  </p> <p style="font-size:20px;margin-left:10px">₹ 250.00</p></div>
           <button class="card_button" onclick="productbuy()" style="width:130px;height: 45px;font-size:15px;background:#0070ae;color:#fff;">Buy Now</button>
           <button class="card_button" onclick="addtocart1()" style="width:130px;height: 45px;font-size:15px;background:#0070ae;color:#fff;">Add To Cart</button>
        </div>
    </div>


 <div style="display: flex;flex-direction:row;margin-top:100px">
        <div style="width:40%;display:flex;align-items:center;justify-content:center">
           
<img src="Img/paint5.jpeg" alt="vlok 1"style="width:300px;height:300px">
        </div>
        <div style="width:60%">
            <h2 style=" margin-top:50px;margin-bottom:20px ">
               The Scream
            </h2>
            <p style="font-size:large; color:black">
         
                The Scream is a composition created by Norwegian artist Edvard Munch in 1893. The Norwegian name of the piece is Skrik (Shriek), and the German title under which it was first exhibited Der Schrei der Natur (The Scream of Nature). The agonized face in the painting has become one of the most iconic images of art, seen as symbolizing the anxiety of the human condition. Munch's work, including The Scream, had a formative influence on the Expressionist movement.Munch recalled that he had been out for a walk at sunset when suddenly the setting sun's light turned the clouds "a blood red". He sensed an "infinite scream passing through nature". Scholars have located the spot to a fjord overlooking Oslo[2] and have suggested other explanations for the unnaturally orange sky, ranging from the effects of a volcanic eruption to a psychological reaction by Munch to his sister's commitment at a nearby lunatic asylum.
            </p>

            <div style="margin-top:10px;display:flex;flex-direction:row;align-content:center"><p style="font-size:20px;font-weight:bold">Price  -  </p> <p style="font-size:20px;margin-left:10px">₹ 250.00</p></div>
         

           <button class="card_button" onclick="productbuy()" style="width:130px;height: 45px;font-size:15px;background:#0070ae;color:#fff;">Buy Now</button>
           <button class="card_button" onclick="addtocart1()" style="width:130px;height: 45px;font-size:15px;background:#0070ae;color:#fff;">Add To Cart</button>
        </div>
    </div>


 <div style="display: flex;flex-direction:row;margin-top:100px">
        <div style="width:40%;display:flex;align-items:center;justify-content:center">
           
<img src="Img/paint4.jpeg" alt="vlok 1"style="width:300px;height:300px">
        </div>
        <div style="width:60%">
            <h2 style=" margin-top:50px;margin-bottom:20px ">
               The Persistence of Memory
            </h2>
            <p style="font-size:large; color:black">
                The Persistence of Memory (Catalan: La persistència de la memòria) is a 1931 painting by artist Salvador Dalí and one of the most recognizable works of Surrealism. First shown at the Julien Levy Gallery in 1932, since 1934 the painting has been in the collection of the Museum of Modern Art (MoMA) in New York City, which received it from an anonymous donor. It is widely recognized and frequently referred to in popular culture,[1] and sometimes referred to by more descriptive titles, such as "Melting Clocks", "The Soft Watches" or "The Melting Watches".
            </p>

            <div style="margin-top:10px;display:flex;flex-direction:row;align-content:center"><p style="font-size:20px;font-weight:bold">Price  -  </p> <p style="font-size:20px;margin-left:10px">₹ 290.00</p></div>
         
           <button class="card_button" onclick="productbuy()" style="width:130px;height: 45px;font-size:15px;background:#0070ae;color:#fff;">Buy Now</button>
           <button class="card_button" onclick="addtocart1()" style="width:130px;height: 45px;font-size:15px;background:#0070ae;color:#fff;">Add To Cart</button>        
        </div>
    </div>

  

<div style="display: flex;flex-direction:row;margin-top:100px">
        <div style="width:40%;display:flex;align-items:center;justify-content:center">
           
<img src="Img/paint3.jpeg" alt="vlok 1"style="width:300px;height:300px">
        </div>
        <div style="width:60%">
            <h2 style=" margin-top:50px;margin-bottom:20px ">
               The Persistence of Soul
            </h2>
            <p style="font-size:large; color:black">
                The Persistence of Soul is a half-length portrait painting by Italian artist Leonardo da Vinci. Considered an archetypal masterpiece of the Italian Renaissance, it has been described as "the best known, the most visited, the most written about, the most sung about, [and] the most parodied work of art in the world".

            </p>

            <div style="margin-top:10px;display:flex;flex-direction:row;align-content:center"><p style="font-size:20px;font-weight:bold">Price  -  </p> <p style="font-size:20px;margin-left:10px">₹ 290.00</p></div>
         
           <button class="card_button" onclick="productbuy()" style="width:130px;height: 45px;font-size:15px;background:#0070ae;color:#fff;">Buy Now</button>
           <button class="card_button" onclick="addtocart1()" style="width:130px;height: 45px;font-size:15px;background:#0070ae;color:#fff;">Add To Cart</button>
        </div>
    </div>

     

    <?php

                    $conn = mysqli_connect('localhost','root','','art');

                    $sql = 'SELECT * FROM `arttb`';
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
         
            <button id="<?php echo $row['aid']; ?>"  style="background:#0070ae;color: #fff;" class="btn">Buy Now!</button>
           <input type="hidden" id="uid" value="<?php echo $id;?>"/>
           
        </div>
    </div>

    <?php
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


    <script src="jquery-3.1.1.min.js"></script>
   

    <script>
        $(document).ready(function(){
            $('.btn').click(function(){
                var id = $(this).attr('id');
                var uid = $(this).siblings('#uid').val();


                if(uid !=''){
                    if(id!=''){
                    $.ajax({
                        url : 'addtocartajax.php',
                        method : 'post',
                        data : {
                            id:id,
                            uid:uid
                        },
                        success : function(data){
                            alert(data);
                        }
                    })
                }
                }else{
                    alert('Login is Required');
                    window.location.href = 'login.php';
                }
            });
        });
    </script>
   

</body>
</html>
