<?php 
include __DIR__ ."/../disc_data.php"; 

header('Content-Type: application/json');

echo json_encode($database);  
//var_dump(__DIR__); 