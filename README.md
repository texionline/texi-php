# Texi PHP Library

This PHP library provides convenient methods to interact with the TexiOnline API, enabling you to easily integrate SMS functionality into your PHP applications.

## Installation

To install the Texi PHP library, you can use Composer:

```php
composer require texionline/texi-php
```

## Usage

```php
// Include the Texi PHP library
require_once('path/to/texi.php');

// Set up your API key and other configurations
$apikey = 'YOUR_API_KEY';
$recipient = 'PHONE_NUMBER';
$message = 'Your SMS message here';

// Send an SMS using TexiOnline
texi_send('https://texionline.com', $api_key, $recipient, $message);
```

Make sure to replace 'YOUR_API_KEY', 'PHONE_NUMBER', and 'Your SMS message here' with your actual API key, recipient phone number, and message content.

## API Reference

`texi($base_url, $apikey, $recipient, $message)`

Sends an SMS using the TexiOnline API.

* $base_url: The base URL for the TexiOnline API.
* $apikey: Your TexiOnline API key.
* $recipient: The phone number of the SMS recipient.
* $message: The content of the SMS message to be sent.

## Contributing

Contributions are welcome! If you find any issues or have suggestions for improvements, please submit an issue or a pull request.

## License

This project is licensed under the MIT License - see the LICENSE file for details.
