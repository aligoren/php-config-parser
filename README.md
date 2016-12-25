# PHP Config Parser

PHP Config Class. Simple, Fast and Useful

## Usage

Current `Settings.php` file include most common options. But if you want to customize all settings, edit `Settings.php` file with your favorite text editor. Create your configs:

```php
// Settings.php

return [
  'myxample' => 'This is my example',
  'nested'  => [
    'example' => 'Good Part',
    'deep' => [
      'config' => 'This is deep config'
    ]
  ]
]
```

When you use the config class, call Config.php

```php
//index.php

require_once 'Config.php';

echo "<pre>";
print_r(Config::Get('myxample')); // get one option
print_r(Config::Get('nested')); // get nested options with sub options
print_r(Config::Get('nested.example')); // get nested one option
print_r(Config::Get('nested.deep.config')); // get deep option
print_r(Config::Get()); // get all options
echo "</pre>";
```
