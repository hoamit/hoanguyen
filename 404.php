<?php
header('Content-Type: application/json');
header("HTTP/1.0 404 Not Found");

$response = array(
    "error" => 404,
    "status" => "Page not found",
);
echo json_encode($response);
exit;
?>
