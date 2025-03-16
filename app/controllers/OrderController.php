<?php
require_once __DIR__ . '/../models/Order.php';

class OrderController {
    public function index() {
        if (!hasPermission('view_orders')) {
            echo 'Permission Denied';
            exit;
        }
        $orders = Order::getAll();
        require __DIR__ . '/../views/order/index.php';
    }

    public function export() {
        if (!hasPermission('export_orders')) {
            echo 'Permission Denied';
            exit;
        }
        $orders = Order::getAll();
        header('Content-Type: text/csv');
        header('Content-Disposition: attachment; filename="orders.csv"');
        $fp = fopen('php://output', 'w');
        fputcsv($fp, ['ID', 'User ID', 'Product Name', 'Quantity', 'Total Price', 'Created At']);
        foreach ($orders as $order) {
            fputcsv($fp, $order);
        }
        fclose($fp);
    }
}