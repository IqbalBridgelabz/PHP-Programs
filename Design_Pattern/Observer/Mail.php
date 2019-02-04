<?php
include_once "Person.php";
include_once ("Mail.php");
include_once ("Person.php");
include_once ("PostOffice.php");
include_once ("/home/admin1/iqbal/Algorithm_Program/Utility.php");
/**
 * Class mail to make mail as an object
 */
class Mail{
    //var name to store the senders name 
    public $sname;
    //var to store the receivers name
    public $rname ;
    //var to store the message 
    protected $message;
    /**
     * constructor function to initialize the methods
     */
    function __construct(string $sname , string $message , string $rname ){
        $this->rname = $rname ;
        $this->message = $message ;
        $this->sname = $sname ;
    }
    /**
     * functiont to return the message
     */
    function getMessage(){
        return $this->message;
    }
}
?>