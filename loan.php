<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Rural Banking - Loan Types</title>
	<style>
		body {
			font-family: Arial, sans-serif;
			background-color: #f2f2f2;
		}
		h1 {
			text-align: center;
			margin-top: 50px;
		}
		.loan-types {
			display: flex;
			flex-wrap: wrap;
			justify-content: center;
			align-items: center;
			margin-top: 50px;
		}
		.loan-type {
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
		}
		.loan-type h2 {
			font-size: 24px;
			margin-top: 0;
			color: #020910;
		}
		.loan-type p {
			font-size: 18px;
			margin-bottom: 0;
			color: #666;
			text-align: justify;
		}
		.loan-type button {
			background-color: #ec4f28;
			color: #fff;
			border: none;
			border-radius: 5px;
			padding: 10px 20px;
			font-size: 18px;
			cursor: pointer;
		}
		.loan-type button:hover {
			background-color: #f4480a;
		}
	</style>
	<script>
		function showEligibility(loanType) {
			if (loanType === "Agricultural") {
				alert('Eligibility criteria for Agricultural loan:\nMinimum income: ₹20,000/year\nCollateral required: Yes');
			} else if (loanType === "Livestock") {
				alert('Eligibility criteria for Education Loan:\nMinimum income: ₹10,000/year\nCollateral required: Yes ');
			} else if (loanType === "Housing") {
				alert('Eligibility criteria for Housing loan:\nMinimum income: ₹30,000/year\n Income Certificate based on the nature of the activity (e.g. farming, dairy, poultry, orchards, etc.), land holding, cropping pattern, yield etc. from the competent authority');
			}
		}
	</script>
</head>
<body>
	<h1>Rural Banking - Loan Types</h1>
	 <div class="loan-types">
		<div class="loan-type">
		<a href="https://www.apgvbank.in/advance/Crop-Loans-KCC"> <h2>Agricultural Loan</h2></a>
			 <p>Finance your agricultural activities such as buying of farm land, fertilizers, seeds, and equipment.</p>
			<button onclick="showEligibility('Agricultural')">Check Eligibility</button>
		</div>
		<div class="loan-type">
			<a href="https://www.apgvbank.in/advance/Education-Loan-India"> <h2>Education loan</h2> </a>
			<p>Get financial assistance for purchasing or breeding of livestock, construction of sheds, and other related needs.</p>
			<button onclick="showEligibility('Livestock')">Check Eligibility</button>
		</div>
		<div class="loan-type">
		<a href="https://www.apgvbank.in/advance/Housing-Loan-To-Rural">	<h2>Housing Loan</h2> </a>
			<p>Build or renovate your dream home or purchase a plot of land for construction.</p>
            <button onclick="showEligibility('Housing')">Check Eligibility</button>
	</div>
</div>
</body>
</html>

