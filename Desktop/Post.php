<?php

class Post
{
  private $text;

  function __construct($text)
  {
    if (strlen($text) <= 3){
      throw new Exception('Text too short!');
    }
    $this->text = $text;
  }

  function show()
  {
    printf('%s' . PHP_EOL, $this->text);
  }
}
