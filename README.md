## Useragent analyzer

This is an auxiliary project / tool for identifying the brand and model of the device based on the useragent string


## Testing

The template comes with ready to use [Codeception](https://codeception.com/) configuration.
In order to execute tests run:

```
composer run serve > ./runtime/yii.log 2>&1 &
vendor/bin/codecept run
```
