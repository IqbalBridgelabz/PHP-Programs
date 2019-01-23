<?php
    require "Utility.php";
        $Desc = "Hello <<name>>,\nWe have your full name as <<full name>> in our system.\n".
        "your contact number is 91-xxxxxxxxxx\n". 
        "Please,let us know in case of any clarification.\n".
        "Thank you BridgeLabz 01/01/2016";
        echo "Enter name: ";
        $name = Utility::getString();
        $Desc = preg_replace("/<<name>>/",$name,$Desc);
        echo "Enter Full Name: ";
        $fullName = Utility::getArrayString();
        $Desc = preg_replace("/<<full name>>/",$fullName,$Desc);
        echo "Enter your mobile Number: ";
        $moblienumber = Utility::getInt();
        // $Desc = preg_replace("/^((\+){0,1}91(\s){0,1}(\-){0,1}(\s){0,1}){0,1}9[0-9](\s){0,1}(\-){0,1}(\s){0,1}[1-9]{1}[0-9]{7}$/",$moblienumber,$Desc);
        $Desc = preg_replace("/91-xxxxxxxxxx/",$moblienumber,$Desc);
        //echo "Todays date: ";
        $date = date("d/m/Y");
        $Desc = preg_replace("/01\/01\/2016/",$date,$Desc);
        //echo $date."\n";
        if( $Desc == true )
        {
           echo $Desc."\n";
        }
        return;
   
?>
