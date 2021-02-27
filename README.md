## Instructions

1. run `composer update`
2. run `vendor/bin/phpunit` or `vendor/bin/pest` and see that tests pass
3. comment out the indicated lines in `AppServiceProvider`
4. run tests again to see that the second test now fails with a `BindingResolutionException`
