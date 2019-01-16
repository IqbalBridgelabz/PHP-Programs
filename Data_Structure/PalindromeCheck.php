<?php 
require "Utility.php";
/**
  * Implementation of Queue using PHP for string palindrome
  */
class Element{
  public $value;
  public $next;
}
/**
  * Queue class that store element in queue
  * Remove element from font
  * Insert element to back
  */
class Queue{
  private $font = null;
  private $back = null; 
  
  /**
    * Check whether the queue is empty or not
    * public function isEmpty(){ return false; }  //stub
    */
  public function isEmpty(){
    return $this->font == null;
  }
  /** 
    * Insert element at the back of queue
    * public function enqueue($value){} //stub
    */
  public function enqueue($value){
     $oldBack = $this->back;
     $this->back = new Element(); 
     $this->back->value = $value;
     if($this->isEmpty()){
       $this->font = $this->back; 
     }else{
       $oldBack->next = $this->back;
     }
  }
  
  /**
    * Remove element from the font of queue 
    * public function dequeue(){ return 0; } //stub
    */ 
  public function dequeue(){
    if($this->isEmpty()){
      return null; 
    }
    $removedValue = $this->font->value;
    $this->font = $this->font->next;
    
    if (Utility::stringPalindrome($removedValue)){ 
        echo "Palindrome"; 
    } 
    else { 
    echo "Not a Palindrome"; 
    } 
  }
}
$queue = new Queue();
$arr = (file_get_contents("text.txt"));
$arr1 = explode(" ",$arr);
$n = count($arr1);
for($i=0; $i<$n;$i++){
    $queue->enqueue($arr1[$i]);
}
while(!$queue->isEmpty()){
  echo $queue->dequeue()."\n";
}
?>