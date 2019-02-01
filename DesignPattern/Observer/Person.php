<?php
require_once "Mail.php";
require_once "Person.php";
require_once "PostOffice.php";
/**
 * interface observer to implement observer behaviour in the class
 */
interface Observer
{
    function update(Mail $mail);
}
/**
 * class person to provide basic properties of a person
 */
class Person implements Observer
{
    //var  name to store the name of the person
    public $name ;
    /**
     * constructor to initialize he default properties
     */
    function __construct(string $name ){
        $this->name = $name ;
    }
    /**
     * function to update the peron about the mail
     */
    function update(Mail $mail){
        echo "New Mail to ".$mail->rname." - ".$mail->getMessage()."from $mail->sname\n" ;
    }
}
$post= new PostOffice();
$hmd = new Person("Hamid");
$iqb = new Person("Iqbal");
$post->attach($hmd);
$post->attach($iqb);
$mail = new Mail("Hamid: ", "Where are you ? ",":Iqbal");
$post->addMail($mail);
?>