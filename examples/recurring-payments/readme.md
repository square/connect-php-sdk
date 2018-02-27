# Recurring payments with Card on File

This code is meant to go along with the following blog post:

TK

To get started with the sample:
1. Edit `index.php` to add your `application id` to the payment form. 
2. Edit `process-card.php` to add your `access token`. if you do not have an access token, create a new application in the [Square Developer Portal](https://connect.squareup.com/apps/)
3. Edit `process-card.php` to add your `location_id`. You can find your location id with the [ListLocations](https://docs.connect.squareup.com/api/connect/v2/#endpoint-listlocations) endpoint, or by using a tool such as [Postman](https://medium.com/square-corner-blog/getting-started-with-postman-and-squares-apis-e6bd0f2a8a75)
4. `composer install` to install the Square PHP SDK
5. `php -S localhost:8090` and navigate to [localhost:8090](http://localhost:8090)
