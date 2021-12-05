<?php require_once __DIR__ . '/vendor/autoload.php';

/* =============== Creational =============== */
use DesignPatterns\Creational\SimpleFactory\DoorFactory;
use DesignPatterns\Creational\FabricMethod\DevelopmentManager;
use DesignPatterns\Creational\AbstractFactory\WoodenDoorFactory;
use DesignPatterns\Creational\AbstractFactory\SteelDoorFactory;
use DesignPatterns\Creational\Builder\BurgerBuilder;
use DesignPatterns\Creational\Prototype\Sheep;
use DesignPatterns\Creational\Singleton\President;
/* =============== Structural =============== */
use DesignPatterns\Structural\Adapter\Email;
use DesignPatterns\Structural\Adapter\WebEmail;
use DesignPatterns\Structural\Adapter\WebEmailAdapter;
use DesignPatterns\Structural\Adapter\ClientCode as AdapterClientCode;
use DesignPatterns\Structural\Proxy\MainSubject;
use DesignPatterns\Structural\Proxy\Proxy;
use DesignPatterns\Structural\Proxy\ClientCode as ProxyClientCode;
/* =============== Behavioral =============== */

/**
 * Simple Factory
 */
$door = DoorFactory::makeDoor( 100, 200 );
//echo 'Width: '  . $door->getWidth()  . PHP_EOL;
//echo 'Height: ' . $door->getHeight() . PHP_EOL;

/**
 * Fabric Method
 */
$devManager = new DevelopmentManager();
//echo $devManager->takeInterview();

/**
 * Abstract Factory
 */
$woodenFactory = new WoodenDoorFactory();
$door   = $woodenFactory->makeDoor();
$expert = $woodenFactory->makeFittingExpert();
//echo $door->getDescription()   . PHP_EOL;
//echo $expert->getDescription() . PHP_EOL;

$steelFactory = new SteelDoorFactory();
$door   = $steelFactory->makeDoor();
$expert = $steelFactory->makeFittingExpert();
//echo $door->getDescription()   . PHP_EOL;
//echo $expert->getDescription() . PHP_EOL;

/**
 * Builder
 */
$burget = (new BurgerBuilder( 20 ))
                ->addCheese()
                ->addLettuce()
                ->addPepperoni()
                ->addTomato()
                ->build();
//echo $burget;

/**
 * Prototype
 */
$original = new Sheep( 'Dolly' );
//echo $original->getName()     . PHP_EOL;
//echo $original->getCategory() . PHP_EOL;

$cloned = clone $original;
$cloned->setName( 'Holly' );
//echo $cloned->getName()     . PHP_EOL;
//echo $cloned->getCategory() . PHP_EOL;

/**
 * Singleton
 */
$president1 = President::getInstance();
$president2 = President::getInstance();
//var_dump( $president1 === $president2 ); // true

/**
 * Adapter
 */
$email       = new Email();
$senderEmail = new AdapterClientCode($email);
//$senderEmail->send('title', 'message');

$webEmail        = new WebEmail();
$webEmailAdapter = new WebEmailAdapter($webEmail);
$senderWebEmail  = new AdapterClientCode($webEmailAdapter);
//$senderWebEmail->send('title', 'message');

/**
 * Proxy
 */
$mainSubject = new MainSubject();
$client1     = new ProxyClientCode($mainSubject);
//$client1->request();

$proxy       = new Proxy($mainSubject);
$client2     = new ProxyClientCode($proxy);
//$client2->request();