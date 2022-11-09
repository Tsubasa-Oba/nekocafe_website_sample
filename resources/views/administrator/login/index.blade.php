<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>猫カフェ　にゃんこのおなか　管理者ログイン画面</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>

<main class="form-signin">
  <form action="{{ $authUrl }}" method="post">
    @csrf
    <h1 class="h3 mb-3 fw-normal">管理者ログイン画面</h1>
 
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            
            @if (session('login_error'))
                <div class="alert alert-danger">
                    {{ session('login_error') }}
                </div>
            @endif
        </ul>
    </div>
    @endif

    <div class="form-floating">
      <input type="text" class="form-control" id="floatingInput" name='admin_id'placeholder='管理者ID' required>
      <label for="floatingInput"></label>
    </div>
    <div class="form-floating">
      <input type="password" class="form-control" id="floatingPassword" name='admin_pass' placeholder='管理者パスワード' required>
      <label for="floatingPassword"></label>
    </div>

    <button class="w-100 btn btn-lg btn-primary" type="submit">ログイン</button>
  </form>
</main>

</body>
</html>