<?php
class OperationLog {
    public static function getAll() {
        global $pdo;
        $sql = "SELECT * FROM operation_logs";
        $stmt = $pdo->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}