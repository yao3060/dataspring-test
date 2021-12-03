# dataspring-test

- Author: Yao Yingying

## Get Greeting

### Requirements

- php 8+
- phpunit 9+
- composer 2+
- vlucas/phpdotenv
- symfony/var-dumper

### Testing

how to test

```shell
# 1. install php packages and optimize autoload
composer install
composer dump-autoload -o
# 2. exec php test
php src/index.php
# 3. exec phpunit test
./vendor/bin/phpunit
```
