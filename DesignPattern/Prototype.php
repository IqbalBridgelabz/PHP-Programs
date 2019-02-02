<?php

/**
 * top level exception handler function to handle exception
 */
set_exception_handler(function ($e){
    echo "\nException Occurred\n";
    echo $e->getMessage();
});

/**
 * Class subitem
 */
class SubItem{
}

/**
 * Class Item 
 */
class Item
{
    // var bame and sub to store name and the sub class object
    public $name;
    public $sub ;

    /**
     * constructor of the class to init properties
     */
    function __constructor($name)
    {
        $this->name = $name;
        $sub = new Item();
    }

    /**
     * Magic Method clone to clone the attributes/properties of the object
     */
    function __clone()
    {
        $this->name = clone $this->name ;
        $this->sub = clone $this->sub ;
    }
}
//item 1 is the original object
$item1 = new Item("Vivo");
//item 2 is the new object
$item2 = clone $item1;
?>