<?php
class A
{
    private $count = 0;
    public static $save;
    private function A()
    {
        $this->count++;
        echo $this->count . "\n";
    }
 
    public function getInstance()
    {
        A::$save = new A();
        return A::$save;
    }
 
    public function check($str)
    {
        echo $str . "\n";
    }
}
function main()
{
    $obj1 = A::getInstance();
    $obj1->check("verma");
    echo "1st obj address: ".spl_object_hash($obj1)."\n"; 
    $ref = new ReflectionClass("A");
    $cons = $ref->getConstructor();
    $cons->setAccessible(true);
    $obj = $ref->newInstanceWithoutConstructor();
    $cons->invoke($obj, 0);
    $obj->check("akku");
    echo "2nd obj address: ".spl_object_hash($obj)."\n";   
}
main();
?>