<?php
/********************************************************************************************
 * Purpose : Use Singleton Pattern to create a Book and Author deatils borrow or return by
 *           Book Borrower.
 * File Name: SingletonPaterrn.php
 * Author   : @Hamid Iqbal Khan
 * Version  : 1.0
 * Since    : 31/01/2019
 **********************************************************************************************/
require_once("BookBorrower.php");
require ("/home/admin1/iqbal/Algorithm_Program/Utility.php");

class Singleton{
    function main(){
        echo "Enter Author Name: \n";
        $author = Utility::getArrayString();
        echo "Enter Title Name: \n";
        $title = Utility::getArrayString();

        echo "BEGIN TESTING SINGLETON PATTERN:\n\n";
        $bookBorrower1 = new BookBorrower($author,$title);    //Creating new object for Book Borrower1
        $bookBorrower2 = new BookBorrower($author,$title);    //Creating new object for Book Borrower2
        $bookBorrower1->borrowBook($author,$title);           //calling borrowBook function for first Object
        echo "BookBorrower1 asked to borrow the book:\n";
        echo "Author and Title: ";
        echo $bookBorrower1->getAuthorAndTitle()."\n\n";
        $bookBorrower2->borrowBook($author,$title);      //calling borrowBook function for second Object
        echo "BookBorrower2 asked to borrow the book:\n";
        echo "Author and Title: ";
        echo $bookBorrower1->getAuthorAndTitle()."\n";
        echo $bookBorrower2->getAuthorAndTitle()."\n";
        $bookBorrower1->returnBook();                    //calling borrowBook function for first Object
        echo "BookBorrower1 returned the book:\n";
        $bookBorrower2->borrowBook($author,$title);      //calling borrowBook function for second Object
        echo "Author and Title: ";
        echo $bookBorrower1->getAuthorAndTitle()."\n\n";
        echo "END TESTING SINGLETON PATTERN:\n";
    }
}
Singleton::main();      // calling main function
?>