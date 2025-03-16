# 企业管理后台
Apache 配置

在project_root/.htaccess中添加URL重写规则：

RewriteEngine On

RewriteRule ^(.*)$ public/index.php [L]

部署步骤

将代码上传到服务器。

配置config/database.php中的数据库连接信息。

在MySQL中创建数据库并导入上述表结构。

确保public/目录为Web服务器的根目录。

![image](https://github.com/user-attachments/assets/2084e693-9e8b-4f2c-8377-9755bf9944a3)


