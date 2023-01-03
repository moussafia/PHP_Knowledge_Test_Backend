<?php

include(__DIR__.'/controller/database.php');
$database = new Db();
$conn = $database->connect_pdo();
$qa = $conn->prepare('SELECT * FROM qa');
$qa->execute();
$result = $qa->fetchAll(PDO::FETCH_ASSOC);


$data = array();

foreach( $result as $row){
    $data[] = $row ;
}

echo json_encode($data);
