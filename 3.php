<?php 
$a=exec('python 2.py', $output);

var_dump($output);
print_r($output);

//$a=(string)$output;

 $response = array();
    $response["success"] = true; 
    $response["price"] = $a;
    echo json_encode($response);

 ?>