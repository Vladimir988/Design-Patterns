<?php require_once __DIR__ . '/vendor/autoload.php';

use DesignPatterns\Creational\SimpleFactory\DoorFactory;

/**
 * SimpleFactory
 */
$door = DoorFactory::makeDoor( 100, 200 );
echo 'Width: '  . $door->getWidth()  . PHP_EOL;
echo 'Height: ' . $door->getHeight() . PHP_EOL;