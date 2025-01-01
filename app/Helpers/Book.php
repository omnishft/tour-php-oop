<?php

declare(strict_types=1);

Class Book
{

  public string $title;
  public string $author;

  public function __construct(string $title, string $author)
  {

    $this->title = $title;
    $this->author = $author;

  }
   
  
}
