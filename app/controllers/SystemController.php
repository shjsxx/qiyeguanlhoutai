<?php
require_once __DIR__ . '/../models/OperationLog.php';

class SystemController {
    public function logs() {
        if (!hasPermission('view_logs')) {
            echo 'Permission Denied';
            exit;
        }
        $logs = OperationLog::getAll();
        require __DIR__ . '/../views/system/logs.php';
    }
}