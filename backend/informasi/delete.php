<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: DELETE");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

include_once '../config/database.php';
include_once '../models/Informasi.php';

$database = new Database();
$db = $database->getConnection();
$informasi = new Informasi($db);

$data = json_decode(file_get_contents("php://input"));

if(!empty($data->id)) {
    $informasi->id = $data->id;

    if($informasi->delete()) {
        http_response_code(200);
        echo json_encode(array(
            "message" => "Informasi berhasil dihapus.",
            "success" => true
        ));
    } else {
        http_response_code(503);
        echo json_encode(array(
            "message" => "Gagal menghapus informasi.",
            "success" => false
        ));
    }
} else {
    http_response_code(400);
    echo json_encode(array(
        "message" => "ID informasi diperlukan.",
        "success" => false
    ));
}
?>