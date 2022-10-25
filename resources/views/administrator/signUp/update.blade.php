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
    <h1>管理者情報編集</h1>
    <a href="{{ $updateViewData['indexUrl'] }}">戻る＞</a><br>
        @if (session('feedback.success'))
            <p style="color:green">{{ session('feedback.success') }}</p>
        @endif
        <form action="{{ $updateViewData['editUrl'] }}" method="post">
        @method('PUT')
            @csrf
            <label for="name">管理者名
                <span class="required"></span>
            </label>
            <input type="text" name="name" value="{{ $updateViewData['name'] }}">
            <br>
            <label for="admin_id">管理者ID
                <span class="required"></span>
            </label>
            <input type="text" name="admin_id" value="{{ $updateViewData['admin_id'] }}">
            <br>
            <label for="admin_pass">管理者パスワード
                <span class="required"></span>
            </label>
            <input type="password" name="admin_pass" value="{{ $updateViewData['admin_pass'] }}">
            <br>
            <label for="auth_type">管理者権限
                <span class="required"></span>
            </label>
            <input 
                type="radio" 
                name="auth_type" 
                value="admin"
                @if($updateViewData['auth_type'] == 'admin') checked @endif 
            >admin
            <input 
                type="radio" 
                name="auth_type" 
                value="basic"
                @if($updateViewData['auth_type'] == 'basic') checked @endif
            >basic
           
            <button type="submit">編集</button>
        </form>
    </div>
</body>
</html>