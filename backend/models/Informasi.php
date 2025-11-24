<?php
class Informasi {
    private $conn;
    private $table_name = "informasi";

    public $id;
    public $judul;
    public $gambar;
    public $konten;
    public $tanggal_publikasi;
    public $penulis;
    public $status;

    public function __construct($db) {
        $this->conn = $db;
    }

    // CREATE - Tambah informasi baru
    public function create() {
        $query = "INSERT INTO " . $this->table_name . 
                " SET judul=:judul, gambar=:gambar, konten=:konten, penulis=:penulis, status=:status";
        
        $stmt = $this->conn->prepare($query);
        
        // Sanitize input
        $this->judul = htmlspecialchars(strip_tags($this->judul));
        $this->gambar = htmlspecialchars(strip_tags($this->gambar));
        $this->konten = htmlspecialchars(strip_tags($this->konten));
        $this->penulis = htmlspecialchars(strip_tags($this->penulis));
        $this->status = htmlspecialchars(strip_tags($this->status));
        
        // Bind parameters
        $stmt->bindParam(":judul", $this->judul);
        $stmt->bindParam(":gambar", $this->gambar);
        $stmt->bindParam(":konten", $this->konten);
        $stmt->bindParam(":penulis", $this->penulis);
        $stmt->bindParam(":status", $this->status);
        
        if($stmt->execute()) {
            return true;
        }
        return false;
    }

    // READ - Ambil semua informasi
    public function read() {
        $query = "SELECT * FROM " . $this->table_name . " WHERE status = 'active' ORDER BY tanggal_publikasi DESC";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }

    // READ - Ambil informasi by ID
    public function readOne() {
        $query = "SELECT * FROM " . $this->table_name . " WHERE id = ? LIMIT 0,1";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(1, $this->id);
        $stmt->execute();
        
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        
        if($row) {
            $this->judul = $row['judul'];
            $this->gambar = $row['gambar'];
            $this->konten = $row['konten'];
            $this->tanggal_publikasi = $row['tanggal_publikasi'];
            $this->penulis = $row['penulis'];
            $this->status = $row['status'];
            return true;
        }
        return false;
    }

    // UPDATE - Update informasi
    public function update() {
        $query = "UPDATE " . $this->table_name . 
                " SET judul=:judul, gambar=:gambar, konten=:konten, penulis=:penulis, status=:status 
                 WHERE id = :id";
        
        $stmt = $this->conn->prepare($query);
        
        // Sanitize input
        $this->judul = htmlspecialchars(strip_tags($this->judul));
        $this->gambar = htmlspecialchars(strip_tags($this->gambar));
        $this->konten = htmlspecialchars(strip_tags($this->konten));
        $this->penulis = htmlspecialchars(strip_tags($this->penulis));
        $this->status = htmlspecialchars(strip_tags($this->status));
        $this->id = htmlspecialchars(strip_tags($this->id));
        
        // Bind parameters
        $stmt->bindParam(":judul", $this->judul);
        $stmt->bindParam(":gambar", $this->gambar);
        $stmt->bindParam(":konten", $this->konten);
        $stmt->bindParam(":penulis", $this->penulis);
        $stmt->bindParam(":status", $this->status);
        $stmt->bindParam(":id", $this->id);
        
        if($stmt->execute()) {
            return true;
        }
        return false;
    }

    // DELETE - Hapus informasi
    public function delete() {
        $query = "DELETE FROM " . $this->table_name . " WHERE id = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(1, $this->id);
        
        if($stmt->execute()) {
            return true;
        }
        return false;
    }
}
?>