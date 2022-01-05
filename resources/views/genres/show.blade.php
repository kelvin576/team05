@extends('app')
@section('title','顯示單一類型資料')
@section('Game_contents')

<table border="1">
    <tr>
        <th>編號</th>
        <th>遊戲類型</th>
    </tr>
        <tr>
            <td>{{$genres->id}}</td>
            <td>{{$genres->name}}</td>
        </tr>
</table>
</body>
@endsection
