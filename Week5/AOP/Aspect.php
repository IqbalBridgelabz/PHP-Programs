<?php
// Define standard aspects
define("before", 0, true);
define("after", 1, true);
define("around", 2, true);
define("throws", 3, true);
// Aspect class
class Aspect {
// Aspect Constructor
function __construct($pointCut, $advice, $code)
{
// Variable for looping through the JoinPoints of the PointCut
$joinPointCrawler = 0;
// Loop throught the JoinPoints of the PointCut
while ($joinPointCrawler < $pointCut->getNumberOfJoinPoints())
{
// Set selected JoinPoint
$pointCut->setSelectedJoinPoint($joinPointCrawler);
// Copy the selected JoinPoint in a temporary JoinPoint
$tempJoinPoint = $pointCut->getJoinPoint();
// Get the class and the method
$tempClass = $tempJoinPoint->getJoinClass();
$tempMethod = $tempJoinPoint->getJoinMethod();
// Find a non-existing temporary method
while ((is_callable(array($tempClass, $tempMethod))))
{
// Add "AOP_" to create a possible non-existing temporary method
$tempMethod = "AOP_".$tempMethod;
}
// Rename the method to the temporary method
classkit_method_rename(
$tempClass,
$tempJoinPoint->getJoinMethod(),
$tempMethod
);

// Retrieve the methodType by reflection
$reflectionMethod = new ReflectionMethod($tempClass, $tempMethod);
// Clear the methodType
$methodType = ’’;
// If the methodType is private, set the methodType private
if ($reflectionMethod->isPrivate())
{
$methodType = CLASSKIT_ACC_PRIVATE;
}
// Elseif the methodType is protected, set the methodType protected
else if ($reflectionMethod->isProtected())
{
$methodType = CLASSKIT_ACC_PROTECTED;
}
// else the methodType is public, set the methodType public
else
{
$methodType = CLASSKIT_ACC_PUBLIC;
}
// Clear the methodArguments
$methodArguments = ’’;
// Retrieve the method arguments by reflection
foreach ($reflectionMethod->getParameters() as $i => $methodParameters)
{
// Seperate the arguments with ’, ’
if ($i != 0)
{
    $methodArguments .=" ";
}
// Add & if the argument is passed by reference
if ($methodParameters->isPassedByReference())
{
$methodArguments .= ’&’;
}
// Finally add the methodname
$methodArguments .= ’&’.$methodParameters->getName();
}
// Select the type of advice of this JoinPoint
switch ($advice)
{
    // Before: The code is placed before the original method
case 0:
$methodCode = $code.’return self::’.$tempMethod.
’(’.$methodArguments.’);’;
break;
// After: The code is placed after the original method
// Therefore the return value is lost in the new method
case 1:
$methodCode = ’self::’.$tempMethod.’(’.$methodArguments.’);’.
$code;
break;
// Around: The code is placed between the original method
// and the return value of this method
case 2:
$methodCode = ’$return = self::’.$tempMethod.
’(’.$methodArguments.’);’.$code.’return $return;’;
break;
// Throws: When trowing or catching an exception, not implemented yet
case 3:
$methodCode = ’return self::’.$tempMethod.
’(’.$methodArguments.’);’;
break;
// Default: No code, just the original method
default:
$methodCode = ’return self::’.$tempMethod.
’(’.$methodArguments.’);’;
}
// The MethodName is added as a variable to the new Method
$methodCode = ’$MethodName = ’.$tempJoinPoint->getJoinMethod().’;’.
$methodCode;
// Create a new method with the original name, arguments and type
classkit_method_add
(
$tempClass,
$tempJoinPoint->getJoinMethod(),
$methodArguments,
$methodCode,
$methodType
);
// Increase the joinPointCrawler by one
$joinPointCrawler++;
}
}
}