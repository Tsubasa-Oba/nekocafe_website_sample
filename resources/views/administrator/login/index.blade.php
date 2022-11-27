<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>猫カフェ　にゃんこのおなか　管理者ログイン画面</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">

</head>
<body>

<main class="form-signin">
  <form action="{{ $authUrl }}" method="post">
  <img class="mb-4" src="{{ asset('/storage/site/SiteLogo.png') }}" alt="" width="300">
    @csrf
    <h1 class="h3 mb-3 fw-normal">管理者ログイン画面</h1>
 
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul> 
          @foreach ($errors->all() as $error)           
            <li>{{ $error }}</li>
          @endforeach
        </ul>
    </div>
    @endif

    @if (session('login_error'))
        <div class="alert alert-danger">
            {{ session('login_error') }}
        </div>
    @endif

    @if (session('logout'))
        <div class="alert alert-danger">
            {{ session('logout') }}
        </div>
    @endif

    <div class="form-floating">
      <input type="text" class="form-control" id="floatingInput" name='admin_id'placeholder='管理者ID'>
      <label for="floatingInput">管理者ID</label>
    </div>
    <div class="form-floating">
      <input type="password" class="form-control" id="floatingPassword" name='admin_pass' placeholder='管理者パスワード'>
      <label for="floatingPassword">管理者パスワード</label>
    </div>

    <button class="w-100 btn btn-lg btn-primary" type="submit">ログイン</button>
  </form>
</main>

</body>
</html>