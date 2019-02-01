<?php
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