<h1>后台视频管理主页</h1>
<a href="/admin/vedio/create">视频添加</a>
    <table style="">
    <tr>
        <td>ID</td>
        <td>title</td>
        <td>description</td>
        <td>total_time</td>
        <td>tag</td>
        <td>size</td>
        <td>lecturer</td>
        <td>categroy_id</td>
        <td>is_public</td>
        <td>looked_count</td>
        <td>extention_name</td>
        <td>vedio_path</td>
        <td>image_path</td>
        <td>created_at</td>
        <td>操作</td>
    </tr>
    @foreach ($vedios as $vedio)
        <tr>
            <td>{{$vedio['id']}}</td>
            <td>{{$vedio['title']}}</td>
            <td>{{$vedio['description']}}</td>
            <td>{{$vedio['total_time']}}</td>
            <td>{{$vedio['tag']}}</td>
            <td>{{$vedio['size']}}</td>
            <td>{{$vedio['lecturer']}}</td>
            <td>{{$vedio['categroy_id']}}</td>
            <td>{{$vedio['is_public']}}</td>
            <td>{{$vedio['looked_count']}}</td>
            <td>{{$vedio['extention_name']}}</td>
            <td>{{$vedio['vedio_path']}}</td>
            <td>{{$vedio['image_path']}}</td>
            <td>{{$vedio['created_at']}}</td>
            <td>{{$vedio['updated_at']}}</td>
            <td><a href="/admin/vedio/edit/{{$vedio['id']}}">编辑</a>&nbsp;
                <a href="/admin/vedio/destroy/{{$vedio['id']}}">删除</a></td>
        </tr>
    @endforeach

</table>