<?php
class Singleton {
    private static $instance = null;

    private function __construct() {
        // Private constructor to prevent direct instantiation.
    }

    public static function getInstance() {
        if (self::$instance === null) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function doSomething() {
        echo "Singleton is doing something.\n";
    }
}

// Usage
$singleton1 = Singleton::getInstance();
$singleton1->doSomething();

$singleton2 = Singleton::getInstance();
$singleton2->doSomething();

// Both $singleton1 and $singleton2 are the same instance
var_dump($singleton1 === $singleton2); // Output: true
?>