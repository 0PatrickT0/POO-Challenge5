<?php
// index.php
require_once 'Bicycle.php';
require_once 'Car.php';
require_once 'Truck.php';
require_once 'Skateboard.php';
require_once 'HighWay.php';
require_once 'MotorWay.php';
require_once 'ResidentialWay.php';
require_once 'PedestrianWay.php';

// Instanciation
$car = new Car('grey', 4, 'electric');
//echo $car->forward();
//var_dump($car);

$bike = new Bicycle('white', 1);
//echo $bike->forward();
//var_dump($bike);

// Moving car
try {
    $car->start();
} catch (Exception $e) {
    echo '<br> Exception : ' . $e->getmessage();
    echo '<br> Retirer le frein à main';
    $car->setParkBrake(false);
} finally {
    echo '<br>' . $car->forward();
    echo '<br> Ma voiture roule comme un donut';
    if ($car->switchOn()) {
        echo '<br> Phares allumés<br>';
    } else {
        echo '<br> Phares éteints<br>';
    }
}

// Bicycle

echo $bike->start();
echo '<br> Vitesse du véhicule : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
if ($bike->switchOn()) {
    echo 'Phare allumé<br>';
} else {
    echo 'Phare éteint<br>';
}
echo $bike->forward();
echo '<br> Vitesse du véhicule : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
if ($bike->switchOn()) {
    echo 'Phare allumé<br>';
} else {
    echo 'Phare éteint<br>';
}
echo $bike->brake();
echo '<br> Vitesse du véhicule : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
if ($bike->switchOn()) {
    echo 'Phare allumé<br>';
} else {
    echo 'Phare éteint<br>';
}

