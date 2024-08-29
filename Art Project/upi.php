
<?php
// Establish a database connection
$conn = mysqli_connect('localhost','root','','art');

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check if the form is submitted
if(isset($_POST['submit'])) {
    // Extract user data from the POST request
    $name = $_POST['name'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $pincode = $_POST['pincode'];
    $nameoncard = $_POST['nameoncard'];
    $card_num = $_POST['card_num'];
    $exp_month = $_POST['exp_month'];
    $exp_year = $_POST['exp_year'];
    $cvv = $_POST['cvv'];
    
    // Sanitize input data to prevent SQL injection
    $name = mysqli_real_escape_string($conn, $name);
    $email = mysqli_real_escape_string($conn, $email);
    $address = mysqli_real_escape_string($conn, $address);
    $city = mysqli_real_escape_string($conn, $city);
    $state = mysqli_real_escape_string($conn, $state);
    $pincode = mysqli_real_escape_string($conn, $pincode);
    $nameoncard = mysqli_real_escape_string($conn, $nameoncard);
    $card_num = mysqli_real_escape_string($conn, $card_num);
    $exp_month = mysqli_real_escape_string($conn, $exp_month);
    $exp_year = mysqli_real_escape_string($conn, $exp_year);
    $cvv = mysqli_real_escape_string($conn, $cvv);
    
    // Construct SQL query to insert user data into the database
    $sql = "INSERT INTO upi_detail1 (name, email, address, city, state, pincode, nameoncard, card_num, exp_month, exp_year, cvv)
            VALUES ('$name', '$email', '$address', '$city', '$state', '$pincode', '$nameoncard', '$card_num', '$exp_month', '$exp_year', '$cvv')";

    // Execute SQL query
    if (mysqli_query($conn, $sql)) {
        // Redirect to a thank you page or display a success message
        header("Location: billing.php"); // Redirect to the thank you page after successful submission
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

// Close database connection
mysqli_close($conn);
?>




<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Online Payment-Page</title>

</head>
<style>
	@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;500;600&display=swap');

	* {
		margin: 0;
		padding: 0;
		box-sizing: border-box;
		border: none;
		outline: none;
		font-family: 'Poppins', sans-serif;
		text-transform: capitalize;
		transition: all 0.2s linear;
	}

	.container {
		display: flex;
		justify-content: center;
		align-items: center;
		min-height: 100vh;
		padding: 25px;
		background: #d6eef1;
	}

	.container form {
		width: 700px;
		padding: 20px;
		background: #fff;
		box-shadow: 5px 5px 30px rgba(0, 0, 0, 0.2);
	}

	.container form .row {
		display: flex;
		flex-wrap: wrap;
		gap: 15px;
	}

	.container form .row .col {
		flex: 1 1 250px;
	}

	.col .title {
		font-size: 20px;
		color: rgb(237, 55, 23);
		padding-bottom: 5px;
	}

	.col .inputBox {
		margin: 15px 0;
	}

	.col .inputBox label {
		margin-bottom: 10px;
		display: block;
	}

	.col .inputBox input,
	.col .inputBox select {
		width: 100%;
		border: 1px solid #ccc;
		padding: 10px 15px;
		font-size: 15px;
	}

	.col .inputBox input:focus,
	.col .inputBox select:focus {
		border: 1px solid #000;
	}

	.col .flex {
		display: flex;
		gap: 15px;
	}

	.col .flex .inputBox {
		flex: 1 1;
		margin-top: 5px;
	}

	.col .inputBox img {
		height: 34px;
		margin-top: 5px;
		filter: drop-shadow(0 0 1px #000);
	}

	.container form .submit_btn {
		width: 100%;
		padding: 12px;
		font-size: 17px;
		background: rgb(1, 143, 34);
		color: #fff;
		margin-top: 5px;
		cursor: pointer;
		letter-spacing: 1px;
	}

	.container form .submit_btn:hover {
		background: #3d17fb;
	}

	input::-webkit-inner-spin-button,
	input::-webkit-outer-spin-button {
		display: none;
	}
</style>

<body>
	<div class="container">

		<form  method="POST">

			<div class="row">

				<div class="col">
					<h3 class="title">
						Billing Address
					</h3>

					<div class="inputBox">
						<label for="name">
							Full Name:
						</label>
						<input type="text" id="name" name="name" placeholder="Enter your full name" required>
						

					</div>

					<div class="inputBox">
						<label for="email">
							Email:
						</label>
						<input type="text" id="email" name="email" placeholder="Enter email address" required>
					</div>

					<div class="inputBox">
						<label for="address">
							Address:
						</label>
						<input type="text" id="address" name="address" placeholder="Enter address" required>
					</div>

					<div class="inputBox">
						<label for="city">
							City:
						</label>
						<input type="text" id="city" placeholder="Enter city" name="city" required>
					</div>

					<div class="flex">

						<div class="inputBox">
							<label for="state">
								State:
							</label>
							<input type="text" id="state" placeholder="Enter state" name="state" required>
						</div>

						<div class="inputBox">
							<label for="zip">
								Zip Code:
							</label>
							<input type="number" id="zip" name="pincode" placeholder="123 456" required>
						</div>

					</div>

				</div>
				<div class="col">
					<h3 class="title">Payment</h3>

					<div class="inputBox">
						<label for="name">
							Card Accepted:
						</label>
						<img src="Img/ccard.png" alt="Img/ccard.png">
						<img src="Img/pay.jpg" alt="Img/pay.jpg">
						<img src="Img/visa.jpg" alt="Img/visa.jpg">
						<img src="Img/card1.jpg" alt="Img/card1.jpg">
					</div>

					<div class="inputBox">
						<label for="cardName">
							Name On Card:
						</label>
						<input type="text" id="cardName" placeholder="Enter card name" name="nameoncard" required>
					</div>

					<div class="inputBox">
						<label for="cardNum">
							Credit Card Number:
						</label>
						<input type="text" id="cardNum" placeholder="1111-2222-3333-4444" name="card_num" maxlength="19"
							required>
					</div>

					<div class="inputBox">
						<label for="">Exp Month:</label>
						<select name="exp_month" id="">
							<option value="">Choose month</option>
							<option value="January">January</option>
							<option value="February">February</option>
							<option value="March">March</option>
							<option value="April">April</option>
							<option value="May">May</option>
							<option value="June">June</option>
							<option value="July">July</option>
							<option value="August">August</option>
							<option value="September">September</option>
							<option value="October">October</option>
							<option value="November">November</option>
							<option value="December">December</option>
						</select>
					</div>


					<div class="flex">
						<div class="inputBox">
							<label for="">Exp Year:</label>
							<select name="exp_year" id="">
								<option value="">Choose Year</option>
								<option value="2023">2023</option>
								<option value="2024">2024</option>
								<option value="2025">2025</option>
								<option value="2026">2026</option>
								<option value="2027">2027</option>
							</select>
						</div>

						<div class="inputBox">
							<label for="cvv">CVV</label>
							<input type="number" id="cvv" name="cvv" placeholder="123" required>
						</div>
					</div>

				</div>

			</div>

			<input type="submit" value="Proceed to Checkout" class="submit_btn" name="submit">
		</form>

	</div>
	<script>

		function showBookingMessage() {
			alert("BOOKING IS  DONE");
		}
		document.querySelector('.submit_btn').addEventListener('click', function () {
			showBookingMessage();
		});
		let cardNumInput =
			document.querySelector('#cardNum')

		cardNumInput.addEventListener('keyup', () => {
			let cNumber = cardNumInput.value
			cNumber = cNumber.replace(/\s/g, "")

			if (Number(cNumber)) {
				cNumber = cNumber.match(/.{1,4}/g)
				cNumber = cNumber.join(" ")
				cardNumInput.value = cNumber
			}
		})

	</script>
</body>

</html>
