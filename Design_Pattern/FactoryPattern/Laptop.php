<?php
/**
 * laptop class implementation 
 */

class Laptop {
    public $name;  //holds the name of an item 
    public $IP;    //holds the ip address of an item
    public $brand; //holds the brand name of an item
    /**
     * function for laptop to perform their operation
     */
    public function laptop($name,$IP,$brand){
        $this->name = $name;
        $this->IP = $IP;
        $this->brand = $brand;
    }
    /**
     * this function returns the name of an item
     */
    function name(){
        return $this->name;
    }
    /**
     * this function returns the ip address of an item
     */
    function IP(){
        return $this->IP;
    }
    /**
     * this function returns the brand name of an item
     */
    function brand(){
        return $this->brand;
    } 
}

?>