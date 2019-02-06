<?php 

class FruitBasket {
    private $fruits = array();
    public function __construct() {}
    public function addFruit(Fruit $fruit) {
        $this->fruits[] = $fruit;
    }
    public function show() {
        if(!empty($this->fruits)) {
            foreach($this->fruits as $fruit) {
                echo $fruit->getFlavor();
            }
        } else {
            throw new Exception("Nothing to show, no fruits!");
        }
    }
}
class Fruit {
    private $flavor = "";
    public function __construct($str) {
        $this->flavor = $str;
    }
    public function getFlavor() {
        print("The fruit " . get_class($this) . " tastes " . $this->flavor . ".\n");
    }
}
class Apple extends Fruit {

    public function __construct() {
        parent::__construct("sweet and juicy");
    }
}
class Orange extends Fruit {
    

    public function __construct() {
        parent::__construct("tangy - but in a citris way");
    }
}
class Banana extends Fruit {

    public function __construct() {
        parent::__construct("a bit on the bland side of sweetness");
    }
}
class Pomegranate extends Fruit {

    public function __construct() {
        parent::__construct("juicy, seedy, and delicious followed by a little bit of sour-like sweetness");
    }
}
?>