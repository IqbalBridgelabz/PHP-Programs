 <?php      
        require ("/iqbal/Functional_Programs/Utility.php");
        require ("Utility2.php");
        static $i=0;
	  	static $total=0;
	  	static $notes = array(1000,500,100,50,10,5,2,1);
	  	static $money;

	  	
	    function calculate($money,$notes )
	  	{
	  		
	        $rem=0;
			if($money==0)
			{
				return -1 ;
			}
			else
			{
				if($money>=$notes[$i])
				{
					// logic for Calculating The notes
					$calNotes =$money/$notes[$i];
					$rem = $money%$notes[$i];
					$money =$rem;
					$total += $calNotes;
					echo $notes[$i]. " Notes ---> ".$calNotes;
				}
				$i++;
				return $calculate($money, $notes);
			}
		}
            echo " Enter amount ";
            $amount = Utility::getInt();
			$calculate($money,$notes);
			echo "Total Number of Notes are :".$total;
	
?>