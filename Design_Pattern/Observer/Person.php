<?php
/********************************************************************************************
 * Purpose : Use Observer Pattern to create a Book and Author deatils borrow or return by
 *           Book Borrower.
 * File Name: Person.php
 * Author   : @Hamid Iqbal Khan
 * Version  : 1.0
 * Since    : 31/01/2019
 **********************************************************************************************/
require_once ("Mail.php");
require_once ("Person.php");
include_once ("PostOffice.php");
require_once ("/home/admin1/iqbal/Algorithm_Program/Utility.php");
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
        echo "New Mail From ".$mail->rname." - ".$mail->getMessage().$mail->sname."\n" ;
    }
}
$post = new PostOffice();
echo "Enter Receiver name: ";
$var1 = Utility::getArrayString();
echo "Enter Sender name: ";
$var2 = Utility::getArrayString();
$hmd = new Person($var1);
$iqb = new Person($var2);
$post->attach($hmd);
$post->attach($iqb);
$mail = new Mail($var1, "Where are you ? ",$var2);
$post->addMail($mail);
?>