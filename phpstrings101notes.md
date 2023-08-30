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
### trim()
### ltrim()
### rtrim() // chop()
**Self-descriptive**
### str_replace($search, $replace, $subject);
### str_ireplace($search, $replace, $subject);
**Replace search in subject**
```php
$bodytag = str_ireplace("%body%", "black", "<body text=%BODY%>");
echo $bodytag; // <body text=black>
```
### preg_replace()
**Self-descriptive**
```php
$route = "{id:\d}";
$route = preg_replace('/\{([a-z]+):([^\}]+)\}/', '(?P<\1>\2)', $route);
echo $route; //(?P\d)
```

### strpbrk($string, $char)
**Breaks from given character till the end**
```php
$url = "https://www.google.pl/search?q=hello+world";
echo "$url<br>";
echo strpbrk($url, "?"); //?q=hello+world
```

### strstr(string $haystack, string $needle, bool $before_needle = false): string|false
### strchr
**Returns part of haystack string starting from and including the first occurrence of needle to the end of haystack.**
```php
$email  = 'name@example.com';
$domain = strstr($email, '@');
echo $domain; // prints @example.com

$user = strstr($email, '@', true);
echo $user; // prints name
```
### strrchr(string $haystack, string $needle): string|false
**This function returns the portion of haystack which starts at the last occurrence of needle and goes until the end of haystack.**

### strpos(string $haystack, string $needle, int $offset = 0): int|false
**Find the numeric position of the first occurrence of needle in the haystack string.**
```php
// We can search for the character, ignoring anything before the offset
$newstring = 'abcdef abcdef';
$pos = strpos($newstring, 'a', 1); // $pos = 7, not 0
```
### substr_count(string $haystack, string $needle, int $offset = 0, ?int $length = null):
**substr_count() returns the number of times the needle substring occurs in the haystack string. Please note that needle is case sensitive.**
```php
$text = 'This is a test';
echo strlen($text); // 14

echo substr_count($text, 'is'); // 2

// the string is reduced to 's is a test', so it prints 1
echo substr_count($text, 'is', 3);

// the text is reduced to 's i', so it prints 0
echo substr_count($text, 'is', 3, 3);
```
### strcmp(string $string1, string $string2): int
**Compare two strings, binary safe**
### strcasecmp(string $string1, string $string2): int
**Binary safe case-insensitive string comparison. The comparison is not locale aware; only ASCII letters are compared in a case-insensitive way.**
```php
$var1 = "Hello";
$var2 = "hello";
if (strcasecmp($var1, $var2) == 0) {
    echo '$var1 is equal to $var2 in a case-insensitive string comparison';
}
```
### strncmp(string $string1, string $string2, int $length): int
**This function is similar to strcmp(), with the difference that you can specify the (upper limit of the) number of characters from each string to be used in the comparison.**
```php
$var1 = 'Hello John';
$var2 = 'Hello Doe';
if (strncmp($var1, $var2, 5) === 0) {
    echo 'First 5 characters of $var1 and $var2 are equals in a case-sensitive string comparison';
}
```
### strncasecmp(string $string1, string $string2, int $length): int
**This function is similar to strcasecmp(), with the difference that you can specify the (upper limit of the) number of characters from each string to be used in the comparison.**
```php
$var1 = 'Hello John';
$var2 = 'hello Doe';
if (strncasecmp($var1, $var2, 5) === 0) {
    echo 'First 5 characters of $var1 and $var2 are equals in a case-insensitive string comparison';
}
```
### str_shuffle(string $string): string
**self-descriptive**
### chr(int $codepoint): string
**self-descriptive**
### ord(string $character): int
**self-descriptive**
### nl2br(string $string, bool $use_xhtml = true): string
**self-descriptive**
## Custom functions
### toCamelCase()
```php
function toCamel($string) {
        return lcfirst(str_replace(' ', '', ucwords(str_replace('-', ' ', $string))));
    }

    $myString = 'post-blog-tag';
    echo toCamel($myString);
```

## Custom classes
### EmailAddr class
```php
class EmailAddr {
    
    public $email;

    public function __construct($email)
    {
        $this->email = $email;
    }

    public function setEmail($email){
        $this->email = $email;
     }
     public function getEmail(){
        return $this->email;
     }
    
     public function isValid()
     {
        return (bool)filter_var($this->email, FILTER_VALIDATE_EMAIL);
     }

     public function getName() {
        return strstr($this->email, '@', true);
     }

     public function getDomain() {
        return strstr($this->email, '@');
     }

     public function getLastDomainPart()
     {
        return strrchr($this->email, '.');
     }
}

$email = new EmailAddr('name@example.com');
echo $email->isValid(); //1
echo "<br>";
echo $email->getEmail(); //name@example.com
echo "<br>";
echo $email->getName(); //name
echo "<br>";
echo $email->getDomain(); //@example.com
echo "<br>";
echo $email->getLastDomainPart(); //.com
echo "<br>";
```