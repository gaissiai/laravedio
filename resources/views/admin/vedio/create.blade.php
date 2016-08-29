<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Vedio Create</title>

</head>
<body>
<div class="netsch_log">
    <p>add vedio page</p>
    <form action="/admin/vedio" method="POST">
        {!! csrf_field() !!}
        <table>
            <tr>
                <td>title</td>
                <td><input type="text" name="title"></td>
            </tr>

            <tr>
                <td>description</td>
                <td><input type="textarea" name="description"></td>
            </tr>
            <tr>
                <td>时长</td>
                <td><input type="text" name="total_time"></td>
            </tr>
            <tr>
                <td>标签：</td>
                <td><input type="text" name="tag"></td>
            </tr>
            <tr>
                <td>视频大小：</td>
                <td>
                    <input type="text" name="size">

                </td>
            </tr>
            <tr>
                <td>主讲老师：</td>
                <td><input type="text" name="lecturer"></td>
            </tr>
            <tr>
                <td>分类ID：</td>
                <td><input type="text" name="categroy_id"></td>
            </tr>
            <tr>
                <td>是否公开：</td>
                <td><input type="radio" name="is_public" value="1">是</td>
                <td><input type="radio" name="is_public" value="0">否</td>
            </tr>
            <tr>
                <td>观看次数：</td>
                <td><input type="text" name="looked_count"></td>
            </tr>
            <tr>
                <td>视频路径：</td>
                <td><input type="text" name="vedio_path"></td>
            </tr>
            <tr>
                <td>封面图片：</td>
                <td><input type="text" name="image_path"></td>
            </tr>
            <tr>
                <td>播放所需点数（默认隐藏，有由公开选项触发JS）：</td>
                <td><input type="text" name="needpoint"></td>
            </tr>
            <tr>
                <td><input type="submit" value="确定提交"></td>
                <td></td>
            </tr>
        </table>
    </form>
</div>

</body>
</html>