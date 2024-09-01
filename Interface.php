// Interface
interface Vehicle {
    public function start();
    public function stop();
}

// Class implementing the interface
class Car implements Vehicle {
    public function start() {
        echo "Car started." . PHP_EOL;
    }
    
    public function stop() {
        echo "Car stopped." . PHP_EOL;
    }
}

// Class implementing the interface
class Motorcycle implements Vehicle {
    public function start() {
        echo "Motorcycle started." . PHP_EOL;
    }
    
    public function stop() {
        echo "Motorcycle stopped." . PHP_EOL;
    }
}

// Usage
$car = new Car();
$car->start(); // Output: Car started.
$car->stop(); // Output: Car stopped.

$motorcycle = new Motorcycle();
$motorcycle->start(); 
$motorcycle->stop(); 

