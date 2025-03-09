<?php
require "start.php";

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: OPTIONS,GET,POST,PUT,DELETE");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");



$sql = "SELECT * FROM vehicule";
$results = $db->query($sql);

$data = [];
foreach ($results as $row) {
    $data[] = [
        'ID' => $row['id'],
        'Model' => $row['model']
    ];
}

echo json_encode($data);