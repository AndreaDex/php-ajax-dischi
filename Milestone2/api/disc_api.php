<?php 
include 'C:\MAMP\htdocs\php\php-ajax-dischi\Milestone2\database\disc_data.php';

header('Content-Type: application/json');

echo json_encode($database);