# Zuora SOAP API for PHP

## Installing Zuora SOAP API 

```bash
composer require olivierbarbier/zuora-soap-api
```

## Example: performing a ZOQL query

```php
require 'vendor/autoload.php';

use Zuora\Soap\Api;

$api = Api::getInstance((object) ['wsdl' => 'path_to_your_zuora_wsdl']);

try {
	$api->login('your_login', 'your_password');

	$query = $api->query('SELECT Id, Name FROM Account');

	var_dump($query);
} catch(\Exception $e) {
	echo '>',$e->getMessage();
	die;
}
```

If you want more examples please have a look at [Zuora PHP Quickstart](https://github.com/OlivierBarbier/php-quickstart)

## An other approach
An other approach to work with Zuora Soapi API is explained [here](https://github.com/OlivierBarbier/Zuora-Soap-Api/blob/wsdl-71-sandbox/doc.md#the-right-way-imho)
