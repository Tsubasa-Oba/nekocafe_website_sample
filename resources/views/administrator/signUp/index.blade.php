<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>猫カフェ にゃんこのおなか 管理者画面</title>
    <style>
            .required::before {
        content: "必須";
        font-size: 11px;
        color: #ffffff;
        margin-right: 5px;
        margin-left: 5px;
        background: #b22222;
        padding: 1px 6px;
        border-radius: 4px;
    }
    </style>
</head>
<body>
    <h1>管理者登録</h1>
    @if (session('feedback.success'))
            <p style="color:brown">{{ session('feedback.success') }}</p>
    @endif
    <div>
        <form action="{{ $indexViewData['createUrl'] }}" method="post">
            @csrf
            <label for="name">管理者名
                <span class="required"></span>
            </label>
            <input type="text" name="name">
            <br>
            <label for="admin_id">管理者ID
                <span class="required"></span>
            </label>
            <input type="text" name="admin_id">
            <br>
            <label for="admin_pass">管理者パスワード
                <span class="required"></span>
            </label>
            <input type="password" name="admin_pass">
            <br>
            <label for="auth_type">管理者権限
                <span class="required"></span>
            </label>
            <input type="radio" name="auth_type" value="admin">admin
            <input type="radio" name="auth_type" value="basic">basic
           
            <button type="submit">登録</button>
        </form>
    </div>
    
    <div>
        <table>
            <tr>
                <th>管理者名</th>
                <th>管理者ID</th>
                <th>管理者パスワード</th>
                <th>管理者権限</th>
                <th>編集・削除</th>
            </tr>
            @foreach($indexViewData['adminsViewData'] as $adminViewData)
            <tr>
                <th>{{ $adminViewData['name'] }}</th>
                <th>{{ $adminViewData['admin_id'] }}</th>
                <th>{{ $adminViewData['admin_pass'] }}</th>
                <th>{{ $adminViewData['auth_type'] }}</th> 
                <th><a href="{{ $adminViewData['editUrl'] }}">編集</a><br>
                <form action="{{ $adminViewData['deleteUrl'] }}" method="post">
                @method('DELETE')
                @csrf
                <button type="subumit">削除</button></form> </th>               
            </tr>
            @endforeach
        </table>
        
        
    </div> 
    <div>
        {{ $indexViewData['allPaginates'] }}
    </div>
</body>
</html>