<html>
    <head>
        <title>

        </title>
    </head>
    <body>
        <div style="width:100%; margin:150px 0 0 40%;">
            <form action="/admin/user/update/{{$user['id']}}" method="POST">

                <table style="border:1px;">
                    <input type="hidden" name="id" value="{{$user['id']}}" >
                    <input type="hidden" name="_token" value="{{ csrf_token() }}" >
                    <tr>
                        <td>用户名</td>
                        <td><input type="text" name="username" value="{{$user['username']}}"></td>
                    </tr>
                    <tr>
                        <td>用户名</td>
                        <td><input type="email" name="email" value="{{$user['email']}}"></td>
                    </tr>
                    <tr>
                        <td style="text-align: right">身份</td>
                        <td><input type="radio" name="is_admin" value="1" />管理员
                            <input type="radio" name="is_admin" value="0" />正常人</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input type="submit" name="submit" value="提交更改"></td>
                    </tr>


                </table>
            </form>
        </div>
    </body>
</html>