PHP Coding Standards
================================

This project contains a reusable rule-set for the `symplify/easy-coding-standard` package.

Example Configuration
--------------

```bash
 composer require webtoolshealth/php-coding-standard
```

Create a new file called `ecs.php` in the root of your project
```php
<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symplify\EasyCodingStandard\ValueObject\Option;
use Webtoolshealth\CodingStandard\Set;

return static function (ContainerConfigurator $container): void {
    $parameters = $container->parameters();

    $parameters->set(Option::PATHS, [
        __DIR__ . '/app',
        __DIR__ . '/config',
        __DIR__ . '/database',
        __DIR__ . '/routes',
        __DIR__ . '/tests',
    ]);

    $container->import(Set::WEBTOOLS_CODING_STANDARD);
};
```

You can add the following scripts to your projects `composer.json`
```json
"scripts": {
  "ecs": "vendor/bin/ecs check",
  "ecs-fix": "vendor/bin/ecs check --fix",
}
```



