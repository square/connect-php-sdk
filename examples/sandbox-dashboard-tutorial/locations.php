<?php 
require('header.php');
?>
<div id="main">
	<h1> Locations</h1>
	<?php
	if(!$_SESSION['at']){
		echo 'Looks like you need to set your access token on the right. Go to your <a href="connect.squareup.com/apps/">Developer Portal</a> to find it.'; 
	}else{
		SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken($_SESSION['at']);
		$locationApi = new SquareConnect\Api\LocationsApi();
		try {
			$result = $locationApi->listLocations();
			echo '<div style="display:flex">';
			foreach ($result->getLocations() as $location) { ?>

			<div class="location">
				<h2> <?php echo $location->getName();?> </h2>
				<em> <?php echo $location->getId();?></em>
				<pre>
					<?php var_dump($location);?>
				</pre>
			</div>
			<?php }?>
		</div>
		<?php } catch (Exception $e) {
			echo 'Exception when calling LocationsApi->listLocations() with the access token <strong>',$_SESSION['at'],'</strong>', PHP_EOL;
			echo '<pre>';
			echo $e->getMessage();
		}
	}


	?>
</div>
</body>
</html>