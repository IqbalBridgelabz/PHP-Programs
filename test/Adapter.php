<?php
/********************************************************************************************
 * Purpose : Use Adapter Pattern to create a Book and Author deatils 
 * File Name: AdapterPattern.php
 * Author   : @Hamid Iqbal Khan
 * Version  : 1.0
 * Since    : 31/01/2019
 ********************************************************************************************/
class SimpleBook {
    private $author;
    private $title;
    /**
     * Constructor of SimpleBook
     */
    function __construct($author_in, $title_in) {
        $this->author = $author_in;
        $this->title  = $title_in;
    }
    /**
     * Returns the Author name
     */
    function getAuthor() {
        return $this->author;
    }
    /**
     * Returns the Title
     */
    function getTitle() {
        return $this->title;
    }
}
/**
 * Class to implements book adapter
 */
class BookAdapter {
    private $book;
    function __construct(SimpleBook $book_in) {
        $this->book = $book_in;
    }
    /**
     * Returns the Title and Author details
     */
    function getAuthorAndTitle() {
        return $this->book->getTitle().' by '.$this->book->getAuthor();
    }
}
  echo "\nBEGIN TESTING ADAPTER PATTERN\n\n";
  $book = new SimpleBook('Hamid Iqbal Khan','PHP');
  $bookAdapter = new BookAdapter($book);
  echo "Title and Author: ".$bookAdapter->getAuthorAndTitle()."\n";
  echo "\nEND TESTING ADAPTER PATTERN\n\n";
?>