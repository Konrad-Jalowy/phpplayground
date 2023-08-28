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
### explode(string $separator, string $string, int $limit = PHP_INT_MAX): array
**String to array split**
```php
$pizza  = "piece1 piece2 piece3 piece4 piece5 piece6";
$pieces = explode(" ", $pizza);
```
```php
$data = "foo:*:1023:1000::/home/foo:/bin/sh";
list($user, $pass, $uid, $gid, $gecos, $home, $shell) = explode(":", $data);
echo $user; // foo
echo $pass; // *
```
### strlen(string $string): int
**Returns length of a string**
```php
$str = 'abcdef';
echo strlen($str); // 6

$str = ' ab cd ';
echo strlen($str); // 7
```
### str_repeat(string $string, int $times): string
**Returns string repeated times**
```php
echo str_repeat("-=", 10);
//-=-=-=-=-=-=-=-=-=-=
```
### str_pad()
**Self descriptive**
```php
$input = "Alien";
echo str_pad($input, 10);                      // produces "Alien     "
echo str_pad($input, 10, "-=", STR_PAD_LEFT);  // produces "-=-=-Alien"
echo str_pad($input, 10, "_", STR_PAD_BOTH);   // produces "__Alien___"
echo str_pad($input,  6, "___");               // produces "Alien_"
echo str_pad($input,  3, "*");                 // produces "Alien"
```
### wordwrap()
**Self descriptive**
```php
$text = "The quick brown fox jumped over the lazy dog.";
$newtext = wordwrap($text, 20, "<br />\n");

echo $newtext;
//The quick brown fox<br />
//jumped over the lazy<br />
//dog.
```