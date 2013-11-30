<?php

require_once('../../vendor/simkimsia/github-api-php-sdk/src/search.php');
$result = json_decode(curl('q=php+language:php&page=1', [
				'username' => 'simkimsia',
				'password' => 'Timp4github']
				),true
			);

print_r($result);