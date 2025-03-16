<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <title>操作日志</title>
</head>
<body>
    <h1>操作日志</h1>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>用户ID</th>
            <th>操作</th>
            <th>时间</th>
        </tr>
        <?php foreach ($logs as $log): ?>
        <tr>
            <td><?php echo $log['id']; ?></td>
            <td><?php echo $log['user_id']; ?></td>
            <td><?php echo $log['action']; ?></td>
            <td><?php echo $log['created_at']; ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>