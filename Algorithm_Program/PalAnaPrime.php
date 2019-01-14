
<?php	
// A function that reurns true only if num 
// contains one digit 
function oneDigit($num) 
{ 

return ($num >= 0 && $num < 10); 
} 

// A recursive function to find out whether 
// num is palindrome or not. Initially, dupNum 
// contains address of a copy of num. 
function isPalUtil($num, $dupNum) 
{ 
// Base case (needed for recursion termination): 
// This statement/ mainly compares the first 
// digit with the last digit 
if ($oneDigit($num)) 
    return ($num == ($dupNum) % 10); 

// This is the key line in this method. Note 
// that all recursive/ calls have a separate 
// copy of num, but they all share same copy 
// of dupNum. We divide num while moving up 
// the recursion tree 
if (!isPalUtil($num/10, $dupNum)) 
    return false; 

// The following statements are executed when 
// we move up the recursion call tree 
$dupNum /= 10; 

// At this point, if num%10 contains ith 
// digit from beginning, then (dupNum)%10 
// contains ith digit from end 
return ($num % 10 == ($dupNum) % 10); 
} 

// The main function that uses recursive function 
// isPalUtil() to find out whether num is palindrome 
// or not 
function isPal($num) 
{ 
// If num is negative, make it positive 
if ($num < 0) 
$num = -$num; 

// Create a separate copy of num, so that 
// modifications made to address dupNum don't 
// change the input number. 
$dupNum = $num; // dupNum = num 

return isPalUtil($num, $dupNum); 
} 

// Function to generate all primes and checking 
// whether number is palindromic or not 
function printPalPrimesLessThanN($n) 
{ 
// Create a boolean array "prime[0..n]" and 
// initialize all entries it as true. A value 
// in prime[i] will finally be false if i is 
// Not a prime, else true. 
$prime = []; 
//array_fill(index,number,value);
array_fill_keys($n,$prime);
for ($p = 2; $p*$p <= $n; $p++) 
{ 
    // If prime[p] is not changed, then it is 
    // a prime 
    if ($prime[$p]) 
    { 
        // Update all multiples of p 
        for ($i = $p*2; $i <= $n; $i += $p){ 
            $prime[i] = $false;
        } 
    } 
} 

// Print all palindromic prime numbers 
for ($p = 2; $p <= $n; $p++){ 

// checking whether the given number is 
// prime palindromic or not 
if ($prime[$p] && isPal($p)){ 
    echo $p + " "; 
    } 
} 
} 
$n = 100; 
    echo "Palindromic primes smaller than or equal to $n are :\n"; 
        
    printPalPrimesLessThanN($n);     
?> 
