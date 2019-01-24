
<?php
class Deck
{  
         /**
	 * Builds a deck of cards.
	 *
	 * @return array
	 */
	public static function cards()
	{
		$values = array('2', '3', '4', '5', '6', '7', '8', '9', '10', 'J', 'Q', 'K', 'A');
		$suits  = array('S', 'H', 'D', 'C');
		
		$cards = array();
		foreach ($suits as $suit) {
			foreach ($values as $value) {
				$cards[] = $value . $suit;
			}
		}
		
		return $cards;
	}
	
	/**
	 * Shuffles an array of cards.
	 *
	 * @param array $cards The array of cards to shuffle.
	 *
	 * @return array
	 */
	public static function shuffle($cards)
	{
		$total_cards = count($cards);
		
		foreach ($cards as $index => $card) {
			// Pick a random second card.
			$card2_index = mt_rand(1, $total_cards) - 1;
			$card2 = $cards[$card2_index];
			
			// Swap the positions of the two cards.
			$cards[$index] = $card2;
			$cards[$card2_index] = $card;
		}
		
		return $cards;
	}
}
$cards = Deck::cards();
$c = implode(" ",$cards);
echo "Cards : ".$c."\n";
$arr = implode(" ",Deck::shuffle($cards));
echo "Shuffle Cards are : ".$arr."\n";
//$arr = [];
// $cArr = count($arr);
//     $arr2D = array();
//     $index = 0;
//     $n = 13;
    
//     for ($i=0; $i < 4; $i++) { 
        
//         $iArr = array();
        
//         for ($j=0; $j < 13; $j++) { 
//             //if index reach size of array then break or when the value of index 
//             //elemnet is greater then $n value break 
//             if ($index == $cArr || $arr[$index]>$n ) {
//                 break;
//             }
//             $iArr[$j] = $arr[$index++];
//         }
       
//         $n += 13;
//         array_push($arr2D,$iArr);
//     }
    
//     for ($i=0; $i < sizeof($arr2D); $i++) { 
//         for ($j=0; $j < sizeof($arr2D[$i]); $j++) { 
//             echo $arr2D[$i][$j]." ";
//         }
//         echo "\n";
//     }