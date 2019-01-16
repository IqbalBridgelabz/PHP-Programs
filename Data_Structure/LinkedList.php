
<?php
require_once "Node.php";
require "Utility.php";
class LinkedList{
    public $head = null;
    public $count = 0;
    public function insert($data){
        $node = new Node($data);
        $node->next = null;
        if($this->head == null){
            $this->head = $node;
        }
        else{
            $n = $this->head;
            while($n->next != null){
                $n = $n->next;
            }
            $n->next = $node;
        }
    }
    public function show(){
        $node = $this->head;
        while($node->next!=null){
            echo $node->data." ";
            $node = $node->next;
        }
        echo $node->data."\n";
    }
    // public function delete($index){
    //     if($index==0){
    //         $this->head = $this->head->next;
    //     }
    //     else{
    //         $n = $this->head;
    //         $n1 = null;
    //         for($i=0;$i<$index-1;$i++){
    //             $n = $n->next;
    //         }
    //         $n1 = $n->next;
    //         $n->next = $n1->next;
    //     }
    // }
    public function remove($data)
    {
        //check the linked list have data of not
        if ($this->head == null) {
            echo "no data";
            return;
        }
        //if data is equal to head data then is will make next data as head
        if ($this->head->data == $data) {
            $this->head = $this->head->next;
            $this->count--;
            return;
        }
        //temp to hold head data
        $temp = $this->head;
        $i;
        //for loop to store next node of data node
        for ($i = 1; $i <= $this->count; $i++) {
            //if temp data is equal to data then it will break tha loop
            if ($temp->data == $data) {
                //and if data is in the last index the it will not increment the temp value
                if ($i == $this->count) {
                    break;
                }
                $temp = $temp->next;
                break;
            }
            $temp = $temp->next;
        }
        //temp2 to hold privious node
        $temp2 = $this->head;
        //for loop to store privious node in temp
        for ($j = 1; $j < $i - 1; $j++) {
            $temp2 = $temp2->next;
        }
        //if the data is in last index thin it will remove and
        //privious node of last index will change to tail
        if ($this->count == $i) {
            $temp2->next = null;
            $this->tail = $temp2;
            $this->count--;
            return;
        }
        //point privious to the next node of tha node
        $temp2->next = $temp;
        $this->count--;
        return;
    }
    public function search($data)
    {
        //temp to hold head node
        $temp = $this->head;
        //for loop to check data one by one
        for ($i = 0; $i < $this->count; $i++) {
            //if temp data is equal to data in it will return true
            if ($temp->data === $data) {
                return true;
            }
            $temp = $temp->next;
        }
        return false;
    }
}
$ll = new LinkedList();
$arr = (file_get_contents("text.txt"));
$arr1 = explode(" ",$arr);
$n = count($arr1);
for($i=0; $i<$n;$i++){
    $ll->insert($arr1[$i]);
}
$ll->show()."\n";
echo "enter value to search: ";
$val = Utility::getString();
if ($ll->search($val)) {
    echo "Found \n";
    $ll->remove($val);
    //$ls->show();
    $ll->show()."\n";
} else {
    echo "Not Found \n";
    $ll->insert($val);
    //$ls->show();
    $ll->show()."\n";
}

