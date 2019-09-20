Before PHP 7.4.0 RC2:
```
 $ composer install
 $ php code.php
bool(true)
string(1) "A"
```

With PHP 7.4.0 RC2
```
 $ composer install
 $ php code.php
bool(false)
string(1) "A"
```


Issue is present since https://github.com/php/php-src/commit/11f3e24190fa45689c8ccaeea54a28db6752092e