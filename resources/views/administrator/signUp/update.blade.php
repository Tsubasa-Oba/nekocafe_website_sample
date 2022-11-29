<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon"  href="{{ asset('/favicon.ico') }}">
    <title>猫カフェ にゃんこのおなか 管理者画面</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
</head>
<body>
    <main class="form-signin">
        <h1 class="mb-3 fw-normal text-center">管理者情報編集</h1>
        <a href="{{ $updateViewData['indexUrl'] }}">戻る＞</a><br>
        @if (session('feedback.success'))
            <p style="color:green">{{ session('feedback.success') }}</p>
        @endif
        <div class="form-floating">
            <form action="{{ $updateViewData['editUrl'] }}" method="post">
            @method('PUT')
                @csrf
                <label for="name">管理者名
                    <span class="required"></span>
                </label>
                <input type="text" name="name" value="{{ $updateViewData['name'] }}" class="form-control" id="floatingInput">
                <br>
                <label for="admin_id">管理者ID
                    <span class="required"></span>
                </label>
                <input type="text" name="admin_id" value="{{ $updateViewData['admin_id'] }}" class="form-control" id="floatingInput">
                <br>
                <label for="admin_pass">管理者パスワード
                    <span class="required"></span>
                </label>
                <input type="password" name="admin_pass" value="{{ $updateViewData['admin_pass'] }}" class="form-control" id="floatingInput">
                <br>
                <label for="type">管理者権限
                    <span class="required"></span>
                </label>
                <input 
                    type="radio" 
                    name="type" 
                    value="admin"
                    @if($updateViewData['type'] == 'admin') checked @endif 
                >admin
                <input 
                    type="radio" 
                    name="type" 
                    value="basic"
                    @if($updateViewData['type'] == 'basic') checked @endif
                >basic
           
                <button type="submit" class="mt-5 w-100 btn btn-lg btn-primary">編集</button>
            </form>
        </div>
    </main>
</body>
</html>