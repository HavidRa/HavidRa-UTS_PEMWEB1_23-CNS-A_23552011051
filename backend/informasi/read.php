<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

// PATH YANG BENAR - sesuaikan dengan struktur Anda
include_once '../config/database.php';
include_once '../models/Informasi.php';

$database = new Database();
$db = $database->getConnection();
$informasi = new Informasi($db);

$stmt = $informasi->read();
$num = $stmt->rowCount();

if($num > 0) {
    $informasi_arr = array();
    $informasi_arr["data"] = array();
    $informasi_arr["success"] = true;
    $informasi_arr["total"] = $num;

    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        extract($row);
        $informasi_item = array(
            "id" => $id,
            "judul" => $judul,
            "gambar" => $gambar,
            "konten" => $konten,
            "tanggal_publikasi" => $tanggal_publikasi,
            "penulis" => $penulis,
            "status" => $status
        );
        array_push($informasi_arr["data"], $informasi_item);
    }

    http_response_code(200);
    echo json_encode($informasi_arr);
} else {
    http_response_code(404);
    echo json_encode(array(
        "message" => "Tidak ada informasi ditemukan.",
        "success" => false
    ));
}
?>