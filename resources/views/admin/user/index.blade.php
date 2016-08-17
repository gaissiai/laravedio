<a href="/admin/user/create">添加账户</a>
    <table style="">
        <tr>
            <td>ID</td>
            <td>username</td>
            <td>注册时间</td>
            <td>修改时间</td>
            <td>操作</td>
        </tr>
        @foreach ($users as $user)
        <tr>
            <td>{{$user['id']}}</td>
            <td>{{$user['username']}}</td>
            <td>{{$user['created_at']}}</td>
            <td>{{$user['updated_at']}}</td>
            <td><a href="/admin/user/edit/{{$user['id']}}">编辑</a>&nbsp;
                <a href="/admin/user/destroy/{{$user['id']}}">删除</a></td>
        </tr>
        @endforeach

    </table>
