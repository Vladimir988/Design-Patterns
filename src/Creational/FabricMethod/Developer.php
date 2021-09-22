<?php namespace DesignPatterns\Creational\FabricMethod;

class Developer implements Interviewer
{
  public function askQuestion()
  {
    return 'Asked about creational patterns';
  }
}