<?php namespace DesignPatterns\Creational\FabricMethod;

abstract class HiringManager
{
  // fabric method
  abstract public function makeInterviewer(): Interviewer;

  public function takeInterview()
  {
    return $this->makeInterviewer()->askQuestion();
  }
}