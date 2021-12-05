<?php namespace DesignPatterns\Structural\Adapter;

class WebEmail
{
  public function sendMessage(string $message)
  {
    // Send message post request to web service.
    echo "Posted following message into the chat: '$message'.\n";
  }
}