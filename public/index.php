<?php

// declare(strict_types=1)

require_once "./app/Helpers/WishList.php";
require_once "./app/Helpers/Book.php";
require_once "./app/Helpers/Ebook.php";

$wishlist = new WishList();
$book1 = new Book("Dune","Frank Herbert");
$book2 = new Book("Lord of the Rings","J.R.R.Tolkien");

$ebook1 = new Ebook("Lord of the Rings","J.R.R.Tolkien","1mb");
$ebook2 = new Ebook("Of mice and men","John Steinbeck","1mb");

$wishlist->add_book_to_wishlist($book1);
$wishlist->add_book_to_wishlist($book2);
$wishlist->add_ebook_to_wishlist($ebook1);
$wishlist->add_ebook_to_wishlist($ebook2);


 // var_dump($wishlist); 

$wishlist->get_all_books();
