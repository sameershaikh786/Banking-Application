<?php
session_start();




?>
<!DOCTYPE html>
<html>
<head>
	<title>Rural Banking - Contact Us</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<style>
		body {
			font-family: Arial, sans-serif;
			background-color: #f2f2f2;
		}
		nav {
			background-color: #007bff;
			position: fixed;
			top: 0;
			left: 0;
			width: 100%;
			height: 50px;
			display: flex;
			justify-content: center;
			align-items: center;
			z-index: 1;
		}
		nav a {
			color: #fff;
			font-size: 18px;
			margin: 0 20px;
			text-decoration: none;
			text-transform: uppercase;
			letter-spacing: 1px;
		}
		h1 {
			text-align: center;
			margin-top: 100px;
			color: #007bff;
			text-transform: uppercase;
			letter-spacing: 2px;
		}
		form {
			display: flex;
			flex-direction: column;
			align-items: center;
			margin-top: 50px;
		}
		input, textarea {
			padding: 10px;
			margin-bottom: 20px;
			border: none;
			border-radius: 5px;
			background-color: #fff;
			box-shadow: 2px 2px 5px #888888;
			width: 100%;
			max-width: 500px;
			font-size: 18px;
			color: #666;
			resize: none;
		}
		input:focus, textarea:focus {
			outline: none;
			box-shadow: 2px 2px 10px #888888;
		}
		.submit {
			background-color: #007bff;
			color: #fff;
			padding: 10px 20px;
			border-radius: 20px;
			text-decoration: none;
			text-transform: uppercase;
			letter-spacing: 1px;
			font-size: 18px;
			transition: all 0.3s ease-in-out;
		}
		.submit:hover {
			background-color: #0056b3;
			transform: scale(1.05);
		}
	</style>
</head>
<body>
	<nav>
		<a href="#">Home</a>
		<a href="#">Services</a>
		<a href="#">Contact Us</a>
	</nav>
	<h1>Rural Banking - Contact Us</h1>
	<form method="post" action="contact.php">
		<input type="text" name="name" placeholder="Name" required>
		<input type="email" name="email" placeholder="Email" required>
		<input type="text" name="subject" placeholder="Subject" required>
		<textarea name="message" placeholder="Message" rows="10" required></textarea>
		<input type="submit" class="submit" value="Submit">
	</form>
</body>
</html>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];
    
    $to = "sshaikh99201@gmail.com";
    $subject = "New message from Rural Banking contact form: $subject";
    $body = "Name: $name\nEmail: $email\nMessage:\n$message";
    $headers = "From: $email";
    
    if (mail($to, $subject, $body, $headers)) {
        echo "<script>alert('Thank you for contacting us. We will get back to you soon.');</script>";
    } else {
        echo "<script>alert('Sorry, an error occurred while sending your message. Please try again later.');</script>";
    }
}
?>