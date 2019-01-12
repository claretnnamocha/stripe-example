<?php
	require_once "stripe-php-master/init.php";

	\Stripe\Stripe::setApiKey('sk_test_mER3zLlgaabTlxWmcoiuG8ls');
	\Stripe\Stripe::setVerifySslCerts(false);
	
	
	$token = $_POST['stripeToken'];
	$email = $_POST["stripeEmail"];

	$product_id = $_GET['p_id']

	/**
		search the table int database using the product_id obtain the :
		$price
		$description
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


	PS dont forget the following:

	0. modify the p_id paramters to suit your use case
	1. your-publishable-key in index.html file (required)
	2. url-to-prouct-image in index.html file (optional as the data-image attribute can be removed)
	3. your-secret-key in payment.php (required)


	4. download stripe-php-master api library folder from https://github.com/stripe/stripe-php

	5. directory structure 
		-index.html
		-payment.php
		-stripe-php-master (folder)


	6. add the next lines to your css file
	.stripe-button-el{
          display: none !important;
        }