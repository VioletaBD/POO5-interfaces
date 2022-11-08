<?php

require '../src/Cars.php';

$car = new Car('green', '4', 'electric', '10');
echo $car->forward();
var_dump($car);


require_once '../src/Bicycle.php';

$bicycle = new Bicycle('blue', '1');
echo $bicycle->forward();
var_dump($bicycle);

require_once '../src/Truck.php';

$camion = new Truck('red', '2', 'electric', '50', 'Yes');

echo $camion->forward() . PHP_EOL;
var_dump($camion);
var_dump(Truck::ALLOWED_ENERGIES);

?>