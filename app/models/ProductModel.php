<?php

class ProductModel extends Model {

    public function getAll() {
        $stmt = $this->db->query("SELECT * FROM products ORDER BY id DESC");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getById($id) {
        $stmt = $this->db->prepare("SELECT * FROM products WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function create($name, $price) {
        $stmt = $this->db->prepare("INSERT INTO products (name, price) VALUES (?, ?)");
        return $stmt->execute([$name, $price]);
    }

    public function update($id, $name, $price) {
        $stmt = $this->db->prepare("UPDATE products SET name = ?, price = ? WHERE id = ?");
        return $stmt->execute([$name, $price, $id]);
    }

    public function delete($id) {
        $stmt = $this->db->prepare("DELETE FROM products WHERE id = ?");
        return $stmt->execute([$id]);
    }
}
