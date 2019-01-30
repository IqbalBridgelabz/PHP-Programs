<?php
require ("Utility.php");
class Factory{
    public function getBikeInfo($n){
        for($i=0;$i<$n;$i++){
            switch($n){
            
                case 1: echo "Your Bike is New:\n";
                        return new Honda("150cc","Splender","M-16");
                        break;
                case 2: echo "Your Scooty is Not in good Condition:\n";
                        return new Activa("120cc","Suzuki","M-11");
                        break;
                case 3: echo "Your Bike Name is Latest One:\n";
                        return new Enfield("300cc","RoyalEnfield","M-19");
                        break;
                default : echo "Invalid Input";
                        break;
            }
        }
    }
}
interface Bike{
    function cc();
    function name();
    function model();
}
class Honda implements Bike{
    public $cc;
    public $name;
    public $model;
    function Honda($cc,$name,$model){
        $this->cc = $cc;
        $this->name = $name;
        $this->model = $model;
    }
    function cc(){
        return $this->cc;
    }
    function name(){
        return $this->name;
    }
    function model(){
        return $this->model;
    }
}
class Activa implements Bike{
    public $cc;
    public $name;
    public $model;
    function Activa($cc,$name,$model){
        $this->cc = $cc;
        $this->name = $name;
        $this->model = $model;
    }
    function cc(){
        return $this->cc;
    }
    function name(){
        return $this->name;
    }
    function model(){
        return $this->model;
    }
}
class Enfield implements Bike{
    public $cc;
    public $name;
    public $model;
    function Enfield($cc,$name,$model){
        $this->cc = $cc;
        $this->name = $name;
        $this->model = $model;
    }
    function cc(){
        return $this->cc;
    }
    function name(){
        return $this->name;
    }
    function model(){
        return $this->model;
    }
}
function main(){
    $f = new Factory();
    echo "Press\n1.Honda\n2.Activa\n3.Enfielde \n";
    $obj = $f->getBikeInfo(Utility::getInt());
    $ref = new ReflectionClass($obj);
    echo "Properties Name:\n";
    $dfdf = $ref->getProperties() ;
    foreach($ref->getProperties() as $key){
        echo $key->getName().": ".$key->getValue($obj)."\n";
    } 
    //$f->getBikeInfo($obj);
}
main();
?>