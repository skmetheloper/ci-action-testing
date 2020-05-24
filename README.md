# CI-Action-Testing

![PHP](https://github.com/skmetheloper/ci-action-testing/workflows/PHP/badge.svg?branch=master)

```php
//* file: public/index.php

require __DIR__.'/../vendor/autoload.php';

$app = new Ethereal\Foundation\Application(
    env('APP_BASE_DIR', dirname(__DIR__))
);

```
