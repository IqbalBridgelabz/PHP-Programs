
<?php 
/**
 * Replace the word from given string
 */
  require ("Utility.php");
  //echo "Enter Main String: ";
  // $str1 = Utility::getString();
  $str1 = "hello name how are you:";
  echo "Enter Search String: ";
  $search =  Utility::getString();    
  // using str_replace() function 
  $str = Utility::stringReplace($search,$str1);
  print_r($str);     
  ?> 
  