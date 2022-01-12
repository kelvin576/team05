@extends('app')
@section('title','顯示所有類型資料')
@section('Game_contents')

<a href="/genres/create">
    新增類型
</a>
<table bgcolor="#95CACA" border="1">
    <tr>
        <th>編號</th>
        <th>遊戲類型</th>
        <th>操作1</th>
        <th>操作2</th>
        <th>操作3</th>
    </tr>
    @foreach($genres as $genres)
        <tr>
            <td>{{$genres->id}}</td>
            <td>{{$genres->name}}</td>
            <td>
                <a href="/genres/{{$genres->id}}">
                    詳細
                </a>
            </td>
            <td>
                <a href="/genres/{{$genres->id}}/edit">
                    修改
                </a>
            </td>
            <td>
                <form method="post" action="genres/{{$genres->id}}">
                    @csrf
                    @method("delete")
                    <input type="submit" value="刪除"/>
                </form>
            </td>
        </tr>
    @endforeach
</table>
</body>
@endsection
