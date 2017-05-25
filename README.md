This is a package for PHP which simplifies the setup of autoloading.

## Example Usage

```
<?php
require_once(__DIR__ . '/vendor/autoload.php'); # this autoloads all vendor packages

$classFolders = array(
    __DIR__ . '/controllers',
    __DIR__ . '/libs',
    __DIR__ . '/views',
    __DIR__ . '/middleware',
    __DIR__ . '/models',
);

$autoloader = new iRAP\Autoloader\Autoloader($classFolders);
```

That's it! Now all of your classes will automatically load. You don't need to use any `include` or `require` statements.
