<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>USER ADD</title>

</head>
<body>
<div class="netsch_log">
    <p>add user page</p>
    <form action="/admin/user" method="POST">
        {!! csrf_field() !!}
        <table>
            <tr>
                <td>用户名：</td>
                <td><input type="text" name="username"></td>
            </tr>

            <tr>
                <td>邮箱：</td>
                <td><input type="email" name="email"></td>
            </tr>
            <tr>
                <td>密码：</td>
                <td><input type="password" name="password"></td>
            </tr>
            <tr>
                <td>确认密码：</td>
                <td><input type="password" name="re-pwd"></td>
            </tr>
            <tr>
                <td>用户类型：</td>
                <td>
                    <input type="radio" name="is_admin" value= 1 >管理员
                    <input type="radio" name="is_admin" value= 0 >普通用户
                </td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="添加"></td>
            </tr>
        </table>
    </form>
</div>

</body>
</html>