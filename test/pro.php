<?php

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

class PHPBookPrototype extends BookPrototype {
    function __construct() {
        $this->topic = 'PHP';
    }
    function __clone() {
    }
}

class SQLBookPrototype extends BookPrototype {
    function __construct() {
        $this->topic = 'Python';
    }
    function __clone() {
    }
}
 
  echo "\nBEGIN TESTING PROTOTYPE PATTERN\n\n";
  $phpProto = new PHPBookPrototype();
  $sqlProto = new SQLBookPrototype();
  $book1 = clone $sqlProto;
  $book1->setTitle('Book Details');
  echo "Book 1 topic: ".$book1->getTopic()."\n";
  echo "Book 1 title: ".$book1->getTitle()."\n";
  $book2 = clone $phpProto;
  $book2->setTitle('Hamid PHP7');
  echo "\nBook 2 topic: ".$book2->getTopic()."\n";
  echo "Book 2 title: ".$book2->getTitle()."\n";
  $book3 = clone $sqlProto;
  $book3->setTitle('Iqbal Python');
  echo "\nBook 3 topic: ".$book3->getTopic()."\n";
  echo "Book 3 title: ".$book3->getTitle()."\n";
  echo "\nEND TESTING PROTOTYPE PATTERN\n\n";
?>