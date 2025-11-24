<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

include_once '../config/database.php';
include_once '../models/Informasi.php';

$database = new Database();
$db = $database->getConnection();
$informasi = new Informasi($db);

$informasi->id = isset($_GET['id']) ? $_GET['id'] : die();

if($informasi->readOne()) {
    $informasi_arr = array(
        "id" => $informasi->id,
        "judul" => $informasi->judul,
        "gambar" => $informasi->gambar,
        "konten" => $informasi->konten,
        "tanggal_publikasi" => $informasi->tanggal_publikasi,
        "penulis" => $informasi->penulis,
        "status" => $informasi->status,
        "success" => true
    );

    http_response_code(200);
    echo json_encode($informasi_arr);
} else {
    http_response_code(404);
    echo json_encode(array(
        "message" => "Informasi tidak ditemukan.",
        "success" => false
    ));
}
?>