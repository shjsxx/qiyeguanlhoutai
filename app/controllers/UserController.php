<?php
require_once __DIR__ . '/../models/User.php';

class UserController {
    public function index() {
        if (!hasPermission('view_users')) {
            echo 'Permission Denied';
            exit;
        }
        $users = User::getAll();
        require __DIR__ . '/../views/user/index.php';
    }

    public function create() {
        if (!hasPermission('create_users')) {
            echo 'Permission Denied';
            exit;
        }
        require __DIR__ . '/../views/user/create.php';
    }

    public function store() {
        if (!hasPermission('create_users')) {
            echo 'Permission Denied';
            exit;
        }
        $username = $_POST['username'];
        $password = $_POST['password'];
        $email = $_POST['email'];
        $role_id = $_POST['role_id'];
        User::create($username, $password, $email, $role_id);
        header('Location: /users');
    }
}

// 权限检查函数
function hasPermission($permission) {
    global $pdo;
    $role_id = $_SESSION['role_id'] ?? 1; // 默认角色ID为1
    $sql = "SELECT COUNT(*) FROM role_permissions rp JOIN permissions p ON rp.permission_id = p.id WHERE rp.role_id = ? AND p.name = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$role_id, $permission]);
    return $stmt->fetchColumn() > 0;
}