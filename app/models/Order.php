<?php
class Order {
    public static function getAll() {
        global $pdo;
        $sql = "SELECT * FROM orders";
        $stmt = $pdo->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}