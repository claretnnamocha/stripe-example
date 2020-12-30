<?php
	require_once "stripe-php-master/init.php";

	\Stripe\Stripe::setApiKey('sk_test_mER3zLlgaabTlxWmcoiuG8ls');
	\Stripe\Stripe::setVerifySslCerts(false);
	
	
	$token = $_POST['stripeToken'];
	$email = $_POST["stripeEmail"];

	$product_id = $_GET['p_id'];

	/**
	* search the table int database using the product_id obtain the :
	* price
	* description
	*/

	// Charge the user's card:
	$charge = \Stripe\Charge::create(array(
		"amount" => $price,
		"currency" => "ngn", //set currency
		"description" => $description,
		"source" => $token,
	));

	/**
		-send confirmaion email to $email
		-record transaction in database
	*/

	echo 'Success! You have been charged N' . ($price);
