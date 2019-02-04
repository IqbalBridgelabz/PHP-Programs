<?php
/**
 * Implementation of Prototype on Book Information
 */
abstract class BookPrototype {
    protected $title;
    protected $topic;
    abstract function __clone();
    function getTitle() {
        return $this->title;
    }
    function setTitle($titleIn) {
        $this->title = $titleIn;
    }
    function getTopic() {
        return $this->topic;
    }
}
/**
 * Implementation of PHPBookPrototype extends BookPrototype
 */
class PHPBookPrototype extends BookPrototype {
    function __construct() {
        $this->topic = 'PHP';
    }
    function __clone() {
    }
}
/**
 * Implementation of SQLBookPrototype extends BookPrototype
 */
class SQLBookPrototype extends BookPrototype {
    function __construct() {
        $this->topic = 'Python';
    }
    function __clone() {
    }
}
 
echo "\nBEGIN TESTING PROTOTYPE PATTERN\n\n";
$phpProto = new PHPBookPrototype();     //creating new object of PHPBookPrototype
$sqlProto = new SQLBookPrototype();     //creating new object of SQLBookPrototype
$book1 = clone $sqlProto;               // cloning var $sqlProto
$book1->setTitle('Book Details');       // passing the book titles for book 1
echo "Book 1 topic: ".$book1->getTopic()."\n"; //printing Book 1 topic
echo "Book 1 title: ".$book1->getTitle()."\n"; //printing Book 1 title
$book2 = clone $phpProto;               // cloning var $phpProto
$book2->setTitle('Hamid PHP7');         // passing the book titles for book 2
echo "\nBook 2 topic: ".$book2->getTopic()."\n";  //printing Book 2 topic
echo "Book 2 title: ".$book2->getTitle()."\n";    //printing Book 2 title
$book3 = clone $sqlProto;                // cloning var $sqlProto
$book3->setTitle('Iqbal Python');        // passing the book titles for book 3
echo "\nBook 3 topic: ".$book3->getTopic()."\n";   //printing Book 3 topic
echo "Book 3 title: ".$book3->getTitle()."\n";     //printing Book 3 title
echo "\nEND TESTING PROTOTYPE PATTERN\n\n";
?>