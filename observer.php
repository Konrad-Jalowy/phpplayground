<?php
// Subject (Observable)
class Subject {
    private $observers = [];

    public function addObserver(Observer $observer) {
        $this->observers[] = $observer;
    }

    public function removeObserver(Observer $observer) {
        $index = array_search($observer, $this->observers);
        if ($index !== false) {
            unset($this->observers[$index]);
        }
    }

    public function notifyObservers($message) {
        foreach ($this->observers as $observer) {
            $observer->update($message);
        }
    }
}

// Observer (Subscriber)
interface Observer {
    public function update($message);
}

// Concrete Subject
class WeatherStation extends Subject {
    public function setWeather($weather) {
        $this->notifyObservers("Weather is now $weather");
    }
}

// Concrete Observer
class WeatherObserver implements Observer {
    public function update($message) {
        echo "WeatherObserver received message: $message\n";
    }
}

// Another Concrete Observer
class TrafficObserver implements Observer {
    public function update($message) {
        echo "TrafficObserver received message: $message\n";
    }
}

// Usage
$weatherStation = new WeatherStation();
$weatherObserver = new WeatherObserver();
$trafficObserver = new TrafficObserver();

$weatherStation->addObserver($weatherObserver);
$weatherStation->addObserver($trafficObserver);

$weatherStation->setWeather("Sunny");
?>