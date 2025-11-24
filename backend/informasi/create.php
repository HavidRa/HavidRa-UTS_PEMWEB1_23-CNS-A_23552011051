<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

include_once '../config/database.php';
include_once '../models/Informasi.php';

$database = new Database();
$db = $database->getConnection();
$informasi = new Informasi($db);

$data = json_decode(file_get_contents("php://input"));

if(
    !empty($data->judul) &&
    !empty($data->konten) &&
    !empty($data->penulis)
) {
    $informasi->judul = $data->judul;
    $informasi->gambar = $data->gambar ?? '';
    $informasi->konten = $data->konten;
    $informasi->penulis = $data->penulis;
    $informasi->status = $data->status ?? 'active';

    if($informasi->create()) {
        http_response_code(201);
        echo json_encode(array(
            "message" => "Informasi berhasil dibuat.",
            "success" => true
        ));
    } else {
        http_response_code(503);
        echo json_encode(array(
            "message" => "Gagal membuat informasi.",
            "success" => false
        ));
    }
} else {
    http_response_code(400);
    echo json_encode(array(
        "message" => "Data tidak lengkap. Judul, konten, dan penulis diperlukan.",
        "success" => false
    ));
}
?>