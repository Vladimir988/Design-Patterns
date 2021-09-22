<?php namespace DesignPatterns\Creational\FabricMethod;

class DevelopmentManager extends HiringManager
{
  public function makeInterviewer(): Interviewer
  {
    return new Developer();
  }
}