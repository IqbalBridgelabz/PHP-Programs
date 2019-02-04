<?php
require_once("SingletonPattern.php");
/**
 * class BookSingleton which implements Singleton pattern
 */
class BookSingleton {
    private $author;
    private $title;
    // private $author = 'Hamid Iqbal Khan';
    // private $title  = 'Design Patterns';
    private static $book = NULL;
    private static $check = FALSE;
    /**
     * Initialization of  Private Constructor That restrict the accessing the object from another class
     */
    private function __construct($author,$title) {
      $this->author = $author;
      $this->title = $title;
    }
    /**
     * Static Function of Lazy Initialization 
     */
    static function borrowBook($author,$title) {
      if (FALSE == self::$check) {
        if (NULL == self::$book) {
           self::$book = new BookSingleton($author,$title);
        }
        self::$check = TRUE;
        return self::$book;
      } else {
        return NULL;
    }
}
    /**
     * Function to return Book Details
     */
    function returnBook(BookSingleton $bookReturned) {
        self::$check = FALSE;
    }
    /**
     * To get Author Details
     */
    function getAuthor(){
        return $this->author;
    }
    /**
     * To get Book Title Details
     */
    function getTitle(){
        return $this->title;
    }
    /**
     * To get both Author and Title Details
     */
    function getAuthorAndTitle(){
      return $this->getTitle() . ' by ' . $this->getAuthor();
    }
}