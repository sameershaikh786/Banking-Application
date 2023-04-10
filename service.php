<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Rural Banking - Services</title>
	<style>
		body {
			font-family: Arial, sans-serif;
			background-color: #f2f2f2;
		}
		nav {
			background-color: #101922;
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
			color: #f25e02;
			text-transform: uppercase;
			letter-spacing: 2px;
		}
		.services {
			display: flex;
			flex-wrap: wrap;
			justify-content: center;
			align-items: center;
			margin-top: 50px;
		}
		.service {
			background-color: #fff;
			border-radius: 5px;
			margin: 20px;
			padding: 20px;
			width: 300px;
			height: 400px;
			display: flex;
			flex-direction: column;
			justify-content: space-between;
			align-items: center;
			box-shadow: 2px 2px 5px #888888;
			transition: all 0.3s ease-in-out;
		}
		.service:hover {
			transform: scale(1.05);
			box-shadow: 2px 2px 10px #888888;
		}
		.service h2 {
			font-size: 24px;
			margin-top: 0;
			color: #ff4d00;
		}
		.service p {
			font-size: 18px;
			margin-bottom: 0;
			color: #666;
			text-align: justify;
		}
		.service a {
			background-color: #ff3c00;
			color: #fff;
			padding: 10px 20px;
			border-radius: 20px;
			text-decoration: none;
			text-transform: uppercase;
			letter-spacing: 1px;
			transition: all 0.3s ease-in-out;
		}
		.service a:hover {
			background-color: #d38859;
			transform: scale(1.05);
		}
	</style>
</head>
<body>
	<nav>
		<a href="index.php">Home</a>
		<a href="service.php">Services</a>
		<a href="contact.php">Contact Us</a>
	</nav>
	<h1>Rural Banking - Services</h1>
	<div class="services">
		<div class="service">
			<h2>Savings Accounts</h2>
			<p>Start saving for your future with our savings account. Earn competitive interest rates and access your funds anytime.</p>
			<a href="#">Learn More</a>
		</div>
		<div class="service">
			<h2>Checking Accounts</h2>
			<p>Manage your daily transactions with ease using our checking account. Enjoy features such as online banking and mobile check deposit.</p>
			<a href="#">Learn More</a>
		</div>


		<div class="service">
			<h2>Loans</h2>
			<p>Get financial assistance for your agricultural, livestock, or housing needs with our loan services. Enjoy competitive rates and flexible repayment options.</p>
			<a href="#">Learn More</a>
		</div>
