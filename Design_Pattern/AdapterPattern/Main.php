<?php
/********************************************************************************************
 * Purpose  : Use Adapter Pattern to create a adapter that implements different volts interface
 *            
 * File Name: Adapter Pattern
 * Overview : It create  return the Object of computer from Computer factory
 * Author   : @Hamid Iqbal Khan
 * Version  : 1.0
 * Since    : 2/01/2019
 **********************************************************************************************/
require_once "Socket.php";
require_once "SocketInterface.php";
require "/home/admin1/iqbal/Algorithm_Program/Utility.php";
/**
 * class mobile to create mobile object
 */
class Mobile{

    //variable to store the charging voltage of the mobile
    private $cvolt ;

    /**
     * constructor of the mobile
     */
    function __construct(int $volt)
    {
        $this->cvolt = $volt ;
    }

    /**
     * function to print charge the mobile if correct voltage is provided
     */
    function charge(int $volt){

        /**
         * charge the mobile if voltage os sam ethe required charging voltage
         * else does not charge
         */
        if($this->cvolt==$volt){
            echo "Charging\n";
        }
        else {
            echo "Not Charging\n";
        }
    }
}
echo "Enter Volt:";
$vol = Utility::getInt();
$mob = new Mobile($vol);                 //new mobile ogject

$adapter = new SocketAdapter();        //new adapter

$volt = $adapter->get120Volts();        //give apropriate voltage
$mob->charge($volt);

?>