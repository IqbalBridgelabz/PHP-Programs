<?php
class Test{
    private $count = 0;
    public static $save;
    private function Test(){
        $this->count++;
        echo $this->count."\n";
    }
    public function getInstance(){
        Test::$save = new Test();
        return test::$save;
    }
    public function check(String $str){
        echo $str."\n";
    }
}
class Test2{
    function main(){
        $obj1 = Test::getInstance();
        $obj1->check("Iqbal");
        $obj1->check("   ");
        $obj2 = Test::getInstance();
        $obj2->check("Hamid");
    }
}
Test2::main();
?>