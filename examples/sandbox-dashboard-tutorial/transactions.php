<?php 
require('header.php');
date_default_timezone_set('America/Los_Angeles');
?>
<div id="main">
	<h1>Transactions</h1>
	<?php
	if(!$_SESSION['at']){
		echo 'Looks like you need to set your access token in the form on the left. Go to your <a href="connect.squareup.com/apps/">Developer Portal</a> to find it.'; 
	}elseif(!$_SESSION['location']){
		echo 'Looks like you need to set your location id in the form on the left. Go to the <a href="/locations.php">locations tab</a> to find a location and paste it into the box on the left. '; 
	}else{
		//Use the access token from the session to access the API
		SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken($_SESSION['at']);
		$transactionApi = new SquareConnect\Api\TransactionsAPI();
		try {
			$result = $transactionApi->listTransactions($_SESSION['location']);
			?>

			<div style="display:flex;flex-direction:column;">
				<div class="row">
					<div>timestamp</div>
					<div>Refunded?</div>
					<div>Note</div>
					<div>transaction id</div>
					<div>Amount</div>
				</div>
				<?php foreach ($result->getTransactions() as $transaction) {?>
				<div class="row">
					<div class="timestamp">
						<?php echo date("g:ia \<\b\\r\> F NS, Y",strtotime($transaction->getCreatedAt()));?>
					</div>

					<div>
						<?
						if ($transaction->getRefunds()) {
							echo "Refunded"	;
						}
						?>
					</div>

					<div>
						<?php echo $transaction->getTenders()[0]->getNote();?>
					</div>
					<div>
						<?php echo $transaction->getId(); ?>
					</div>
					<div>
						<?php echo '$'.$transaction->getTenders()[0]->getAmountMoney()->getAmount()/100 ?>
					</div>
				</div>
				<?php } ?>
			</div>
			<?php } catch (Exception $e) {
				echo 'Exception when calling TransactionsApi->listTransactions() with the access token <strong>',$_SESSION['at'],'</strong>', PHP_EOL;
				echo '<pre>';
				echo $e->getMessage();
			}
		}
		?>
	</div>
</body>
</html>