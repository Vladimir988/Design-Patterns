<?php namespace DesignPatterns\Creational\AbstractFactory;

class Welder implements DoorFittingExpert
{
  public function getDescription()
  {
    return 'I\'m working only with steel doors!';
  }
}