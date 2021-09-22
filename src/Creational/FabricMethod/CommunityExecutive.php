<?php namespace DesignPatterns\Creational\FabricMethod;

class CommunityExecutive implements Interviewer
{
  public function askQuestion()
  {
    return 'Asked about working with peoples';
  }
}