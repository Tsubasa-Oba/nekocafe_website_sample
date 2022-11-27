<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>猫カフェ　にゃんこのおなか　管理者ホーム画面</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
</head>
<body>

    <div class="form-signin">
        <div>
             @if (session('login_success'))
                <div class="alert alert-success">
                    {{ session('login_success') }}
                </div>
            @endif
            <h3 class="mb-3 fw-normal">管理者ホーム画面</h3>
            <ul class="list-unstyled">
                <li>名前：{{ Auth::user()->name }}さんでログイン</li>
                <li>管理者ID:{{ Auth::user()->admin_id }}</li>
                <li>管理者権限:{{ Auth::user()->type }}</li>
            </ul>

            @if (Auth::user()->type == 'admin')
                <div class="mt-1">
                    <a href="{{ route('administrator.signUp.index') }}" class="h5 fw-normal">管理者登録</a>
                </div>
            @endif
                <div class="mt-1">
                    <a href="{{ route('administrator.cats.index') }}" class="h5 fw-normal">猫プロフィール登録</a>
                </div>

            <form action="{{ route('administrator.logout') }}" method="post">
                @csrf
                <button class="w-100 mt-2 btn btn-lg btn-danger">ログアウト</button>
            </form>

        </div>
    </div>
</body>
</html>