<?php
require_once  ("BookList.php");
require_once  ("ProxyBookList.php");
class Book {
    private $author;
    private $title;
    function __construct($title_in, $author_in) {
      $this->author = $author_in;
      $this->title  = $title_in;
    }
    function getAuthor() {
        return $this->author;
    }
    function getTitle() {
        return $this->title;
    }
    function getAuthorAndTitle() {
      return $this->getTitle().' by '.$this->getAuthor();
    }
}

  echo "BEGIN TESTING PROXY PATTERN\n";

  $proxyBookList = new ProxyBookList();
  $inBook = new Book('PHP Design Pattern',' By Hamid Iqbal');
  $proxyBookList->addBook($inBook);
 
  echo "Test 1 - show the book count after a book is added\n";
  echo $proxyBookList->getBookCount();
 
  echo " Book is Added";
  echo "\nTest 2 - show the book\n";
  $outBook = $proxyBookList->getBook(1);
  echo($outBook->getAuthorAndTitle()); 

 
  $proxyBookList->removeBook($outBook);
  
  echo "\nTest 3 - show the book count after a book is removed\n";
  
  echo($proxyBookList->getBookCount());
  echo " no of book remains";


  echo "\nEND TESTING PROXY PATTERN\n";
?>