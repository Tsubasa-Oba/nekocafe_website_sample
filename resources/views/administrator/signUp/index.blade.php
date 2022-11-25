<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>猫カフェ にゃんこのおなか 管理者画面</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
          rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" 
          crossorigin="anonymous">
          @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
    .required::before {
        content: "*";
        font-size: 20px;
        color: red;
    }

      #btn-layout {
        display:inline-flex
      }

    </style>
</head>
<body>
    <main class="form-signin">
    <h1 class="mb-3 fw-normal text-center">管理者登録</h1>
    @if (session('feedback.success'))
            <p style="color:brown">{{ session('feedback.success') }}</p>
    @endif
    <div class="form-floating">
        <form action="{{ $indexViewData['createUrl'] }}" method="post">
            @csrf
            <label for="name">管理者名
                <span class="required"></span>
            </label>
            <input type="text" name="name" class="form-control" id="floatingInput">
            <br>
            <label for="admin_id">管理者ID
                <span class="required"></span>
            </label>
            <input type="text" name="admin_id" class="form-control" id="floatingInput">
            <br>
            <label for="admin_pass">管理者パスワード
                <span class="required"></span>
            </label>
            <input type="password" name="admin_pass" class="form-control" id="floatingPassword">
            <br>
            <label for="type">管理者権限
                <span class="required"></span>
            </label>
            <input type="radio" name="type" value="admin">admin
            <input type="radio" name="type" value="basic">basic
           
            <button type="submit" class="mt-5 w-100 btn btn-lg btn-primary">登録</button>
        </form>
    </div>
    </main>   
    
    <div  class="mt-5 col-lg-6 mx-auto table-responsive">
    <h2 class="h3 mb-3 fw-normal text-center">管理者一覧</h2>
        <table class="table table-striped table-sm">
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
                <th>●●●●●●</th>
                <th>{{ $adminViewData['type'] }}</th> 
                <th>
                    <div id="btn-layout">
                        <a href="{{ $adminViewData['editUrl'] }}" class="btn btn-primary">編集</a>
                        <form action="{{ $adminViewData['deleteUrl'] }}" method="post">
                        @method('DELETE')
                        @csrf
                        <button type="subumit" class="btn btn-danger">削除</button></form>
                    </div>
                </th>               
            </tr>
            @endforeach
        </table>
        
        
    </div> 
    <div>
        {{ $indexViewData['allPaginates'] }}
    </div>

</body>
</html>