@extends('app')
@section('title','顯示單一遊戲資料編輯頁面')
@section('Game_contents')
<form method="post" action="/games/{{$games->id}}">
    @csrf
    @method('put')
<table bgcolor="#95CACA" border="1">
    <tr>
        <td>編號</td>
        <td>{{$games->id}}</td>
    <tr/>
    <tr>
        <td>遊戲名稱</td>
        <td><input type="text" name="name" value="{{$games->name}}"/></td>
    <tr/>
    <tr>
        <td>發售平台</td>
        <td>
            <select name="platform">
                <option value="SWITCH">SWITCH</option>
                <option value="PS4">PS4</option>
                <option value="PS5">PS5</option>
                <option value="XBOX">XBOX</option>
                <option value="Windows">Windows</option>
                <option value="iOS">iOS</option>
                <option value="Android">Android</option>
                <option value="Stadia">Stadia</option>
                <option value="XSX">XSX</option>
                <option value="Vita">Vita</option>
                <option value="Mac">Mac</option>
                <option value="Linux">Linux</option>
            </select>
        </td>
    <tr/>
    <tr>
        <td>開發商</td>
        <td><input type="text" name="developer" value="{{$games->developer}}"/></td>
    <tr/>
    <tr>
        <td>發行商</td>
        <td><input type="text" name="publisher" value="{{$games->publisher}}"/></td>
    <tr/>
    <tr>
        <td>遊戲類型編號</td>
        <td><input type="text" name="gid"value="{{$games->gid}}"/></td>
    </tr>
</table>
    <input type ="submit" value="修改"/><input type="reset" value="重新輸入"/>
</form>
</body>
@endsection
