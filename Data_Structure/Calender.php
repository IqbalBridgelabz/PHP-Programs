 <?php
 function day($month, $day, $year) {
     $y = $year - (14 - $month) / 12;
     $x = $y + $y/4 - $y/100 + $y/400;
     $m = $month + 12 * ((14 - $month) / 12) - 2;
     $d = ($day + $x + (31*$m)/12) % 7;
     return $d;
 }

 // return true if the given year is a leap year
 function isLeapYear($year) {
     if  (($year % 4 == 0) && ($year % 100 != 0)) return true;
     if  (year % 400 == 0) return true;
     return false;
 }


    $month = 10;    // month (Jan = 1, Dec = 12)
    $year = 2016;     // year

     // months[i] = name of month i
     $months = array("",                              
         "January", "February", "March",
         "April", "May", "June",
         "July", "August", "September",
         "October", "November", "December");
         
     

     // days[i] = number of days in month i
     $days = (" 0, 31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31");
        
     

     // check for leap year
     if ($month == 2 && isLeapYear($year)) $days[$month] = 29;


     // print calendar header
     echo $months[$month] . " " . $year."\n";
     echo " Sun  Mon Tue  Wed Thu  Fri  Sat \n";

     // starting day
     $d = day($month, 1, $year);

     // print the calendar
     for ($i = 0; $i < $d; $i++)
         echo "   ";
     for ($i = 1; $i <= $days[$month]; $i++) {
         echo " ".$i;
         if ((($i + $d) % 7 == 0) || ($i == days[$month])) echo "\n";
     }
?>