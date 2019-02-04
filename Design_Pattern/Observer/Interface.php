<?php
/**
 * interface Subject to create abstract function which is inherit and implements in respective class
 */
require_once "Person.php";
interface Subject
{
    /**
     * abstract methods 
     */
    function attach(Person $pers);
    function detach(Person $pers);
    function notify(Mail $mail);
}
?>