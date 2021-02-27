## Instructions

1. Run:
```bash
composer update
cp .env.example .env
php artisan key:generate

vendor/bin/phpunit # or vendor/bin/pest
```

2. see that tests fail with a `BindingResolutionException`
3. comment out the indicated lines in `AppServiceProvider`
4. run tests again to see that the second test now passes
