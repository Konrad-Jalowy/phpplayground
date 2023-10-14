<?php 
// Observer interface for price changes
interface PriceObserver {
    public function updatePrice($newPrice);
}

// Concrete PriceChangeObserver
class PriceChangeObserver implements PriceObserver {
    private $observers = [];

    public function addObserver(PriceObserver $observer) {
        $this->observers[] = $observer;
    }

    public function updatePrice($newPrice) {
        foreach ($this->observers as $observer) {
            $observer->updatePrice($newPrice);
        }
    }
}

// Singleton for MilkPrice
class MilkPrice implements PriceObserver {
    private static $instance;
    private $price = 2;

    private function __construct() {}

    public static function getInstance() {
        if (self::$instance === null) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function getPrice() {
        return $this->price;
    }

    public function updatePrice($newPrice) {
        $this->price = $newPrice;
    }
}

// Singleton for SugarPrice
class SugarPrice implements PriceObserver {
    private static $instance;
    private $price = 1;

    private function __construct() {}

    public static function getInstance() {
        if (self::$instance === null) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function getPrice() {
        return $this->price;
    }

    public function updatePrice($newPrice) {
        $this->price = $newPrice;
    }
}

// Singleton for BaseCoffeePrice
class BaseCoffeePrice implements PriceObserver {
    private static $instance;
    private $price = 5;

    private function __construct() {}

    public static function getInstance() {
        if (self::$instance === null) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function getPrice() {
        return $this->price;
    }

    public function updatePrice($newPrice) {
        $this->price = $newPrice;
    }
}

// Decorator with variable cost
class MilkDecorator extends CoffeeDecorator {
    private $milkPrice;

    public function __construct(Coffee $coffee, MilkPrice $milkPrice) {
        parent::__construct($coffee);
        $this->milkPrice = $milkPrice;
    }

    public function cost() {
        return parent::cost() + $this->milkPrice->getPrice();
    }
}

class SugarDecorator extends CoffeeDecorator {
    private $sugarPrice;

    public function __construct(Coffee $coffee, SugarPrice $sugarPrice) {
        parent::__construct($coffee);
        $this->sugarPrice = $sugarPrice;
    }

    public function cost() {
        return parent::cost() + $this->sugarPrice->getPrice();
    }
}

class CoffeeBuilder {
    private $coffee;

    public function __construct(BaseCoffeePrice $basePrice) {
        $this->coffee = new SimpleCoffee($basePrice);
    }

    public function addCoffee() {
        return $this;
    }

    public function addMilk(MilkPrice $milkPrice) {
        $this->coffee = new MilkDecorator($this->coffee, $milkPrice);
        return $this;
    }

    public function addSugar(SugarPrice $sugarPrice) {
        $this->coffee = new SugarDecorator($this->coffee, $sugarPrice);
        return $this;
    }

    public function build() {
        return $this->coffee;
    }
}

// Usage
$basePrice = BaseCoffeePrice::getInstance();
$milkPrice = MilkPrice::getInstance();
$sugarPrice = SugarPrice::getInstance();

$coffeeBuilder = new CoffeeBuilder($basePrice);

$coffee = $coffeeBuilder->addCoffee($basePrice)
    ->addMilk($milkPrice)
    ->addSugar($sugarPrice)
    ->build();

echo "Cost of custom coffee: $" . $coffee->cost() . "\n";

// Simulate a price change
$basePrice->updatePrice(6); // New base coffee price is $6
$milkPrice->updatePrice(3); // New milk price is $3
$sugarPrice->updatePrice(2); // New sugar price is $2

// The decorators (MilkDecorator and SugarDecorator) are now updated with the new prices
echo "Updated cost of custom coffee: $" . $coffee->cost() . "\n";
?>