<?php
class Test{
    private $count = 0;
    private static $save;
    private function Test(){
        $this->count++;
        echo $this->count."\n";
    }
    public function check($s){
        echo $s."\n";
    }
    public function getInstance(){
        if(Test::$save==null){
            Test::$save = new Test();
        }
        return Test::$save;
    }
}
class Test2{
    function main(){
        $a = Test::getInstance();
        $a->check("Splender");
        $a->check("Scooty");
        $b = Test::getInstance();
        $b->check("Enfiels");
    }
}
Test2::main();
?>