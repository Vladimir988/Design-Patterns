<?php namespace DesignPatterns\Creational\AbstractFactory;

class WoodenDoor implements Door
{
  public function getDescription()
  {
    return 'It is wooden door!';
  }
}