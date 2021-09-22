<?php namespace DesignPatterns\Creational\AbstractFactory;

class Carpenter implements DoorFittingExpert
{
  public function getDescription()
  {
    return 'I\'m working only with wooden doors!';
  }
}