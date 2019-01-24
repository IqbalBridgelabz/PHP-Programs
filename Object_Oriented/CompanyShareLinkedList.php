<?php

//requires the function in below files to work
require("Utility.php");
require("LinkedList.php");
class CompanyShares
{
    /**
     * Function to search the word and add it in the file if not found or remove it if found
     */
    function search()
    {
        //name of the file
        $fname = "number.txt";
        //reading file
        $contents = Utility::readFile($fname);
        echo $contents;
        //creating array of words
        $contents = explode(" ", $contents);
        $list = new OrderedList();
        //adding in the list
        for ($i = 0; $i < count($contents); $i++) {
            $list->add($contents[$i]);
        }
        echo "\nCompany Shares in the list are :\n" . $list;
        $file = fopen($fname, "w") or die("Unable to open file ");
        echo "\nEnter Share to search in the list : ";
        $element = Utility::getInt();
        //searching in the list
        if ($list->search($element) === true) {
            echo "Share Exists in the List: \n";
            echo $list . "\n";
        } else {
            echo "Share not found: \nAdding Share into the List:\n";
            $list->add($element);
            echo $list . "\n";
        }
        //wriring back to the file
        fwrite($file, $list->getString());
    }
}
CompanyShares::search();
?>