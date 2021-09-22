<?php namespace DesignPatterns\Creational\AbstractFactory;

class SteelDoorFactory implements DoorFactory
{
  public function makeDoor(): Door
  {
    return new SteelDoor();
  }

  public function makeFittingExpert(): DoorFittingExpert
  {
    return new Welder();
  }
}