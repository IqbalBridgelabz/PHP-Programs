<?php

//requires the function in below files to work
require("Utility.php");
require("OrderedList.php");
class AOrderedList
{
    /**
     * Function to search the word and add it in the file if not found or remove it if found
     */
    function search()
    {
        //name of the file
        $fname = "text.txt";
        //reading file
        $contents = Utility::readFile($fname);
        echo $contents;
        //creating array of words
        $contents = explode(" ", $contents);
        $list = new OrderedList();
        //adding in the list
        for ($i = 0; $i < count($contents); $i++) {
            $list->add((int)$contents[$i]);
        }
        echo "\ncontents in the list are :\n" . $list;
        $file = fopen($fname, "w") or die("Unable to open file ");
        echo "\nenter to search in the list : ";
        $element = Utility::getInt();
        //searching in the list
        if ($list->search($element) === true) {
            echo "Element found \nRemoving element \n";
            $list->remove($element);
            echo $list . "\n";
        } else {
            echo "Element not found \nAdding element \n";
            $list->add($element);
            echo $list . "\n";
        }
        //wriring back to the file
        fwrite($file, $list->getString());
    }
}
AOrderedList::search();
?>