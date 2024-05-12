<?php
class Personnel {
    private $conn;

    public function __construct($db) {
        $this->conn = $db;
    }

    public function getAll() {
        $query = "SELECT * FROM personnel";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getById($id) {
        $query = "SELECT * FROM personnel WHERE id = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function create($name, $age) {
        $query = "INSERT INTO personnel (name, age) VALUES (?, ?)";
        $stmt = $this->conn->prepare($query);
        return $stmt->execute([$name, $age]);
    }

    public function update($id, $name, $age) {
        $query = "UPDATE personnel SET name = ?, age = ? WHERE id = ?";
        $stmt = $this->conn->prepare($query);
        return $stmt->execute([$name, $age, $id]);
    }

    public function delete($id) {
        $query = "DELETE FROM personnel WHERE id = ?";
        $stmt = $this->conn->prepare($query);
        return $stmt->execute([$id]);
    }
}
?>
