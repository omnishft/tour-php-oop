<?php

require_once "Book.php";

Class WishList
{

  public $wishlist = [];

  public function add_book_to_wishlist(Book $book) :void
  {

    $this->wishlist[] = $book;

  }

  public function add_ebook_to_wishlist(Book $ebook) :void
  {

    $this->wishlist[] = $ebook;

  }

  public function get_all_books(): void
  {
    
    foreach($this->wishlist as $book)
    {
      if(!($book instanceof Ebook)){
        print "Title: ". $book->title ." ". "Author: ".$book->author. PHP_EOL;

      }else{

        print "Title: ". $book->title ." ". "Author: ".$book->author.  "Filesize: ".$book->file_size.PHP_EOL;

      }
    }

  }




}
