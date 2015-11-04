# Package Boilerplate
A PHP Package boilerplate.

## Configurations
There are two files that need to be configured before you start developing your package:

- config.php
- autoload.php

In these two files there's a defined constant **PACKAGE_PATH**. Change this to your package name so there's no conflicts with other packages. You may want to wrap your constant in a if / throw exception block as a failsafe.

## Tests
Currently configured for PHPUnit, you may change this to your preferred testing framework. Otherwise configure PHPUnit like you normally would and run tests from the bash directory of your package ie:

```
phpunit --configuration test/phpunit.xml
```
