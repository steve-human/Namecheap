# Overview #

This is library for the Namecheap API. It supports all of the latest namecheap API methods and is installable using composer.

## Requirements ##

* PHP 5.3.0 or greater

### Installation ###

To install Namecheap, use the following composer require statement:

```
    "require": {
        "Humen/namecheap"
    }
```

### Basic Example ###

```php
<?php
require 'vendor/autoload.php';

$api_user = 'YOUR-API-USERNAME';
$api_key = 'YOUR-API-KEY';
$client_ip = 'YOUR-IP-ADDRESS';

$client = new \Namecheap\Api\Client($api_user, $api_key, $client_ip, true);

$namecheap = new \Namecheap\Api\Domains\Domains($client);
$response = $namecheap->getTldlist();
```

### TODO ###
* Write unit tests
* Write DTOs to enforce strictness in calls

### License ###
The MIT License (MIT)

Copyright (c) 2013 Vouga Labs

Permission is hereby granted, free of charge, to any person
obtaining a copy of this software and associated documentation
files (the "Software"), to deal in the Software without
restriction, including without limitation the rights to use,
copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the
Software is furnished to do so, subject to the following
conditions:

The above copyright notice and this permission notice shall be
included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND,
EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES
OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND
NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT
HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY,
WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING
FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR
OTHER DEALINGS IN THE SOFTWARE.