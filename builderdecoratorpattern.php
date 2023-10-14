<?php
// Component interface
interface Coffee {
    public function cost();
}

// Concrete Component
class SimpleCoffee implements Coffee {
    public function cost() {
        return 5; // Base cost of a simple coffee
    }
}

// Decorator
class CoffeeDecorator implements Coffee {
    protected $coffee;

    public function __construct(Coffee $coffee) {
        $this->coffee = $coffee;
    }

    public function cost() {
        return $this->coffee->cost();
    }
}

// Concrete Decorators
class MilkDecorator extends CoffeeDecorator {
    public function cost() {
        return parent::cost() + 2; // Add cost of milk
    }
}

class SugarDecorator extends CoffeeDecorator {
    public function cost() {
        return parent::cost() + 1; // Add cost of sugar
    }
}

// Builder for creating decorated coffee
class CoffeeBuilder {
    private $coffee;

    public function __construct() {
        $this->coffee = new SimpleCoffee();
    }

    public function addCoffee() {
        return $this;
    }

    public function addMilk() {
        $this->coffee = new MilkDecorator($this->coffee);
        return $this;
    }

    public function addSugar() {
        $this->coffee = new SugarDecorator($this->coffee);
        return $this;
    }

    public function build() {
        return $this->coffee;
    }
}

// Usage with the builder
$coffee = (new CoffeeBuilder())->addCoffee()->addMilk()->addSugar()->build();
echo "Cost of custom coffee: $" . $coffee->cost() . "\n";
?>