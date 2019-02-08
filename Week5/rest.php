<?php 
$user = array(
    array("name "=>"Iqbal", "role "=>"dev"),
    array("name "=>"Iqbal", "role "=>"dev"),
    array("name "=>"Iqbal", "role "=>"dev"),
    array("name "=>"Iqbal", "role "=>"dev")
);
$responce = array(
    "data "=>$user,
    "count "=>count($user)
);
echo json_encode($responce);
?>