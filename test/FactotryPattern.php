<?php
require ("ComputerFact.php");
/**
 * factory for Computer which return Computer according to the need
 */
class ComputerFactory
{
    // /**
    //  * static function get car to give the car according to type and color
    //  */
    // static function getComputer(string $type , string $color ){
    //    /**
    //     * if else to check the type of the car and call the desired class constructor
    //     */
    //     if($type = "foldable"  || $color == "red"){
    //         return new Laptop($color);
    //     }
    //     else if($type = "touch" || $color == "blue"){
    //         return new Mac($color);
    //     }
    //     else {
    //         return null ;
    //     }
    // }
    public function getComputerInfo($n){
        for($i=0;$i<$n;$i++){
            switch($n){
            
                case 1: echo "Laptop Details Are:\n";
                        return new Laptop("m13");
                case 2: echo "Mac Details Are:\n";
                        return new Mac("t2");
                        break;
                default : echo "Invalid Input";
                        break;
            }
        }
    }
}
// echo "Enter Color: ";
// $color = Utility::getString();
// echo "Enter Type: ";
// $type = Utility::getString();
// $mac = ComputerFactory::getComputer($type,$color);
// echo "Reflection To Check Properties\n";
// $ref = new ReflectionObject($mac);
// foreach($ref->getProperties() as $key)
//     echo $key->getName().": ".$key->getValue($mac)."\n";
function main(){
    $f = new ComputerFactory();
    echo "Press\n1.Laptop\n2.Mac\n";
    $obj = $f->getComputerInfo(Utility::getInt());
    $obj->name();
    $obj->ipAddress();
    $ref = new ReflectionClass($obj);
    echo "Properties Name:\n";
    $dfdf = $ref->getProperties() ;
    foreach($ref->getProperties() as $key){
        echo $key->getName().": ".$key->getValue($obj)."\n";
    } 
}
main();
?>