## Bluesnap PHP Library

This library is a fork from the original author [tdanielcox](https://github.com/tdanielcox/bluesnap-php)

At the moment, library currently supports:

- CardTransactions
- VaultedShoppers
- Vendors
- Subscriptions
- Plans (Subscriptions)
- Refunds
- Reports

### Installation

Install this package with composer

```shell
composer require chistel/bluesnap_php
```

### Usage

Initialize the library in your class constructor 

```php
public function __construct()
{
    $environment = 'sandbox'; // or 'production'
    \Chistel\Bluesnap\Bluesnap::init($environment, 'YOUR_API_KEY', 'YOUR_API_PASSWORD');
}
```

Create a New Transaction

```php
public function createTransaction()
{
    $response = \Chistel\Bluesnap\CardTransaction::create([
        'creditCard' => [
            'cardNumber' => '4263982640269299',
            'expirationMonth' => '02',
            'expirationYear' => '2018',
            'securityCode' => '837'
        ],
        'amount' => 10.00,
        'currency' => 'USD',
        'recurringTransaction' => 'ECOMMERCE',
        'cardTransactionType' => 'AUTH_CAPTURE',
    ]);

    if ($response->failed())
    {
        $error = $response->data;
        
        // handle error
    }

    return $response->data;
}
```

#### See [examples](https://github.com/tdanielcox/bluesnap-php/tree/master/examples) for further details on using the library

## License
This package is licensed under the [MIT License](https://github.com/tdanielcox/bluesnap-php/blob/master/LICENSE)
