<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>猫カフェ　にゃんこのおなか　管理者ホーム画面</title>
</head>
<body>
    <div class="container">
        <div class="mt-5">
            <!-- @if (session('login_success')) -->
                <div>
                    {{ $login_success }}
                </div>
            <!-- @endif -->
            <h3>管理者ホーム画面</h3>
            <ul>
                <li>名前：{{ Auth::user()->name }}さんでログイン</li>
                <li>管理者ID:{{ Auth::user()->admin_id }}</li>
                <li>管理者権限:{{ Auth::user()->type }}</li>
            </ul>

            @if (Auth::user()->type == 'admin')
                <div>
                    <a href="">管理者登録</a>
                </div>
                <div>
                    <a href="">管理者一覧</a>
                </div>
            @endif
                <div>
                    <a href="">猫プロフィール登録</a>
                </div>
                <div>
                    <a href="">お知らせ</a>
                </div>

        </div>
    </div>
</body>
</html>