@extends('app')
@section('title','顯示類型資料新增頁面')
@section('Game_contents')
<form method="post" action="/genres">
    @csrf
    <table bgcolor="#95CACA" border="1">
        <tr>
            <th>遊戲類型</th>
            <td>
                <select name="name">
                    <option value="角色扮演">角色扮演</option>
                    <option value="動作角色扮演">動作角色扮演</option>
                    <option value="戰略角色扮演">戰略角色扮演</option>
                    <option value="冒險">冒險</option>
                    <option value="恐怖">恐怖</option>
                    <option value="競速">競速</option>
                    <option value="清版動作">清版動作</option>
                    <option value="第三人稱射擊">第三人稱射擊</option>
                    <option value="第一人稱射擊">第一人稱射擊</option>
                    <option value="軌道射擊遊戲">軌道射擊遊戲</option>
                    <option value="平台">平台</option>
                    <option value="橫向卷軸">橫向卷軸</option>
                    <option value="即時戰略">即時戰略</option>
                    <option value="益智">益智</option>
                    <option value="清版射擊">清版射擊</option>
                    <option value="模擬">模擬</option>
                    <option value="格鬥">格鬥</option>
                    <option value="砍殺">砍殺</option>
                    <option value="視覺小說">視覺小說</option>
                    <option value="節奏">節奏</option>
                    <option value="運動類">運動類</option>
                    <option value="射擊">射擊</option>
                </select>
            </td>
        </tr>
    </table>
    <input type ="submit" value="新增"/><input type="reset" value="重新輸入"/>
</form>
</body>
@endsection

