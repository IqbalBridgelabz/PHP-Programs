<?php
// require ("/home/admin1/iqbal/Algorithm_Program/Utility.php");
// abstract class BookPrototype {
//     protected $title;
//     protected $topic;
//     abstract function __clone();
//     function getTitle($title) {
//         return $this->title;
//     }
//     function setTitle($titleIn) {
//         $this->title = $titleIn;
//     }
//     function getTopic($topic) {
//         return $this->topic;
//     }
// }

// class PHPBookPrototype extends BookPrototype {
//     function __construct() {
//         echo "Enter Book Name:\n";
//         $bname = Utility::getArrayString();
//         $this->topic = $bname;
//     }
//     function __clone() {
//     }
// }
// echo "BEGIN TESTING PROTOTYPE PATTERN\n";
// echo "Enter Topic Name:\n";
// $topic = Utility::getArrayString();
// echo "Enter Title Name:\n";
// $title = Utility::getArrayString();
// $phpProto = new PHPBookPrototype();
// $book = clone $phpProto;
// echo "Reference Book Name:\n";
// $rTitle = Utility::getArrayString();
// $book->setTitle($rTitle);
// echo "Book Name: ".$book->getTopic($topic)."\n";
// echo "Book Title: ".$book->getTitle($title)."\n";
// echo "END TESTING PROTOTYPE PATTERN"."\n";
/**
 * A class to represent the CocaCola drink
 */
class CocaCola {
    
    private $fizzy;
    private $healthy;
    private $tasty;
 
    /**
     * init a CocaCola drink
     */
    public function __construct() {
        $this->fizzy   = true;
        $this->healthy = false;
        $this->tasty   = true;
    }
 
    /**
     * This magic method is required, even if empty as part of the prototype pattern
     */
    public function __clone() {
    }
 
}
 
$cola = new CocaCola();
 var_dump($cola);
 
$colaClone = clone $cola;
var_dump($colaClone);
?>