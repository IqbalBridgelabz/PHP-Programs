<?php
    require ("/home/admin1/iqbal/Functional_Programs/Utility.php");
    require ("Utility2.php");
    function merge_arrays($left_arr, $right_arr){
	$res = array();
	while (count($left_arr) > 0 && count($right_arr) > 0){
		if($left_arr[0] > $right_arr[0]){
			$res[] = $right_arr[0];
			$right_arr = array_slice($right_arr , 1);
		}else{
			$res[] = $left_arr[0];
			$left_arr = array_slice($left_arr, 1);
		}
	}
	while (count($left_arr) > 0){
		$res[] = $left_arr[0];
		$left_arr = array_slice($left_arr, 1);
	}
	while (count($right_arr) > 0){
		$res[] = $right_arr[0];
		$right_arr = array_slice($right_arr, 1);
	}
	return $res;
}


    function mergesort($array)
    {
    if(count($array) == 1 ) return $array;
	$mid = count($array) / 2;
    $left_arr = array_slice($array, 0, $mid);
    $right_arr = array_slice($array, $mid);
    $left_arr = mergesort($left_arr);
	$right_arr = mergesort($right_arr);
	return merge_arrays($left_arr, $right_arr);
    }
    $str1 = file_get_contents("String.txt");
    $str3 = explode(" ",$str1);
    //$arr = Utility2::stringSearch($str3);
    //$sorted_numbers = mergesort($arr);
    $sorted_numbers = Utility2::stringSearch($str3);
    echo $sorted_numbers;