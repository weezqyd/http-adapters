Installation
------------

This library can be found on [Packagist](https://packagist.org/packages/weezqyd/http-adapters).
The recommended way to install this is through [composer](http://getcomposer.org).

Run these commands to install the packages:

```bash
$ composer require weezqyd/http-adapters
```

You then need to install **one** of the following:
```bash
$ composer require kriswallsmith/buzz:~0.10
$ composer require guzzlehttp/guzzle:~5.0
$ composer require guzzlehttp/guzzle:~6.0
```

GuzzleHttp Adapter
------------------

If you use Guzzle, just pass an array of options to the constructor of `Http\Adapter\GuzzleHttpAdapter`.
Please refer to [Guzzle Documentation](http://docs.guzzlephp.org/en/stable/request-options.html). for a full list of possible options

Example
-------

```php
<?php

require 'vendor/autoload.php';

use Http\Adapter\GuzzleHttpAdapter;

$options = [
	    // Base URI is used with relative requests
	    'base_uri' => 'http://httpbin.org',
	    // You can set any number of default request options.
	    'timeout'  => 2.0,
	    // Pass your custom headers
	    'headers' => [
	    	'Authorization' => 'your access token',
	    	'X-Foo' => 'Bar'
	    ]
	];
// create an adapter with the options
$adapter = new GuzzleHttpAdapter($options);

// make a get request with the adapter
$response = $adapter->get('get?adappter=GuzzleAdapter');
var_dump($response);
/*
{
	"args": {
		 "adappter": "GuzzleAdapter"
	}, 
	"headers": {
		 "headers": {
			 "Authorization": "your access token",
			 "X-Foo": "Bar",
			 "Connection": "close", 
			 "Host": "httpbin.org", 
			 "User-Agent": "GuzzleHttp/6.2.1 curl/7.47.0 PHP/7.1.6"
		}, 
	"origin": "0.0.0.0", 
	"url": "https://httpbin.org/get?adappter=GuzzleAdapter"
}
 */
```