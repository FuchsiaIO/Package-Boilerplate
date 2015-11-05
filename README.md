# Package Boilerplate
A PHP Package boilerplate.

## Configurations
There are two files that need to be configured before you start developing your package:

- config.php
- autoload.php

In these two files there's a defined constant **PACKAGE_PATH**. Change this to your package name so there's no conflicts with other packages. You may want to wrap your constant in a if / throw exception block as a failsafe.

The Package Namespace also needs to be set. If we had a package HelloWorld with the class Greeter in the src, its namespace should be specified as follows:

```
namespace HelloWorld;
class Greeter...
```

## Naming Converntions
PHP is strict about having camel-cased class names. Same conventions are applied here. However, file names are all lowercased and underscored where letters are camel-cased. For example a class named GreeterDecorator, the file name would be:

```
hello_greeter.php
``` 

## Tests
Currently configured for PHPUnit, you may change this to your preferred testing framework. Otherwise configure PHPUnit like you normally would and run tests from the bash directory of your package ie:

```
phpunit --configuration test/phpunit.xml
```
