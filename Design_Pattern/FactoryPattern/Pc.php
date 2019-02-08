<?php
/**
 * Server class to implements server method from abstract computer
 */
class Pc {
    public $name;  //holds the name of an item 
    public $IP;    //holds the ip address of an item
    public $ram;   //holds the brand name of an item
    /**
     * function for PC to perform their operation
     */
    public function pc($name,$IP,$ram){
        $this->name = $name;
        $this->IP = $IP;
        $this->ram = $ram;
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
     * this function returns the available ram details of an item
     */
    function ram(){
        return $this->ram;
    }  
}

?>