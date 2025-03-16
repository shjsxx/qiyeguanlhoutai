<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <title>创建用户</title>
</head>
<body>
    <h1>创建新用户</h1>
    <form action="/users/store" method="POST">
        <label>用户名: <input type="text" name="username" required></label><br>
        <label>密码: <input type="password" name="password" required></label><br>
        <label>邮箱: <input type="email" name="email" required></label><br>
        <label>角色ID: <input type="number" name="role_id" required></label><br>
        <button type="submit">提交</button>
    </form>
</body>
</html>