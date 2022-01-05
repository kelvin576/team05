@extends('app')
@section('title','顯示所有遊戲資料')
@section('Game_contents')
<br>
<td>
    <a href="/games/create">
        新增
    </a>
</td>
<a href="/games/platforma">
    清版動作
</a>
<a href="/games/platformb">
    冒險
</a>
<a href="/games/platformc">
    第一人稱射擊
</a>
<a href="/games/platformd">
    益智
</a>
<a href="/games/platforme">
    運動類
</a>

<table border="1">
    <tr>
        <th>編號</th>
        <th>遊戲名稱</th>
        <th>遊戲類型編號</th>
        <th>遊戲平台</th>
        <th>製作商</th>
        <th>發行商</th>
        <th>操作1</th>
        <th>操作2</th>
        <th>操作3</th>
    </tr>
    @foreach($games as $games)
        <tr>
            <td>{{$games->id}}</td>
            <td>{{$games->name}}</td>
            <td>{{$games->genres->name}}</td>
            <td>{{$games->platform}}</td>
            <td>{{$games->developer}}</td>
            <td>{{$games->publisher}}</td>
            <td>
                <a href="games/{{$games->id}}">
                    詳細
                </a>
            </td>
            <td>
                <a href="/games/{{$games->id}}/edit">
                    修改
                </a>
            </td>
            <td>
                <form method="post" action="games/{{$games->id}}">
                    @csrf
                    @method("delete")
                    <input type="submit" value="刪除"/>
                </form>
            </td>
        </tr>
    @endforeach
</table>
@endsection
