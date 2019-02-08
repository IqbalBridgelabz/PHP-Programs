<?php
/********************************************************************************************
* Purpose  : Implementation of IoC on Dependency Injection to avoid replicate object creation
* File Name: InversionOfControl.php
* Author   : Hamid Iqbal Khan
* Version  : 1.0
* Since    : 06/02/2019
********************************************************************************************/
/**
 * class Logger is having one function which implements all the function of UserProfile by creating 
 * one logger Object and passing this object to user profile constructor during creation of user Profile object
 */
class Logger{
    public function log($message){
        echo ("Logging Message : $message");
    }
}
/**
 * UserProfile Class for implementin all the number of function and and also having a constructor of 
 * Logger class which takes one argument
 */
class UserProfile{
    private $logger;
    public function __construct(Logger $logger){
        $this->logger = $logger;
    }
    /**
     * this function create user and display the message as 
     * logging message user created
     */
    public function createUser(){
        // $logger = new Logger();
        // $logger->log("User Created:");
        $this->logger->log("User Created:");
    }
    /**
     * this function update user and display the message as 
     * logging message user update
     */
    public function updateUser(){
        // $logger = new Logger();
        // $logger->log("User Created:");
        $this->logger->log();
    }
    /**
     * this function delete user and display the message as 
     * logging message user delete
     */
    public function deleteUser(){
        // $logger = new Logger();
        // $logger->log("User Created:");
        $this->logger->log();
    }
}
$logger = new Logger();   // creating object of logger class
$profile  = new UserProfile($logger);   // creating object of UserProfile class
$profile->createUser();
//$profile->createUser();
//$profile->createUser();
?>