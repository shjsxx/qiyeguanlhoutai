<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <title>用户列表</title>
</head>
<body>
    <h1>用户列表</h1>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>用户名</th>
            <th>邮箱</th>
            <th>角色ID</th>
        </tr>
        <?php foreach ($users as $user): ?>
        <tr>
            <td><?php echo $user['id']; ?></td>
            <td><?php echo $user['username']; ?></td>
            <td><?php echo $user['email']; ?></td>
            <td><?php echo $user['role_id']; ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
    <a href="/users/create">创建新用户</a>
</body>
</html>