# PHP Strings Basics

## Built-in functions

### lcfirst($str)
**Makes first letter lowercase**
```php
$foo = 'HelloWorld';
$foo = lcfirst($foo);             // helloWorld
```
### ucfirst($str)
**Makes first letter uppercase**
```php
$foo = 'hello world!';
$foo = ucfirst($foo);             // Hello world!
```

### ucwords($str, $optionalSeparators)
**Makes first letter in each word uppercase**
```php
$foo = 'hello world!';
$foo = ucwords($foo);             // Hello World!
```
```php
$foo = 'hello|world!';
$bar = ucwords($foo);             // Hello|world!

$baz = ucwords($foo, "|");        // Hello|World!
```
### strrev($str)
**Reverses string**
```php
echo strrev("Hello world!"); // outputs "!dlrow olleH"
```
### implode($separator, $array)
**Joins array into string**
```php
$array = ['lastname', 'email', 'phone'];
var_dump(implode(",", $array)); // string(20) "lastname,email,phone"
var_dump(implode(['a', 'b', 'c'])); // string(3) "abc"
```