<?php

declare(strict_types=1);

Class Ebook extends Book
{

  public string $file_size;

  public function __construct(string $title, string $author, string $file_size)
  {

    parent::__construct($title ,$author);

    $this->file_size = $file_size;
    

  }
   
  
}
