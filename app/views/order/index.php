<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <title>订单列表</title>
</head>
<body>
    <h1>订单列表</h1>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>用户ID</th>
            <th>产品名称</th>
            <th>数量</th>
            <th>总价</th>
            <th>创建时间</th>
        </tr>
        <?php foreach ($orders as $order): ?>
        <tr>
            <td><?php echo $order['id']; ?></td>
            <td><?php echo $order['user_id']; ?></td>
            <td><?php echo $order['product_name']; ?></td>
            <td><?php echo $order['quantity']; ?></td>
            <td><?php echo $order['total_price']; ?></td>
            <td><?php echo $order['created_at']; ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
    <a href="/orders/export">导出订单</a>
</body>
</html>