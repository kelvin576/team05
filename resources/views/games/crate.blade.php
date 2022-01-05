<html>
<head>
    <meta charset="UTF-8"/>
    <title>顯示遊戲資料新增頁面</title>
</head>
<body>
<h1>顯示遊戲資料新增頁面</h1>
<form method="post" action="/games">
    @csrf
    <table border="1">
        <tr>
            <td>編號</td>
            <td>{{$games->id}}</td>
        <tr/>
        <tr>
            <td>遊戲名稱</td>
            <td><input type="text" name="name" required/></td>
        <tr/>
        <tr>
            <td>發售平台</td>
            <td>
                <select name="platform">
                    <option value="NS">NS</option>
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
            <td><input type="text" name="developer"/></td>
        <tr/>
        <tr>
            <td>發行商</td>
            <td><input type="text" name="publisher"/></td>
        <tr/>
        <tr>
            <td>遊戲類型編號</td>
            <td><input type="text" name="gid"/></td>
        </tr>
    </table>
    <input type ="submit" value="新增"/><input type="reset" value="重新輸入"/>
</form>
</body>
</html>
