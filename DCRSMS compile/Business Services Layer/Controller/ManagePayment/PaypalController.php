<?php
// Include Functions
require '../../model/PaymentModel/PaypalInfo.php';

// For test payments we want to enable the sandbox mode. If you want to put live
// payments through then this setting needs changing to `false`.
$enableSandbox = true;

// Database settings. Change these for your database configuration.
	$servername = "localhost";
	$username = "root"; 
	$password = "";  
	$name = "dcrsms";
	
// PayPal settings. Change these to your account details and the relevant URLs
// for your site.
$paypalConfig = [
	'email' => 'merchant123@alibaba.com',

	'notify_url' => 'http://example.com/payments.php'
];

$paypalUrl = $enableSandbox ? 'https://www.sandbox.paypal.com/cgi-bin/webscr' : 'https://www.paypal.com/cgi-bin/webscr';

// Product being purchased.
//$itemName = 'Annual Dinner';
//$itemAmount = '1.00';

// Check if paypal request or response
if (!isset($_POST["txn_id"]) && !isset($_POST["txn_type"])) {

	// Grab the post data so that we can set up the query string for PayPal.
	// Ideally we'd use a whitelist here to check nothing is being injected into
	// our post data.
	$data = [];
	foreach ($_POST as $key => $value) {
		$data[$key] = stripslashes($value);
	}

	// Set the PayPal account.
	$data['business'] = $paypalConfig['email'];

	// Set the PayPal return addresses.
	$data['return'] = $_REQUEST['return_url'];
	$data['cancel_return'] = $_REQUEST['cancel_url'];
	$data['notify_url'] = stripslashes($paypalConfig['notify_url']);

	// Set the details about the product being purchased, including the amount
	// and currency so that these aren't overridden by the form data.
	$data['item_name'] = $_REQUEST['Event_Title'];
	$data['currency_code'] = 'MYR';
	$data['amount'] = $_REQUEST['Payment_Amount'];

	
	// Add any custom fields for the query string.
	$data['bookid'] = $_REQUEST['bookingid'];
	$data['Created_Time'] = $_REQUEST['Created_Time'];
	$data['Payment_Method'] = 'Paypal';

	// Build the query string from the data.
	$queryString = http_build_query($data);

	// Redirect to paypal IPN
	header('location:' . $paypalUrl . '?' . $queryString);

	exit();

} else {
	// Handle the PayPal response.

	// Create a connection to the database.
	$db = new mysqli ($servername, $username, $password, $name);
	
	// Assign posted variables to local data array.
	$data = [
		'orderid' => $_REQUEST['orderid'],
		'repairdetail' => $_POST['repairdetail'],
		'payment_status' => $_POST['payment_status'],
		'payment_currency' => $_POST['mc_currency'],
		'payment_amount' => $_POST['mc_gross'],
		'receiver_email' => $_POST['receiver_email'],
		'payer_email' => $_POST['payer_email'],
		'Payment_Method' => $_POST['Payment_Method'],
		'Created_Time' => $_POST['Created_Time'],
	];
	
	// We need to verify the transaction comes from PayPal and check we've not
	// already processed the transaction before adding the payment to our
	// database.
	if (verifyTransaction($_POST) && checkTxnid($data['txn_id'])) {
		if (addPayment($data) !== false) {
			// Payment successfully added.
			
			// create new equipment object
			$Paypal = new Paypal();
			
			$Paypal->Payment_Amount=$_POST['amount'];
			$Paypal->repairdetail=$_POST['repairdetail'];
			$Paypal->Payment_Method=$_POST['Payment_Method'];
			$Paypal->Created_Time = $_POST['Created_Time'];

			// save new payment detail into database
			$Paypal->addPayment($data);
	
		}
	}
}
?>