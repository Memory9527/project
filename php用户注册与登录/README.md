# PHP用户注册与登录 #
主要功能分为用户注册、用户登录、用户退出、用户中心四个部分

用户注册主要功能有:

1. 注册信息表单填写javascript脚本初步检测用户输入的注册信息。
2. 检测用户名是否存在。
3. 将注册信息写入数据表，注册成功。

用户登录的主要功能有:

1. 登录表单填写javascript脚本初步检测用户输入的登录信息。
2. 将用户输入的信息与数据库数据进行核对。
3. 登录信息正确，则提示登录成功，将用户设置为登录状态(session)。
4. 登录信息不正确，则提示登录失败。

用户退出：

1. 注销session。

用户中心

1. 判断用户是否登录，如果没有登录，则转向登录界面。
2. 如果登录时登录状态，则读出用户相关信息

## 页面布局 ##
各页面功能如下

- [reg.html:](https://github.com/Memory9527/project/blob/master/php%E7%94%A8%E6%88%B7%E7%AD%89%E7%BA%A7%E4%B8%8E%E6%B3%A8%E5%86%8C/reg.html)用户注册信息填写表单页面
- [conn.php:](https://github.com/Memory9527/project/blob/master/php%E7%94%A8%E6%88%B7%E7%AD%89%E7%BA%A7%E4%B8%8E%E6%B3%A8%E5%86%8C/conn.php)数据库连接包含文件
- [reg.php:](https://github.com/Memory9527/project/blob/master/php%E7%94%A8%E6%88%B7%E7%AD%89%E7%BA%A7%E4%B8%8E%E6%B3%A8%E5%86%8C/reg.php)用户注册处理程序
- [login.html:](https://github.com/Memory9527/project/blob/master/php%E7%94%A8%E6%88%B7%E7%AD%89%E7%BA%A7%E4%B8%8E%E6%B3%A8%E5%86%8C/login.html)用户登录表单页面
- [login.php:](https://github.com/Memory9527/project/blob/master/php%E7%94%A8%E6%88%B7%E7%AD%89%E7%BA%A7%E4%B8%8E%E6%B3%A8%E5%86%8C/login.php)用户登录处理程序
- [my.php:](https://github.com/Memory9527/project/blob/master/php%E7%94%A8%E6%88%B7%E7%AD%89%E7%BA%A7%E4%B8%8E%E6%B3%A8%E5%86%8C/my.php)用户中心