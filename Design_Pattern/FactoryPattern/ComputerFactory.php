<?php
/********************************************************************************************
 * Purpose : Use Factory Pattern to create a Computer Factory that can Produce PC,
 *           Laptop and Server Class Computers.
 *           As Shown in the Figure Below Create an Abstract Computer Class and PC,
 *           Laptop and Server inherit from Computer and ComputerFactory is able to create the corresponding Computer Object on request
 * File Name: ComputerFactory.php
 * Overview : It create  return the Object of computer from Computer factory
 * Author   : @Hamid Iqbal Khan
 * Version  : 1.0
 * Since    : 30/01/2019
 **********************************************************************************************/
require ("Laptop.php");
require ("Server.php");
require ("Pc.php");
require ("/home/admin1/iqbal/Design_Pattern/Utility.php");
/**
 * Factory class For creating an object and and calling the respective class according to requirements 
 */
class ComputerFactory{
    /**
     * function which gives complete information
     */
    public function getInfo($n){
        for($i=0;$i<$n;$i++){
            switch($n){
            
                case 1: echo "Your Laptop is New:\n";
                        return new Laptop("IntelQ4","172.23.100.10","HP");
                        break;
                case 2: echo "Your Server is Not Working:\n";
                        return new Server("ActFiber","172.23.200.10","Hyderabad");
                        break;
                case 3: echo "Your PC is Very Less HDD:\n";
                        return new Pc("IBM","172.110.23.01","1GB");
                        break;
                default : echo "Invalid Input";
                        break;
            }
        }
    }
}
/**
 * calling main function
 */
function main(){
    $f = new ComputerFactory();
    echo "Press\n1.Laptop\n2.Server\n3.PC \n";
    $obj = $f->getInfo(Utility::getInt());
    $ref = new ReflectionClass($obj);
    echo "Properties Name:\n";
    $dfdf = $ref->getProperties() ;
    foreach($ref->getProperties() as $key){
        echo $key->getName()."     ".$key->getValue($obj)."\n";
    } 
}
main();
?>