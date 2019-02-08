
<?php
/********************************************************************************************
* Purpose  : Program to create random question
* File Name: QuestionNum.php
* Author   : @Hamid Iqbal Khan
* Version  : 1.0
* Since    : 16/01/2019
********************************************************************************************/
require("Utility.php");
function binarySearch($lower,$upper,$middle,$count,$input,$n)
{

echo "Is your number:$middle \n";

echo "Enter your answer in 'yes' or 'high' or 'low' :";
$input=Utility::getString();
do
{
    if (strcmp($input,("high"))==0)
    {
        $lower= $middle;
        $count++;
    }
    else if (strcmp($input,("yes"))==0)
    {
        echo "The number you thought was: $middle \n";
    $no=$count+1;
        echo"It takes ".$no." times to find your exact number \n";
        break;
    }
    else if(strcmp($input,("low"))==0)
    {
        $upper=$middle;
        $count++;
    }
    if($count<$n)
    {
        $middle=($lower+ $upper+1)/2;
        echo "Is your number ".$middle.":";
        $input=Utility::getString();
    }
}
while($lower<=$upper);
    if ($count>$n)
    {
        echo "Number not found ";
    }
    else
    {
        exit;
    }
}           
echo "Enter any Number:";
$n = Utility::getInt();
$range=(int)pow(2,$n-1);               
echo "Take number between '0' to $range \n";
$count=0;
$input=null;
$lower=0;
$upper=$range;
$middle=($lower+$upper/2);
binarySearch($lower,$upper,$middle,$count,$input,$n);
?>