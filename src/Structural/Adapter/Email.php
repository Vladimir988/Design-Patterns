<?php namespace DesignPatterns\Structural\Adapter;

class Email implements Notification
{
  private $adminEmail = 'some@mail.com';

  public function send(string $title, string $message)
  {
    echo "Sent email with title '$title' to '{$this->adminEmail}' that says '$message'.";
  }
}