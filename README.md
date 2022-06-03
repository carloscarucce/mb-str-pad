# mb_str_pad()

## Installing

```
composer require carloscarucce/mb-str-pad
```

## Usage

```php
include 'vendor/autoload.php';

$input = 'My text';
$length = 20;
$padding = ' '; // Optional. Default: ' '
$padType = STR_PAD_RIGHT; // Optional. Use STR_PAD_RIGHT, STR_PAD_LEFT or STR_PAD_BOTH. Default: STR_PAD_RIGHT   
$encoding = null; //Optional. Default: null

$result = mb_str_pad($input, $length, $padding, $padType, $encoding);
var_dump($result); // string(20) "My text             "
```

## Run tests:

```
composer test
```