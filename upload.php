<?php 

// $arr = array('a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5);
// echo 'hai';
// $_POST['test'] = 'what' ;
$raw_data = file_get_contents("php://input");

$data = json_decode($raw_data);

// echo json_encode( $data) ;
// var_dump(  $data);
// $jsondata =  $data->data;
$filename = rand(0,999999);


file_put_contents("./uploads/$filename.json",$data);
echo json_encode("$filename"); 

 ?>