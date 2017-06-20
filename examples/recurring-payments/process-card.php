<?php
require('vendor/autoload.php');
echo '<pre>';

if ($_POST['storeCard']=='false'){
	echo 'You must select to store the card on file to set up subscription billing';
	exit;
}
var_dump($_POST);
$first_name = $_POST['fname'];
$last_name = $_POST['lname'];
$postal_code = $_POST['postal-code'];
$location_id = 'CBASELVV0B_aG7ksORk9vMjMHqo';


// configure the SDK with your access token, and create a new api instance
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('');
$customer_api = new SquareConnect\Api\CustomersApi();


//call the createCustomer endpoint
try {
	$result = $customer_api->createCustomer(
		array(
			'given_name'=> $first_name,
			'family_name'=> $last_name
			)
		);
	$customer = $result->getCustomer(); 
} catch (Exception $e) {
	echo 'Exception when calling CustomersApi->createCustomer: ', $e->getMessage(), PHP_EOL;
}

$customer_id = $customer->getId(); // string | The ID of the customer to link the card on file to.

try {
	var_dump($postal_code);
	$result = $customer_api->createCustomerCard(
		$customer_id,
		array(
			"card_nonce"=>$_POST['nonce'],
			"billing_address"=>array(
				'postal_code' => $postal_code
				)
			)
		);
	$customer_card = $result->getCard();
} catch (Exception $e) {
	echo 'Exception when calling CustomersApi->createCustomerCard: ', $e->getMessage(), PHP_EOL;
}


$transaction_api = new SquareConnect\Api\TransactionsApi();

try {
	$result = $transaction_api->charge(
		$location_id,
		array(
			'idempotency_key' => uniqid(),
			'amount_money' => array(
				'amount' => 200, 'currency' => 'USD'
				),
			'customer_id' => $customer->getId(),
			'customer_card_id' => $customer_card->getId(),
			'note' => 'Subscription Billing'
			));
	print_r($result);
} catch (Exception $e) {
	echo 'Exception when calling TransactionsApi->charge: ', $e->getMessage(), PHP_EOL;
}
?>



