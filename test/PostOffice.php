<?php
require "Interface.php";
/**
 * class post office provides the basic functionality of the post office
 */
class PostOffice implements Subject
{
    //var mail to store the mails of post office in an array in an array
    private $mail = [];
    //var private to store the list of observers
    private $observer = [];
    /**
     * function to add the ail to the mail array
     */
    public function addMail(Mail $m)
    {
        $this->mail[] = $m;
        $this->notify($m);
    }
    /** 
     * functiont to get mails 
     */
    public function getMails()
    {
        return $this->mail;
    }
    /**
     * functiont to attach the person to observer list
     */
    function attach(Person $pers)
    {
        $this->observer[] = $pers;
    }
    /**
     * funciton to detach/remove the person from the observer list
     */
    function detach(Person $pers){
        if (($key = array_search($pers, $this->observer)) !== false) {
            unset($this->observer[$key]);
        }
    }
    //function to notify the person if mail is received
    function notify(Mail $mail){
        for ($i=0; $i < count($this->observer); $i++) { 
            if($this->observer[$i]->name == $mail->rname ){
                $this->observer[$i]->update($mail);
            }
        }
    }
}
?>