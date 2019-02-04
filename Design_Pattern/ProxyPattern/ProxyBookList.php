<?php
/**
 * class ProxyBookList that implements the all related operation of book class
 */
class ProxyBookList {
    private $bookList = NULL; 
    /**
     * default constructor
     */
    function __construct() {
    }
   /**
     * method to get bookCount
     */
    function getBookCount() {
        if (NULL == $this->bookList) {
            $this->makeBookList(); 
        }
        return $this->bookList->getBookCount();
    }
     /**
     * method to add number of books
     */
    function addBook($book) {
        if (NULL == $this->bookList) {
            $this->makeBookList(); 
        }
        return $this->bookList->addBook($book);
    }  
    /**
     * method to get Book details
     */
    function getBook($bookNum) {
        if (NULL == $this->bookList) {
            $this->makeBookList();
        } 
        return $this->bookList->getBook($bookNum);
    }
     /**
     * method to remove books
     */
    function removeBook($book) {
        if (NULL == $this->bookList) {
            $this->makeBookList();
        } 
        return $this->bookList->removeBook($book);
    }
    /**
     * to create book list
     */
    function makeBookList() {
        $this->bookList = new bookList();
    }
}
?>